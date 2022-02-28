<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phoneotp extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_number',
        'isverified',
        'otp',

    ];
}
