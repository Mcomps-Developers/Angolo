<?php

namespace App\Livewire;

use App\Models\Policy;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $aboutContent=Policy::first();
        return view('livewire.about-component',['aboutContent'=>$aboutContent])->layout('layouts.base');
    }
}
