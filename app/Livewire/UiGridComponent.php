<?php

namespace App\Livewire;

use Livewire\Component;

class UiGridComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-grid-component')->layout('layouts.base');
    }
}
