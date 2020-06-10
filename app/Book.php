<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'user_id'];

    public function user()
    {
        return $this->hasOne('App\User');
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
