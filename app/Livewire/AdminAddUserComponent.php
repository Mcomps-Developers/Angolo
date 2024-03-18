<?php

namespace App\Livewire;

use Livewire\Component;

class AdminAddUserComponent extends Component
{
    public function render()
    {
        return view('livewire.admin-add-user-component')->layout('layouts.base');
    }
}
