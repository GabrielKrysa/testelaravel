<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author'];

    public function getAuthorAttribute($value)
    {
        return ucwords($value);
    }

    public function getOwnerAttribute($value)
    {
        return ucwords($value);
    }

    public function setAuthorAttribute($value)
    {
        $this->attributes['author'] = ucwords($value);
    }

    public function setOwnerAttribute($value)
    {
        $this->attributes['owner'] = ucwords($value);
    }
}
