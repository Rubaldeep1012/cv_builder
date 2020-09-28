<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPersonalInfo extends Model
{
    protected $fillable = ['address','post','city','state','zip','marital_status','image','summary','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
