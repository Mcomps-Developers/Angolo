<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Content;
use App\Models\ExpertProfile;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $recentContent = Content::orderByDesc('created_at')->where('status', 'published')->limit(10)->get();
        $experts = User::orderBy('name')->where('utype', 'slr')->get();
        $myPurchases = Purchase::orderByDesc('created_at')->where('user_id', Auth::user()->id)->get();
        $nowTrending = Purchase::limit(10)->get();
        return view('livewire.home-component', ['categories' => $categories, 'nowTrending' => $nowTrending, 'myPurchases' => $myPurchases, 'recentContent' => $recentContent, 'experts' => $experts])->layout('layouts.base');
    }
}
