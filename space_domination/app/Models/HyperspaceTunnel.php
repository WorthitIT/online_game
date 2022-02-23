<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HyperspaceTunnel extends Model
{
    use HasFactory;

    protected $fillable = [
        'star1_id', 'star2_id'
      
    ];
}
