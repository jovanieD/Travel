<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Destination;

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
        'user_id'

    ];


    public function destinations()
    {
        return $this->belongsToMany(Destination::class)
            ->withPivot('qty', 'sub_total');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
