<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\blogcategory;
use Livewire\Component;
use Livewire\WithPagination;

class DisplayBlogs extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs = Blog::orderByDesc('views')->paginate(10);
        $categories = blogcategory::orderBy('name')->limit(20)->get();
        return view('livewire.display-blogs', ['blogs' => $blogs, 'categories' => $categories])->layout('layouts.base');
    }
}
