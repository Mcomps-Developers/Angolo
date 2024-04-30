<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Content;
use App\Models\Tag;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $category = Category::where('slug', $this->slug)->first();
        $categoryName = $category->name;
        $products = Content::orderBy('title')->where('category_id', $category->id)->get();
        $tags = Tag::orderBy('name')->get();
        return view('livewire.category-component', ['products' => $products, 'blogs' => $blogs, 'categoryName' => $categoryName, 'tags' => $tags])->layout('layouts.base');
    }
}
