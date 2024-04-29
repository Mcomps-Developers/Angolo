<?php

namespace App\Livewire\Admin;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class NewBlog extends Component
{
    use WithFileUploads;
    public $title;
    public $category;
    public $thumbnail;
    public $featured_image;
    public $attachment;
    public $blog_content;
    public $status;
    private $reference;
    private $slug;
    public $tag;
    public $more_tags;

    protected $rules = [
        'title' => 'required|string|max:255',
        'category' => 'required',
        'thumbnail' => 'required|mimes:png,jpg,jpeg|max:2048',
        // 'featured_image' => 'required|mimes:png,jpg,jpeg|max:2048',
        'blog_content' => 'required|string',
        'tag' => 'required',
    ];

    public function addBlof()
    {
        if ($this->featured_image) {
            $this->rules['featured_image'] = 'required|mimes:png,jpg,jpeg|max:2048';
        }

        // Validate all fields
        $this->validate();

    }


    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    private function generateReference()
    {
        do {
            $this->reference = Str::random(5);
        } while (Blog::where('reference', $this->reference)->exists());
    }
    private function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function addBlog()
    {
        $this->validate();
        $this->generateReference();
        $this->generateSlug();
        try {
            $blog = new Blog();
            $blog->title = $this->title;
            $blog->tag_id = $this->tag;
            $blog->content = $this->blog_content;
            $blog->category_id = $this->category;
            $blog->slug = $this->slug;
            $blog->views = 0;
            $blog->tags = $this->more_tags;
            $blog->user_id = Auth::id();
            $blog->reference = $this->reference;
            // Thumbnail
            $imageName = Carbon::now()->timestamp . '.' . $this->thumbnail->extension();
            $this->thumbnail->storeAs('images/blogs/thumbnails', $imageName);
            $blog->thumbnail = $imageName;
            // Cover Image
            // $imageName = Carbon::now()->timestamp . '.' . $this->featured_image->extension();
            // $this->featured_image->storeAs('images/blogs/featured_images', $imageName);
            // $blog->featured_image = $imageName;

            if($this->featured_image){
                $imageName = Carbon::now()->timestamp . '.' . $this->featured_image->extension();
                            $this->featured_image->storeAs('images/blogs/featured_images', $imageName);
                            $blog->featured_image = $imageName;
                }else{
                $blog->featured_image = null.png;
                }

            $blog->save();

            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Blog created successfully.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating blog: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating blog: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        return view('livewire.admin.new-blog', ['categories' => $categories, 'tags' => $tags])->layout('layouts.base');
    }
}
