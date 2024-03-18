<?php

namespace App\Livewire;

use Livewire\Component;

class UiTabsComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-tabs-component')->layout('layouts.base');
    }
}
