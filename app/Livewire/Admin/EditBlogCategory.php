<?php

namespace App\Livewire\Admin;

use App\Models\blogcategory;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;

class EditBlogCategory extends Component
{
    public $cat_id;
    public $category_name;
    public $category_description;
    private $slug;
    public function mount($cat_id)
    {
        $this->cat_id = $cat_id;
        $category = blogcategory::findOrFail($this->cat_id);
        $this->category_name = $category->name;
        $this->category_description = $category->description;
    }
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

    public function editCategory()
    {

        $this->validate();
        $this->generateSlug();
        try {
            $category = blogcategory::findOrFail($this->cat_id);
            $category->name = $this->category_name;
            $category->description = $this->category_description;
            $category->slug = $this->slug;
            $category->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Category Updated.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on updating cablog tegory: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on updating category: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Unexpected error occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        return view('livewire.admin.edit-blog-category')->layout('layouts.base');
    }
}
