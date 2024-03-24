<?php

namespace App\Livewire\Expert;

use Livewire\Component;

class MyContent extends Component
{
    public function render()
    {
        return view('livewire.expert.my-content')->layout('layouts.base');
    }
}
