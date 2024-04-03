<?php

namespace App\Livewire\Expert;

use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MySales extends Component
{
    public function render()
    {
        $userId = Auth::id();
        $transactions = Purchase::orderByDesc('created_at')->whereHas('content', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })
            ->paginate(10);
        return view('livewire.expert.my-sales', ['transactions' => $transactions])->layout('layouts.base');
    }
}
