<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class AddTag extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|unique:tags,name',
    ];


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addTag()
    {
        $this->validate();
        try {
            $tag = new Tag();
            $tag->name = $this->name;
            $tag->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Tag created.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating tag: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating tag: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.admin.add-tag')->layout('layouts.base');
    }
}
