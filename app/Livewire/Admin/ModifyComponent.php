<?php

namespace App\Livewire\Admin;

use App\Models\Policy;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ModifyComponent extends Component
{
    public $content;
    public function mount()
    {
        $terms_and_policies = Policy::first();
        $this->content = $terms_and_policies->content;
    }

    protected $rules = [
        'content' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    public function updateTerms()
    {
        $this->validate();
        try {
            $terms_and_policies = Policy::first();
            $terms_and_policies->content = $this->content;
            $terms_and_policies->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Platform terms and policies updated successfully.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on updating terms and policies: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on updating terms and policies: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.admin.modify-component')->layout('layouts.base');
    }
}
