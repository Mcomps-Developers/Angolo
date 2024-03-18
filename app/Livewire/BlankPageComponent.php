<?php

namespace App\Livewire;

use Livewire\Component;

class BlankPageComponent extends Component
{
    public function render()
    {
        return view('livewire.blank-page-component')->layout('layouts.base');
    }
}
