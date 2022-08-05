<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'work_id'
    ];

    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}

/* @mark если человек заказывает две услуги - в базе данных это два пользователя с одинаковым номером телефона */