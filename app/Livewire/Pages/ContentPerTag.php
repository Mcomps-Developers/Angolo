<?php

namespace App\Livewire\Pages;

use App\Models\Blog;
use App\Models\Content;
use App\Models\Tag;
use Livewire\Component;

class ContentPerTag extends Component
{
    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        $tag = Tag::where('name', $this->name)->first();
        $products = Content::orderBy('title')->where('tag_id', $tag->id)->get();
        $blogs = Blog::where('tag_id', $tag->id)->limit(10)->get();
        return view('livewire.pages.content-per-tag', ['tag' => $tag,'blogs'=>$blogs, 'products' => $products])->layout('layouts.base');
    }
}
