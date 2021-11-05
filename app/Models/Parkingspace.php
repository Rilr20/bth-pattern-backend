<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkingspace extends Model
{
    use HasFactory;

    protected $fillable = [
        'x_pos',
        'y_pos',
        'radius',
        'available',
        'name'
    ];
}
