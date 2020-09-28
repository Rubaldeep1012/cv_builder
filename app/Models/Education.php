<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['course','education_type','location','college','start_date','complete_date','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
