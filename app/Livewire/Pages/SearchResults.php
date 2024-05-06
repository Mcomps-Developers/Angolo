<?php

namespace App\Livewire\Pages;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithPagination;

class SearchResults extends Component
{
    use WithPagination;
    public $value;
    public function mount($value)
    {
        $this->value = $value;
    }
    public function render()
    {
        $products = Content::orderByDesc('created_at')->orWhere('title', 'like', '%' . $this->value . '%')
            ->where('status', 'published')
            ->paginate(10);

        return view('livewire.pages.search-results', ['products' => $products])->layout('layouts.base');
    }
}
