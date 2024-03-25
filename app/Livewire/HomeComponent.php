<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Content;
use App\Models\ExpertProfile;
use App\Models\User;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $recentContent = Content::orderByDesc('created_at')->where('status', 'published')->limit(10)->get();
        $experts = User::orderBy('name')->where('utype', 'slr')->get();
        return view('livewire.home-component', ['categories' => $categories, 'recentContent' => $recentContent, 'experts' => $experts])->layout('layouts.base');
    }
}
