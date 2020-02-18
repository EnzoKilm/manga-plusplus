<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Location;

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

    public function location()
    {
    	return $this->hasMany(Location::class);
    }
}
