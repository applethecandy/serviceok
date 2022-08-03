<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}