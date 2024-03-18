<?php

namespace App\Livewire;

use Livewire\Component;

class BookPageComponent extends Component
{
    public function render()
    {
        return view('livewire.book-page-component')->layout('layouts.base');
    }
}
