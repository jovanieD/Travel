<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model

{

    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'class',
        'status',
        'departure',
        'departure_date',
        'arrival_date',

    ];
}
