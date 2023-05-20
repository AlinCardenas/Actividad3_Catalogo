<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable=[
        'leave_date',
        'arrive_date',
        'count_clients',
        'duration',
        'price',
        'type_lunggage',
        'plane_id',
        'airline_destination_id',
    ];

    public function planes(){
        return $this->hasOne(Plane::class, 'id', 'plane_id');
    }

    public function airline__destinations(){
        return $this->hasOne(Airline_Destination::class, 'id', 'airline_destination_id');
    }
}
