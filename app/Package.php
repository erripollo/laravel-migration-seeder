<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['title', 'description', 'cover_image', 'destination', 'price', 'departure_from', 'departure_date', 'return_date'];
}
