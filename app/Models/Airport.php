<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cant',
        'address_id'
    ];

    //* Llave foranea 
    public function addresses(){
        return $this->hasOne(Address::class, 'id', 'address_id');
    }
}