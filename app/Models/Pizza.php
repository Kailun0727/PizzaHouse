<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;

    // protected $table = "some_name";

    // Casting the 'toppings' attribute to an array
    // This is useful when dealing with JSON data in MySQL
    // When retrieved from the database, 'toppings' will be automatically converted to an array
    // When saving to the database, it will be automatically converted to JSON
    protected $casts = [
        'toppings' => 'array'
    ];
}
