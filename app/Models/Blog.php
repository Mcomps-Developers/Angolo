<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
