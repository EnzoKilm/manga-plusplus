<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Location;

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

    public function location()
    {
    	return $this->hasMany(Location::class);
    }
}
