<?php

namespace App\Livewire;

use Livewire\Component;

class UiButtonsComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-buttons-component')->layout('layouts.base');
    }
}
