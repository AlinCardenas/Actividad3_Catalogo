<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function planes(){
        return $this->hasOne('App\Models\Plane', 'id', 'plane_id');
    }

    public function airline__destinations(){
        return $this->hasOne('App\Models\Airline_Destination', 'id', 'airline_destination_id');
    }
}
