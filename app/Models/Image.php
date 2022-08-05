<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'source'
    ];

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }
}