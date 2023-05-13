<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    static $rules = [
        'name' => 'required',
        'address' => 'required',
        'ranking' => 'required',
        'description' => 'required',
        'languages' => 'required',
        'images' => 'required|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    ];

    protected $fillable = [
        'name',
        'address',
        'ranking',
        'description',
        'languages',
        'images'
    ];

    public function flights()
    {
        return $this->hasMany('App\Models\Flight', 'flight_id', 'id');
    }
}
