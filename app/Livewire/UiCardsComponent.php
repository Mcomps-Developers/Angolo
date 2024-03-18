<?php

namespace App\Livewire;

use Livewire\Component;

class UiCardsComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-cards-component')->layout('layouts.base');
    }
}
