<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Book;

class Location extends Model
{
    protected $table = "locations";
    protected $fillable = [
        "book_id",
        "user_id",
        "date_retrait",
        "date_max"
    ];

    public function book()
    {
    	return $this->hasMany(Book::class);
    }

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
