<?php

namespace App\Livewire;

use App\Models\Content;
use App\Models\Purchase;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $users = User::where('utype', '!=', 'sadm')->count();
        $recentPurchases = Purchase::orderByDesc('created_at')->limit(10)->get();
        $purchases = Purchase::whereMonth('created_at', Carbon::now()->month)->where('status', 'paid')->count();
        $content = Content::where('status', 'published')->count();
        $earnings = Purchase::whereMonth('created_at', Carbon::now()->month)->where('status', 'paid')->sum('amount');
        $dailyPurchases = Purchase::all();
        return view('livewire.admin-dashboard-component', ['users' => $users,'dailyPurchases'=>$dailyPurchases,'purchases'=>$purchases, 'recentPurchases' => $recentPurchases,'earnings'=>$earnings, 'content' => $content])->layout('layouts.base');
    }
}
