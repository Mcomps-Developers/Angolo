<?php

namespace App\Livewire;

use Livewire\Component;

class PagesErrorComponent extends Component
{
    public function render()
    {
        return view('livewire.pages-error-component')->layout('layouts.base');
    }
}
