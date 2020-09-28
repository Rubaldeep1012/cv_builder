<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = ['title','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
