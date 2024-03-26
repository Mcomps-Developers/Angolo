<?php

namespace App\Livewire\Expert;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class MyContent extends Component
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
                ->addError('Something unexpected occured. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on deleting content: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occured. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {

        $contents=Content::orderByDesc('created_at')->where('user_id',Auth::user()->id)->paginate(10);
        return view('livewire.expert.my-content',['contents'=>$contents])->layout('layouts.base');
    }
}
