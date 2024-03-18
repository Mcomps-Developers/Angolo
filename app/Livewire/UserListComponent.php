<?php

namespace App\Livewire;

use Livewire\Component;

class UserListComponent extends Component
{
    public function render()
    {
        return view('livewire.user-list-component')->layout('layouts.base');
    }
}
