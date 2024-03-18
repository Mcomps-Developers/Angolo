<?php

namespace App\Livewire;

use Livewire\Component;

class BookPdfComponent extends Component
{
    public function render()
    {
        return view('livewire.book-pdf-component')->layout('layouts.base');
    }
}
