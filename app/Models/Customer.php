<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';
    public function city(){
        return $this->hasOne(City::class,'id','city_id');
        
    }
    public function state(){
        return $this->hasOne(State::class,'id','state_id');
        
    }
    public function country(){
        return $this->hasOne(Country::class,'country_id','country');
        
    }
    public function user(){
        return $this->hasOne(User::class,'user_id','userId');
        
    }
}
