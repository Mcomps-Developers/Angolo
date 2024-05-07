<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditCategory extends Component
{
    use WithFileUploads;
    public $cat_id;
    public $category_name;
    public $category_description;
    public $icon;
    private $slug;
    public function mount($cat_id)
    {
        $this->cat_id = $cat_id;
        $category = Category::findOrFail($this->cat_id);
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
        if ($this->icon) {
            $this->validate([
                'icon' => 'mimes:png,jpg,jpeg|max:4096',
            ]);
        }
        $this->generateSlug();
        try {
            $category = Category::findOrFail($this->cat_id);
            $category->name = $this->category_name;
            $category->description = $this->category_description;
            $category->slug = $this->slug;
            if ($this->icon) {
                $imageName = Carbon::now()->timestamp . '.' . $this->icon->extension();
                $this->icon->storeAs('images/categories', $imageName);
                $category->icon = $imageName;
            }
            $category->save();
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Category Updated.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on updating category: ' . $e->getMessage());
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
        return view('livewire.admin.edit-category')->layout('layouts.base');
    }
}
