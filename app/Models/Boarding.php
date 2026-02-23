<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boarding extends Model
{
    protected $fillable = [
        "name", "address", "facilities", "price",
    ];
}
