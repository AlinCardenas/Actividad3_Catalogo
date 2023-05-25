<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFlight extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'flight_id',
        'numAsiento'
    ];

    public function users(){
        $this->hasOne(User::class, 'id', 'user_id');
    }
    public function flights(){
        $this->hasOne(Flight::class, 'id', 'flight_id');
    }
}
