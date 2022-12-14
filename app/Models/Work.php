<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'date',
        'time',
        'address',
        'comment'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function client()
    {
        return $this->hasOne(Client::class);
    }

    public function createWork($request)
    {
        return Service::firstWhere('title', $request->service)->works()->create($request->validated())->client()->create($request->validated());
    }

    static function updateComment($request)
    {
        $result = Work::find($request->id)->update(['comment' => $request->comment]);
        return $result ? $request->comment : $result;
    }
}
