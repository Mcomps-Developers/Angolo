<?php

namespace App\Livewire;

use Livewire\Component;

class UiAlertsComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-alerts-component')->layout('layouts.base');
    }
}
