<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Starsystem extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "max_players",
        "game_id",
    ];
}
