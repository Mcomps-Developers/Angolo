<?php

namespace App\Livewire\User;

use App\Models\Purchase;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyPurchases extends Component
{
    use WithPagination;
    public function render()
    {
        $myPurchases = Purchase::whereMonth('created_at', Carbon::now()->month)->where('user_id', Auth::user()->id)->where('status', 'paid')->get();
        $purchases = Purchase::whereMonth('created_at', Carbon::now()->month)->where('user_id', Auth::user()->id)->where('status', 'paid')->sum('amount');
        $wallet = Wallet::where('user_id', Auth::user()->id)->first();
        return view('livewire.user.my-purchases', ['myPurchases' => $myPurchases, 'wallet' => $wallet, 'purchases' => $purchases])->layout('layouts.base');
    }
}
