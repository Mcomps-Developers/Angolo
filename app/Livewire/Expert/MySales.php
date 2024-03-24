<?php

namespace App\Livewire\Expert;

use Livewire\Component;

class MySales extends Component
{
    public function render()
    {
        return view('livewire.expert.my-sales')->layout('layouts.base');
    }
}
