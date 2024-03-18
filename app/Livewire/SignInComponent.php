<?php

namespace App\Livewire;

use Livewire\Component;

class SignInComponent extends Component
{
    public function render()
    {
        return view('livewire.sign-in-component')->layout('layouts.base');
    }
}
