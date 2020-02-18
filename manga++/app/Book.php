<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $fillable = [
        "name",
        "type",
        "description",
        "author",
        "availability",
        "state",
        "price",
        "tags",
        "picture_src"
    ];
}
