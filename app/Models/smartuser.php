<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smartuser extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'ecid',
        'ofid',
        'lineid',
        'email',
        'tel',
        'isadmin',
        'consent',
        'pincode',
    ];
}
