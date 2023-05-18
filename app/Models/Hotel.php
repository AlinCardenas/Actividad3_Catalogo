<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable=[
        'name',
        'price',
        'ranking',
        'description',
        'logo',
        'image',
        'address_id',
        'service_id',
    ];
    use HasFactory;
}
