<?php

namespace App\Livewire;

use Livewire\Component;

class UiPaginationComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-pagination-component')->layout('layouts.base');
    }
}
