<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_name',
        'discriptions'
    ];
    use HasFactory;

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function packages(){
        return $this->hasOne(Package::class);
    }
}
