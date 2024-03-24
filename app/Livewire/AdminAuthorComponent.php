<?php

namespace App\Livewire;

use App\Models\ExpertProfile;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminAuthorComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $experts = ExpertProfile::orderBy('created_at')->paginate(10);
        return view('livewire.admin-author-component',['experts'=>$experts])->layout('layouts.base');
    }
}
