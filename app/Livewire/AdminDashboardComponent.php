<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $users = User::where('utype','!=','sadm')->count();
        return view('livewire.admin-dashboard-component',['users'=>$users])->layout('layouts.base');
    }
}
