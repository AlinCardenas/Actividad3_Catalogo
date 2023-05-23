<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;


class Airline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'ranking',
        'logo'
    ];

    /* protected function logo(): Attribute
    {
        return new Attribute(
            set: function($logo)
            {
                $route_logo = $logo->store('public/img');                
                return $route_logo;
            }
        );
    } */
}
