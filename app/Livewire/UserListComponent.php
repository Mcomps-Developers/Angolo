<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserListComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $users=User::where('utype','byr')->paginate(10);
        return view('livewire.user-list-component',['users'=>$users])->layout('layouts.base');
    }
}
