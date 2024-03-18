<?php

namespace App\Livewire;

use Livewire\Component;

class TableEditableComponent extends Component
{
    public function render()
    {
        return view('livewire.table-editable-component')->layout('layouts.base');
    }
}
