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
    	return $this->belongsTo(Book::class, 'book_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
