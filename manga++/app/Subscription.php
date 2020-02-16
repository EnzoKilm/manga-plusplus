<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
