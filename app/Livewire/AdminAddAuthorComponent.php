<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\ExpertProfile;
use App\Models\User;
use App\Models\Wallet;
use App\Notifications\NewClerk;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddAuthorComponent extends Component
{
    public $name;
    public $email;
    public $phone_number;
    public $password;
    public $category;

    public function generatePassword()
    {
        $this->password = Str::random(8);
    }

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone_number' => 'required|numeric',
        'category' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addExpert()
    {

        $this->validate();
        $this->generatePassword();
        try {
            $user = new User();
            $user->name = $this->name();
            $user->email = $this->email;
            $user->phone_number = $this->phone_number;
            $user->password = Hash::make($this->password);
            $user->utype = 'slr';
            $user->save();
            // Add Expert Profile
            try {
                $expert = new ExpertProfile();
                $expert->user_id = $user->id;
                $expert->category_id = $this->category;
                $expert->save();
                $user->notify(new NewClerk($user, $this->password));
            } catch (\Throwable $th) {
                notyf()
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->addError('Error creating expert profile');
                return redirect(request()->header('Referer'));
            }
            // Initialize Wallet
            try {
                $wallet = new Wallet();
                $wallet->user_id = $user->id;
                $wallet->save();
            } catch (\Throwable $th) {
                notyf()
                    ->position('x', 'right')
                    ->position('y', 'top')
                    ->addError('Error initializing expert wallet.');
                return redirect(request()->header('Referer'));
            }

            notyf()->position('x', 'right')->position('y', 'top')->addSuccess('Expert account successfully created.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Error creating user account');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.admin-add-author-component', ['categories' => $categories])->layout('layouts.base');
    }
}
