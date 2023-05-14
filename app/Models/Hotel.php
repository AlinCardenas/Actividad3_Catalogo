<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name' =>'required',
        'price' =>'required',
        'address' =>'required',
        'ranking'=>'required' ,
        'description' =>'required',
        'logo'=>'required|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000 ',
        'image' =>'required|mimes:jpeg,png,jpg,gif|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
        'destino_id'=>'required' ,
    ];
}
