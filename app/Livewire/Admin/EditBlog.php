<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use App\Models\blogcategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditBlog extends Component
{
    use WithFileUploads;
    public $blog_id;
    public $title;
    public $category;
    public $thumbnail;
    public $featured_image;
    public $attachment;
    public $blog_content;
    private $slug;
    public $more_tags;
    public function mount($blog_id)
    {
        $this->blog_id = $blog_id;
        $blog = Blog::findOrFail($this->blog_id);
        $this->title = $blog->title;
        $this->category = $blog->category_id;
        $this->blog_content = $blog->content;
        $this->more_tags = $blog->tags;
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'category' => 'required',
        'blog_content' => 'required|string',
    ];

    public function addBlof()
    {
        if ($this->featured_image) {
            $this->rules['featured_image'] = 'required|mimes:png,jpg,jpeg|max:2048';
        }
        if ($this->thumbnail) {
            $this->rules['featured_image'] = 'required|mimes:png,jpg,jpeg|max:2048';
        }
        // Validate all fields
        $this->validate();

    }


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    private function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function editBlog()
    {
        $this->validate();
        $this->generateSlug();
        try {
            $blog = Blog::findOrFail($this->blog_id);
            $blog->title = $this->title;
            $blog->content = $this->blog_content;
            $blog->category_id = $this->category;
            $blog->slug = $this->slug;
            $blog->tags = $this->more_tags;
            // Thumbnail
            if($this->thumbnail){
            $imageName = Carbon::now()->timestamp . '.' . $this->thumbnail->extension();
            $this->thumbnail->storeAs('images/blogs/thumbnails', $imageName);
            $blog->thumbnail = $imageName;
            $blog->featured_image = 'null.png';
            }
            $blog->save();

            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Blog created successfully.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on updating blog: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on updating blog: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }

    public function render()
    {
        $categories = blogcategory::orderBy('name')->get();
        return view('livewire.admin.edit-blog',['categories'=>$categories])->layout('layouts.base');
    }
}
