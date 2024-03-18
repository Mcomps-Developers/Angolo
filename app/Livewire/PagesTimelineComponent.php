<?php

namespace App\Livewire;

use Livewire\Component;

class PagesTimelineComponent extends Component
{
    public function render()
    {
        return view('livewire.pages-timeline-component')->layout('layouts.base');
    }
}
