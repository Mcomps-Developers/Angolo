<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class EditTag extends Component
{
    public $id;
    public $name;
    public function render()
    {
        return view('livewire.admin.edit-tag')->layout('layouts.base');
    }
}
