<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'ranking' ,
        'description',
        'languages',
        'images',
    ];

    protected function images(): Attribute
    {
        return new Attribute(
            set: function($images) {
                
            }
        );
    }
}
