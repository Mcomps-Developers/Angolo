<?php

namespace App\Livewire;

use Livewire\Component;

class ProfileEditComponent extends Component
{
    public function render()
    {
        return view('livewire.profile-edit-component')->layout('layouts.base');
    }
}
