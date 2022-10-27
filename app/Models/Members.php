<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'gender',
        'age',
        'joinDate',
        'address',
        'city',
        'state',
        'country',
        'postcode',
        'photo',
        'description'
    ];
}
