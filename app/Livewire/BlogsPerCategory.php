<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\blogcategory;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsPerCategory extends Component
{
    use WithPagination;
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $category = blogcategory::where('slug', $this->slug)->first();
        $blogs = Blog::orderByDesc('created_at')->where('category_id', $category->id)->paginate(10);
        $categories = blogcategory::orderBy('name')->limit(20)->get();
        return view('livewire.blogs-per-category', ['blogs' => $blogs, 'category' => $category,'categories'=>$categories])->layout('layouts.base');
    }
}
