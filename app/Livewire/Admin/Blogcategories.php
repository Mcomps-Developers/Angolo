<?php

namespace App\Livewire\Admin;

use App\Models\blogcategory;
use Livewire\Component;

class Blogcategories extends Component
{
    public function deleteCategory($rowID){
        $category= blogcategory::findOrFail($rowID);
        $category->delete();
        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->addSuccess('Category deleted.');
    }
    public function render()
    {
        $categories = blogcategory::orderBy('name')->paginate(10);
        return view('livewire.admin.blogcategories',['categories'=>$categories])->layout('layouts.base');
    }
}
