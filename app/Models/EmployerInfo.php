<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployerInfo extends Model
{
    protected $fillable = ['location','title','description','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
