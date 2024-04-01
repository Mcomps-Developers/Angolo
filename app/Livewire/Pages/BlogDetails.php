<?php

namespace App\Livewire\Pages;

use App\Models\Blog;
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
        return view('livewire.pages.blog-details', ['blog' => $blog])->layout('layouts.base');
    }
}
