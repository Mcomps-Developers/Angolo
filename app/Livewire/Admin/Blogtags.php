<?php

namespace App\Livewire\Admin;

use App\Models\blogtag;
use Livewire\Component;

class Blogtags extends Component
{
    // use WithPagination;

    public function deleteTag($rowID)
    {
        $tag = blogtag::findOrFail($rowID);
        $tag->delete();
        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->addSuccess('Tag deleted.');
    }
    public function render()
    {
        $tags = blogtag::orderBy('name')->paginate(10);
        return view('livewire.admin.blogtags' , ['tags' => $tags])->layout('layouts.base');
    }
}
