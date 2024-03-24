<?php

namespace App\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_name;
    public $icon;
    public $category_description;
    public $slug;

    protected $rules = [
        'category_name' => 'required|unique:categories,name',
        'icon' => 'required',
        'category_description' => 'required|max:255',
    ];

    public function generateSlug()
    {
        try {
            $this->slug = Str::slug($this->category_name);
        } catch (\Throwable $th) {
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Error generating category slug');
            return redirect(request()->header('Referer'));
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    public function addCategory()
    {
        $this->validate();
        $this->generateSlug();
        try {
            $category = new Category();
            $category->name = $this->category_name;
            $category->description = $this->category_description;
            $category->slug = $this->slug;
            $imageName = Carbon::now()->timestamp . '.' . $this->icon->extension();
            $this->icon->storeAs('images/categories', $imageName);
            $category->icon = $imageName;
            $category->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Category created.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating category: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An unexpected error occurred while creating category. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating category: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('An unexpected error occurred while creating category. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }

    public function render()
    {
        return view('livewire.admin-add-category-component')->layout('layouts.base');
    }
}
