<?php

namespace App\Livewire\Admin;

use App\Models\Slider;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class HomeSlider extends Component
{
    use WithPagination;
    public function deleteSlider($rowID)
    {
        try {
            $slider = Slider::findOrFail($rowID);
            $slider->delete();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Slider deleted.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on deleting slider: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on deleting slider: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        $sliders = Slider::orderByDesc('created_at')->paginate(10);
        return view('livewire.admin.home-slider', ['sliders' => $sliders])->layout('layouts.base');
    }
}
