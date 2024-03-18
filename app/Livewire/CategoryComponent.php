<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.category-component')->layout('layouts.base');
    }
}
