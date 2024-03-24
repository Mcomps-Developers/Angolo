<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $categories = Category::orderBy('name')->paginate(10);
        return view('livewire.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
