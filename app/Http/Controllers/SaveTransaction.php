<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Purchase;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\CustomerPurchaseNotification;
use App\Notifications\PublisherPurchaseNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SaveTransaction extends Controller
{
    public function saveTransaction(Request $request)
    {
        $results = $request->json()->all();
        $this->recordTransaction($results['results']);
    }

    private function recordTransaction($results)
    {
        try {
            $transaction = new Transaction();
            $transaction->tracking_id = $results['tracking_id'];
            $transaction->state = $results['state'];
            $transaction->provider = $results['provider'];
            $transaction->value = $results['value'];
            $transaction->net_amount = $results['net_amount'];
            $transaction->phone_number = $results['account'];
            $transaction->api_ref = $results['api_ref'];
            $transaction->customer_id = $results['meta']['customer']['customer_id'];
            $transaction->currency = $results['currency'];
            $transaction->charges = $results['charges'];
            $transaction->failed_code = $results['failed_code'];
            $transaction->failed_reason = $results['failed_reason'];
            $transaction->user_id = Auth::user()->id;
            $transaction->save();
            if ($transaction->state === 'COMPLETE') {
                if ($transaction->api_ref === 'content_purchase') {
                    $this->createPurchase($transaction);
                }
            }
        } catch (\Exception $e) {
            Log::error('Error saving transaction: ' . $e->getMessage());
        }
    }
    public $purchaseReference;
    private function generateReference()
    {
        do {
            $this->purchaseReference = Str::random(5);
        } while (Purchase::where('reference', $this->purchaseReference)->exists());
    }

    // Update Parent Balance
    private function createPurchase($transaction)
    {
        $this->generateReference();

        try {
            $content = Content::where('reference', $transaction->api_ref)->first();
            $purchase = new Purchase();
            $purchase->content_id = $content->id;
            $purchase->user_id = Auth::user()->id;
            $purchase->amount = $transaction->value;
            $purchase->mode = 'mpesa';
            $purchase->status = 'paid';
            $purchase->reference = $this->purchaseReference;

            // Top up publisher wallet
            try {
                $publisher = User::findOrFail($content->user_id);
                $publisherWallet = Wallet::where('user_id', $publisher->id)->first();
                $currentBalance = $publisherWallet->balance;
                $amountToAdd = env('PUBLISHER_RATE') * $transaction->value;
                $publisherWallet->balance = $currentBalance + $amountToAdd;
                $publisherWallet->save();
                $publisher->notify(new PublisherPurchaseNotification($publisher, $purchase, $publisherWallet, $amountToAdd, $price));
            } catch (\Exception $e) {
                Log::error('Unexpected Exception on updating attachment: ' . $e->getMessage());
                notyf()
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->addError('An error occurred while purchasing content. Please try again later.');
                return redirect(request()->header('Referer'));
            } catch (\Throwable $th) {
                Log::error('Unexpected Exception on updating publisher wallet: ' . $th->getMessage());
                notyf()
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->addError('An unexpected error occurred. Please try again later.');
            }
            $purchase->save();
            $user = Auth::user();
            $user->notify(new CustomerPurchaseNotification($user, $purchase, $price));
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Succes, purchase was successful and content has been sent your email. If not visible, check SPAM folder.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating purchase: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating pruchase: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('A throwable error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
}
