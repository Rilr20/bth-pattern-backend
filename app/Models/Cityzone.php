<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cityzone extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'x_pos',
        'y_pos',
        'radius'
    ];
}
