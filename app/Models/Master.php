<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'city',
        'phone'
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class)->withTimestamps();
    }

    public function createMaster($request)
    {
        return Master::create($request->safe()->except('services'))->services()->attach($request->services);
    }
}
