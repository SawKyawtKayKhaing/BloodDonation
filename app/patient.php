<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\blood;
use App\hospital;
class patient extends Model
{
    //
    public function blood()
    {
        return $this->belongsTo('App\blood');
    }
    public function hospital()
    {
        return $this->hasOne('App\hospital');
    }
}
