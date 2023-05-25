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
        'numAsiento',
        'leave_date',
        'arrive_date'
    ];

    public function users(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function flights(){
        return $this->hasOne(Flight::class, 'id', 'flight_id');
    }
}
