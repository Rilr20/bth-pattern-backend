<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chargingstation_bike extends Model
{
    use HasFactory;
    protected $fillable = [
        'chargingstation_id',
        'bike_id',
        'arrival',
        'departure'
    ];
}
