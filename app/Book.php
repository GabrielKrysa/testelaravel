<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'user_id', 'available'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function getAuthorAttribute($value)
    {
        return ucwords($value);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = ucwords($value);
    }

}
