<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['location','name','description','user_id','desigination','complete_date','start_date'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
