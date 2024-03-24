<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.home-component',['categories'=>$categories])->layout('layouts.base');
    }
}
