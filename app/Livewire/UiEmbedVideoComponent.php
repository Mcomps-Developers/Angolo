<?php

namespace App\Livewire;

use Livewire\Component;

class UiEmbedVideoComponent extends Component
{
    public function render()
    {
        return view('livewire.ui-embed-video-component')->layout('layouts.base');
    }
}
