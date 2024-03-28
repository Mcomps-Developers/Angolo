<?php

namespace App\Livewire\Element;

use App\Models\Category;
use App\Models\Tag;
use Livewire\Component;

class SideBar extends Component
{
    public function render()
    {
        $tags = Tag::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();
        return view('livewire.element.side-bar', ['tags' => $tags, 'categories' => $categories]);
    }
}
