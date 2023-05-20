<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline_Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'airline_id',
        'airport_id',
    ];

    public function destinations(){
        return $this->hasOne(Destination::class, 'id', 'destination_id');
    }
    public function airports(){
        return $this->hasOne(Airport::class, 'id', 'airport_id');
    }
    public function airlines(){
        return $this->hasOne(Airline::class, 'id', 'airline_id');
    }
}
