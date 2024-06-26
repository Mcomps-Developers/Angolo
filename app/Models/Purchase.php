<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function customer(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function content(){
        return $this->belongsTo(Content::class,'content_id');
    }
}
