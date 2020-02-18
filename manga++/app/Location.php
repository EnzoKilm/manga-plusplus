<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Book;
use App\Notifications\BookReturnNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

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

    /**
     * Send the book return notification
     *
     * @param  string  $token
     * @return void
     */
    public function sendBookReturnNotification()
    {
        $this->notify(new BookReturnNotification());
    }
}
