<?php

namespace App\Livewire;

use Livewire\Component;

class PagesError500Component extends Component
{
    public function render()
    {
        return view('livewire.pages-error500-component')->layout('layouts.base');
    }
}
