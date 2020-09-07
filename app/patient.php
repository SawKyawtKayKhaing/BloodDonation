<?php

namespace App;
use App\blood;
use App\hospital;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    //
    public function blood()
    {
        return $this->belongsTo('App\blood');

    }
    public function hospital()
    {
        return $this->hasMany('App\hospital');

    }
}
