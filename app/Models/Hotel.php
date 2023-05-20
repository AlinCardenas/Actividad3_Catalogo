<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'ranking',
        'description',
        'logo',
        'image',
        'address_id',
        'service_id',
    ];

    protected function logo(): Attribute
    {
        return new Attribute(
            set: function($logo)
            {
                $route_logo = $logo->store('public/img');                
                return $route_logo;
            }
        );
    }

    protected function image(): Attribute
    {
        return new Attribute(
            set: function($image)
            {
                $name_img=[];                        
                foreach ($image as $file) {
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('public/img', $filename);
                    $name_img[] = $path;
                }
                return json_encode($name_img);
            }
        );
    }
    
    public function addresses(){
        $this->hasOne(Address::class, 'id', 'address_id');
    }
    public function services(){
        $this->hasOne(Service::class, 'id', 'service_id');
    }
}
