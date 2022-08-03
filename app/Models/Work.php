<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }
}