<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Content;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class EditContent extends Component
{
    use WithFileUploads;
    public $item_id;
    public $expert;
    public $title;
    public $category;
    public $regular_price;
    public $discount_price;
    public $thumbnail;
    public $cover_images;
    public $attachment;
    public $description;
    public $status;
    public $on_offer;
    public $tag;
    public $slug;
    public function mount($item_id)
    {
        $this->item_id = $item_id;
        $content = Content::findOrFail($item_id);
        $this->expert = $content->user_id;
        $this->category = $content->category_id;
        $this->regular_price = $content->regular_price;
        $this->discount_price = $content->discount_price;
        $this->description = $content->description;
        $this->status = $content->status;
        $this->on_offer = $content->on_sale;
        $this->tag = $content->tag_id;
        $this->title = $content->title;

    }
    protected $rules = [
        'title' => 'required|string|max:60',
        'expert' => 'required',
        'category' => 'required',
        'regular_price' => 'required|numeric|min:20',
        'description' => 'required|string|max:1000',
        'status' => 'required',
        'discount_price' => 'required|numeric|min:10',
        'tag' => 'required',
        'on_offer' => 'required',
    ];

    private function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function updateContent()
    {

        if ($this->cover_images) {
            $this->validate([
                'cover_images.*' => 'mimes:png,jpg,jpeg|max:2048',
            ]);
        }
        if ($this->attachment) {
            $this->validate([
                'attachment.*' => 'required|mimes:pdf,doc,docx,mp3,mp4,txt,ppt,pptx,xls,xlsx|max:5120',
            ]);
        }
        if ($this->thumbnail) {
            $this->validate([
                'thumbnail' => 'required|mimes:png,jpg,jpeg|max:2048',
            ]);
        }
        $this->validate();
        $this->generateSlug();
        try {
            $content = Content::findOrFail($this->item_id);
            $content->title = $this->title;
            $content->tag_id = $this->tag;
            $content->on_sale = $this->on_offer;
            $content->description = $this->description;
            $content->user_id = $this->expert;
            $content->category_id = $this->category;
            $content->regular_price = $this->regular_price;
            $content->discount_price = $this->discount_price;
            $content->status = $this->status;
            $content->slug = $this->slug;

            // Thumbnail
            if ($this->thumbnail) {
                $imageName = Carbon::now()->timestamp . '.' . $this->thumbnail->extension();
                $this->thumbnail->storeAs('images/thumbnails', $imageName);
                $content->thumbnail = $imageName;
            }
            // Attachments
            if ($this->attachment) {
                $attachments = [];
                foreach ($this->attachment as $key => $file) {
                    $fileName = Carbon::now()->timestamp . random_int(1, 9999) . '.' . $file->extension();
                    $file->storeAs('images/attachments', $fileName);
                    $attachments[] = $fileName;
                }
                $content->attachment = implode(",", $attachments);
            }

            if ($this->cover_images) {
                $coverImages = [];
                foreach ($this->cover_images as $key => $image) {
                    $imageName = Carbon::now()->timestamp . random_int(1, 9999) . '.' . $image->extension();
                    $image->storeAs('images/coverImages', $imageName);
                    $coverImages[] = $imageName;
                }
                $content->cover_images = implode(",", $coverImages);;
            }

            $content->save();

            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addSuccess('Content created successfully.');
            return redirect(request()->header('Referer'));
        } catch (\Exception $e) {
            Log::error('Unexpected Exception on creating content: ' . $e->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating content: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('Something unexpected occurred. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }
    public function render()
    {
        $experts = User::orderBy('name')->where('utype', 'slr')->get();
        $categories = Category::orderBy('name')->get();
        $tags = Tag::orderBy('name')->get();
        return view('livewire.admin.edit-content', ['experts' => $experts, 'categories' => $categories, 'tags' => $tags])->layout('layouts.base');
    }
}
