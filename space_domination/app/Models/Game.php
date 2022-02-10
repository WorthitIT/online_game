<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;


protected $fillable = [
    'name'
  
];
protected $hidden = [
    'armaggedon_time',
    'armaggedon_duration',
];
}