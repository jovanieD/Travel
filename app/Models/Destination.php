<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'place_name',
        'discriptions'
    ];
    use HasFactory;

    public function book()
    {
        return $this->belongsToMany(Booking::class);
    }
}
