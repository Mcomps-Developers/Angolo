<?php

namespace App\Livewire\Expert;

use App\Models\Content;
use App\Models\Purchase;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ExpertDashboard extends Component
{
    use WithPagination;
    public function render()
    {
        $content = Content::where('status', 'published')->count();
        $purchases = Purchase::whereMonth('created_at', Carbon::now()->month)->where('user_id', Auth::user()->id)->where('status', 'paid')->sum('amount');
        $myPurchases = Purchase::whereMonth('created_at', Carbon::now()->month)->where('user_id', Auth::user()->id)->where('status', 'paid')->paginate(10);
        $userId = Auth::id();
        $earnings = Purchase::whereMonth('created_at', Carbon::now()->month)
            ->where('status', 'paid')
            ->whereHas('content', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();
        $transactions = Purchase::orderByDesc('created_at')->whereHas('content', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->paginate(10); 
        $wallet = Wallet::where('user_id', $userId)->first();
        return view('livewire.expert.expert-dashboard', ['content' => $content,'myPurchases'=>$myPurchases, 'wallet' => $wallet, 'transactions' => $transactions, 'purchases' => $purchases, 'earnings' => $earnings])->layout('layouts.base');
    }
}
