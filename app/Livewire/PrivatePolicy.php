<?php

namespace App\Livewire;

use App\Models\Policy;
use Livewire\Component;

class PrivatePolicy extends Component
{
    public function render()
    {
        $policies = Policy::first();
        return view('livewire.private-policy', ['policies' => $policies]);
    }
}
