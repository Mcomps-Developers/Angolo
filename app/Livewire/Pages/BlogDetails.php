<?php

namespace App\Livewire\Pages;

use App\Models\Blog;
use App\Models\blogcategory;
use Livewire\Component;

class BlogDetails extends Component
{
    public $reference;
    public $slug;

    public function mount($reference, $slug)
    {
        $this->reference = $reference;
        $this->slug = $slug;
    }
    public function render()
    {
        $blog = Blog::where('reference', $this->reference)->first();
        $blog->views += 1;
        $blog->save();
        $relatedBlogs = Blog::orderByDesc('created_at')->where('category_id', $blog->category_id)->orWhere('tag_id', $blog->tag_id)->limit(10)->get();
        $categories = blogcategory::orderBy('name')->limit(10)->get();
        return view('livewire.pages.blog-details', ['categories' => $categories, 'blog' => $blog, 'relatedBlogs' => $relatedBlogs])->layout('layouts.base');
    }
}
