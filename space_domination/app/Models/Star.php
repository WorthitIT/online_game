<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "x",
        "y",
        "z", 
        "star_type",
        "mass",
        "radius",
        "luminocity",
        "temperature",
        "starsystem_id"

    ];
}
