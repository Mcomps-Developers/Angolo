<?php

namespace App\Livewire;

use App\Models\Purchase;
use Livewire\Component;

class BookPdfComponent extends Component
{
    public $reference;

    public function mount($reference)
    {
        $this->reference = $reference;
    }
    public function render()
    {
        $purchase = Purchase::where('reference', $this->reference)->first();
        return view('livewire.book-pdf-component', ['purchase' => $purchase])->layout('layouts.base');
    }
}
