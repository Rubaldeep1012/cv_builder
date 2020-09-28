<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','dob','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function certification(){
        return $this->hasMany('App\Models\Certification','user_id')->with('user');;
    }

    public function education(){
        return $this->hasMany('App\Models\Education','user_id');
    }

    public function skill(){
        return $this->hasMany('App\Models\Skill','user_id');
    }

    public function interest(){
        return $this->hasMany('App\Models\Interest','user_id');
    }

    public function UserPersonalInfo(){
        return $this->hasMany('App\Models\UserPersonalInfo','user_id');
    }

    public function experience(){
        return $this->hasMany('App\Models\Experience','user_id');
    }

    public function cover(){
        return $this->hasMany('App\Models\CoverInfo','user_id');
    }
}
