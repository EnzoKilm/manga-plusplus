<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Subscription extends Model
{
    protected $table = "subscriptions";
    protected $fillable = [
        "name",
        "periodicity",
        "free_count",
        "customizable",
        "discount",
        "discount_type",
        "price"
    ];

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
