<?php

namespace App\Livewire\Admin;

use App\Models\blogcategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AddBlogCategory extends Component
{
    use WithFileUploads;
    public $category_name;
    public $category_description;
    public $slug;

    protected $rules = [
        'category_name' => 'required|unique:categories,name',
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
            $category = new blogcategory();
            $category->name = $this->category_name;
            $category->description = $this->category_description;
            $category->slug = $this->slug;
            $category->icon = 123;
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
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating category: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.admin.add-blog-category')->layout('layouts.base');
    }
}
