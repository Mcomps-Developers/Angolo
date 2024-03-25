<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Content;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdminAddBookComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $expert;
    public $category;
    public $regular_price;
    public $discount_price;
    public $thumbnail;
    public $cover_images;
    public $attachment;
    public $description;
    public $status;
    private $reference;
    private $slug;

    protected $rules = [
        'title' => 'required|string|max:60',
        'expert' => 'required',
        'category' => 'required',
        'regular_price' => 'required|numeric|min:20',
        'thumbnail' => 'required|mimes:png,jpg,jpeg|max:2048',
        'description' => 'required|string|max:300',
        'attachment' => 'required|mimes:pdf,doc,docx,mp3,mp4,txt,ppt,pptx,xls,xlsx|max:5120',
        'status' => 'required',
    ];

    public function updated($fields)
    {
        $this->validateOnly($fields);
    }
    private function generateReference()
    {
        do {
            $this->reference = Str::random(5);
        } while (Content::where('reference', $this->reference)->exists());
    }
    private function generateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function addContent()
    {
        if ($this->discount_price) {
            $this->validate([
                'discount_price' => 'numeric|min:10',
            ]);
        }

        if ($this->cover_images) {
            $this->validate([
                'cover_images.*' => 'mimes:png,jpg,jpeg|max:2048',
            ]);
        }
        $this->validate();
        $this->generateReference();
        $this->generateSlug();
        try {
            $content = new Content();
            $content->title = $this->title;
            $content->description = $this->description;
            $content->user_id = $this->expert;
            $content->category_id = $this->category;
            $content->regular_price = $this->regular_price;
            $content->discount_price = $this->discount_price;
            $content->status = $this->status;
            $content->slug = $this->slug;
            $content->reference = $this->reference;

            // Thumbnail
            $imageName = Carbon::now()->timestamp . '.' . $this->thumbnail->extension();
            $this->thumbnail->storeAs('images/thumbnails', $imageName);
            $content->thumbnail = $imageName;

            // Attachment
            $file = Carbon::now()->timestamp . '.' . $this->attachment->extension();
            $this->attachment->storeAs('files/attachments', $file);
            $content->attachment = $file;

            if ($this->cover_images) {
                $coverImages = [];
                foreach ($this->cover_images as $key => $image) {
                    $imageName = Carbon::now()->timestamp . random_int(1, 9999) . '.' . $image->extension();
                    $image->storeAs('images/coverImages', $imageName);
                    $coverImages[] = $imageName;
                }
                $content->cover_images = implode(",", $coverImages);
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
                ->addError('An unexpected error occurred while creating content. Please try again later.');
            return redirect(request()->header('Referer'));
        } catch (\Throwable $th) {
            Log::error('Throwable Error on creating content: ' . $th->getMessage());
            notyf()
                ->position('x', 'right')
                ->position('y', 'top')
                ->addError('A throwable error occurred while creating content. Please try again later.');
            return redirect(request()->header('Referer'));
        }
    }

    public function render()
    {
        $experts = User::orderBy('name')->where('utype', 'slr')->get();
        $categories = Category::orderBy('name')->get();
        return view('livewire.admin-add-book-component', ['experts' => $experts, 'categories' => $categories])->layout('layouts.base');
    }
}
