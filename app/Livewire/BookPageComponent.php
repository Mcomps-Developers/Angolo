<?php

namespace App\Livewire;

use App\Models\Content;
use Livewire\Component;

class BookPageComponent extends Component
{
    public $slug;
    public $reference;
    public function mount($slug, $reference)
    {
        $this->slug = $slug;
        $this->reference = $reference;
    }
    public function render()
    {
        $content = Content::where('reference', $this->reference)->first();
        $rProducts = Content::where('category_id', $content->category_id)->get();
        return view('livewire.book-page-component', ['content' => $content, 'rProducts' => $rProducts])->layout('layouts.base');
    }
}
