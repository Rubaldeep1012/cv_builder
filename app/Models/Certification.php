<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    protected $fillable = ['title','year','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
