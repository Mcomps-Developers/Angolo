<?php

namespace App\Livewire;

use App\Models\Content;
use App\Models\Purchase;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\CustomerPurchaseNotification;
use App\Notifications\PublisherPurchaseNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;

class BookPageComponent extends Component
{
    public $slug;
    public $reference;
    public $purchaseReference;
    public function mount($slug, $reference)
    {
        $this->slug = $slug;
        $this->reference = $reference;
    }
    private function generateReference()
    {
        do {
            $this->purchaseReference = Str::random(5);
        } while (Purchase::where('reference', $this->purchaseReference)->exists());
    }
    public function payWithWallet($price)
    {

        $this->generateReference();
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        if ($price > $wallet->balance) {
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Failed due to insuficient funds. Your wallet balance is Ksh ' . $wallet->balance . '.');
            return;
        } else {

            try {
                $content = Content::where('reference', $this->reference)->first();
                $purchase = new Purchase();
                $purchase->content_id = $content->id;
                $purchase->user_id = Auth::user()->id;
                $purchase->amount = $price;
                $purchase->mode = 'wallet';
                $purchase->status = 'paid';
                $purchase->reference = $this->purchaseReference;


                // Deduct wallet
                try {
                    $wallet = Wallet::where('user_id', Auth::user()->id)->first();
                    $wallet->balance = $wallet->balance - $price;
                    $wallet->save();
                } catch (\Throwable $th) {
                    Log::error('Throwable Error on deducting wallet: ' . $th->getMessage());
                    notyf()
                        ->position('x', 'right')
                        ->position('y', 'top')
                        ->addError('An error occurred while updating wallet balance. Please try again later.');
                    return redirect(request()->header('Referer'));
                }
                // Top up publisher wallet
                try {
                    $publisher = User::findOrFail($content->user_id);
                    $publisherWallet = Wallet::where('user_id', $publisher->id)->first();
                    $currentBalance = $publisherWallet->balance;
                    $amountToAdd = env('PUBLISHER_RATE') * $price;
                    $publisherWallet->balance = $currentBalance + $amountToAdd;
                    $publisherWallet->save();
                    $publisher->notify(new PublisherPurchaseNotification($publisher, $purchase, $publisherWallet, $amountToAdd, $price));
                } catch (\Throwable $th) {
                    Log::error('Unexpected Exception on updating publisher wallet: ' . $th->getMessage());
                    notyf()
                        ->position('x', 'right')
                        ->position('y', 'top')
                        ->addError('An unexpected error occurred while updating publisher wallet. Please try again later.');
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
                    ->addError('An unexpected error occurred while purchasing content. Please try again later.');
                return redirect(request()->header('Referer'));
            } catch (\Throwable $th) {
                Log::error('Throwable Error on creating pruchase: ' . $th->getMessage());
                notyf()
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->addError('A throwable error occurred while purchasing content. Please try again later.');
                return redirect(request()->header('Referer'));
            }
        }
    }
    public function render()
    {
        $content = Content::where('reference', $this->reference)->first();
        $rProducts = Content::where('category_id', $content->category_id)->get();
        return view('livewire.book-page-component', ['content' => $content, 'rProducts' => $rProducts])->layout('layouts.base');
    }
}
