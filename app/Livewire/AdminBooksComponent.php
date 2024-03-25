<?php

namespace App\Livewire;

use App\Models\Content;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class AdminBooksComponent extends Component
{
    use WithPagination;

    public function deleteContent($rowID)
    {
        try {
            $content = Content::findOrFail($rowID);
            $content->delete();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Content deleted.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on delete content: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An unexpected error occurred while deleting content. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on deleting content: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An unexpected error occurred while deleting content. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        $contents = Content::orderBy('title')->paginate(10);
        return view('livewire.admin-books-component', ['contents' => $contents])->layout('layouts.base');
    }
}
