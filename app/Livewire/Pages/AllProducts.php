<?php

namespace App\Livewire\Pages;

use App\Models\Content;
use Livewire\Component;
use Livewire\WithPagination;

class AllProducts extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Content::orderByDesc('created_at')->where('status', 'published')->paginate(10);
        return view('livewire.pages.all-products', ['products' => $products])->layout('layouts.base');
    }
}
