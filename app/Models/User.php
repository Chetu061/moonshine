<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'userId';//user for different field

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'company_name',
        'admin_email',
        'admin_password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'admin_password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'admin_password' => 'hashed',
    ];
  
    protected $table='user';
    // for particular table fetch[imp]
    public $timestamps = false;

    public function city(){
        return $this->hasOne(City::class,'id','city_id');
        
    }
    public function state(){
        return $this->hasOne(State::class,'id','state_id');
        
    }
    public function country(){
        return $this->hasOne(Country::class,'country_id','country');
        
    }
    public function company(){
        return $this->hasOne(Country::class,'id','company_detail_id');
        
    }
    public function bank(){
        return $this->hasOne(Bank::class,'id','bank_id');
        
    }
    public function address(){
        return $this->hasOne(Addresstype::class,'id','address_id');
        
    }
}
