<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsComponent extends Component
{
    use WithPagination;
    public function deleteBlog($rowID)
    {
        try {
            $blog = Blog::findOrFail($rowID);
            $blog->delete();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Blog deleted.');
        } catch (\Exception $e) {
            Log::error('Exception Error occurred while deleting blog: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable error occurred while deleting blog: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An error occurred. Please try again.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        $blogs = Blog::orderByDesc('created_at')->paginate(10);
        return view('livewire.admin.blogs-component', ['blogs' => $blogs])->layout('layouts.base');
    }
}
