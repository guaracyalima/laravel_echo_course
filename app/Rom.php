<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rom extends Model
{
    protected $fillable = [
        'name'
    ];

    public function message()
    {
        return $this->hasMany(Message::class, 'room_id');
    }
}
