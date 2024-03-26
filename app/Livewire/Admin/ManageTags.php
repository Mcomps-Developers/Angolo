<?php

namespace App\Livewire\Admin;

use App\Models\Tag;
use Livewire\Component;
use Livewire\WithPagination;

class ManageTags extends Component
{

    use WithPagination;

    public function deleteTag($rowID)
    {
        $tag = Tag::findOrFail($rowID);
        $tag->delete();
        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->addSuccess('Tag deleted.');
    }
    public function render()
    {
        $tags = Tag::orderBy('name')->paginate(10);
        return view('livewire.admin.manage-tags', ['tags' => $tags])->layout('layouts.base');
    }
}
