<?php

namespace App\Livewire;

use Livewire\Component;

class AdminBooksComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-books-component')->layout('layouts.base');
    }
}
