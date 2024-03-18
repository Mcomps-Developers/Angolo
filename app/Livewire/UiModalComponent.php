<?php

namespace App\Livewire;

use Livewire\Component;

class UiModalComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-modal-component')->layout('layouts.base');
    }
}
