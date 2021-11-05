<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parkingspace_bike extends Model
{
    use HasFactory;
    protected $fillable = [
        'parkingspace_id',
        'bike_id',
        'arrival',
        'departure'
    ];
}
