<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Blogtags extends Component
{
    public function render()
    {
        return view('livewire.admin.blogtags')->layout('layouts.base');
    }
}
