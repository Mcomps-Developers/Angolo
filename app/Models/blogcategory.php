<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcategory extends Model
{
    use HasFactory;
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
