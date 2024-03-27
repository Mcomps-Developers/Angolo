<?php

namespace App\Livewire\User;

use App\Models\Purchase;
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
        return view('livewire.user.my-purchases', ['myPurchases' => $myPurchases, 'purchases' => $purchases])->layout('layouts.base');
    }
}
