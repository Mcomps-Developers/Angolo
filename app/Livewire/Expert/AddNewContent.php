<?php

namespace App\Livewire\Expert;

use Livewire\Component;

class AddNewContent extends Component
{
    public function render()
    {
        return view('livewire.expert.add-new-content')->layout('layouts.base');
    }
}
