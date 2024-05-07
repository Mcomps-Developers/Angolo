<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class EditCategory extends Component
{
    public $category_id;
    public $name;
    public $description;
    public $icon;




    public function render()
    {
        return view('livewire.admin.edit-category')->layout('layouts.base');
    }
}
