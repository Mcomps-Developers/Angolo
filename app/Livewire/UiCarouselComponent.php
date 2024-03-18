<?php

namespace App\Livewire;

use Livewire\Component;

class UiCarouselComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-carousel-component')->layout('layouts.base');
    }
}
