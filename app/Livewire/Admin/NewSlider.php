<?php

namespace App\Livewire\Admin;

use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewSlider extends Component
{
    use WithFileUploads;
    public $title;
    public $image;
    public $description;
    public $from;
    public $to;
    public $link;

    protected $rules = [
        'title' => 'required',
        'image' => 'required',
        'from' => 'required',
        'to' => 'required',
        'link' => 'required|url',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addSlider()
    {
        $this->validate();
        try {
            $slider = new Slider();
            $slider->title = $this->title;
            $slider->description = $this->description;
            $slider->link = $this->link;
            $slider->from = $this->from;
            $slider->to = $this->to;
            $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
            $this->image->storeAs('images/sliders', $imageName);
            $slider->image = $imageName;
            $slider->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('slider created.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating slider: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating slider: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.admin.new-slider')->layout('layouts.base');
    }
}
