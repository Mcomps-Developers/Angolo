<?php

namespace App\Livewire;

use App\Models\ExpertProfile;
use App\Models\Social;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileEditComponent extends Component
{
    public function render()
    {
        $social = Social::where('user_id', Auth::id())->get();
        $expert = ExpertProfile::where('user_id', Auth::id())->get();
        return view('livewire.profile-edit-component', ['social' => $social,'expert'=>$expert])->layout('layouts.base');
    }
}
