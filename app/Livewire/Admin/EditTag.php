<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class EditTag extends Component
{
    public $tag_id;
    public $name;

    public function mount($tag_id)
    {
        $this->tag_id = $tag_id;
        $tag = Tag::findOrFail($this->tag_id);
        $this->name = $tag->name;
    }

    protected $rules = [
        'name' => 'required|unique:tags,name',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function editTag()
    {
        $this->validate();
        try {
            $tag = Tag::findOrFail($this->tag_id);
            $tag->name = $this->name;
            $tag->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Tag updated.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on updating tag: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on updating tag: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.admin.edit-tag')->layout('layouts.base');
    }
}
