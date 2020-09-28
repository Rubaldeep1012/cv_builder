<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverInfo extends Model
{
    protected $fillable = ['company_address','company_name','receiver_name','user_id','receiver_desigination','body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
