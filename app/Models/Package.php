<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable =['no_of_days', 'cost','hotels','contact_no','discount'];
    use HasFactory;
}
