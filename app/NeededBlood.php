<?php

namespace App;
use App\hospital;
use App\blood;
use App\organization;
use Illuminate\Database\Eloquent\Model;

class NeededBlood extends Model
{
    //
    public function hospital()
    {
        return $this->hasMany('App\hospital');

    }
    public function blood()
    {
        return $this->belongsTo('App\blood');

    }
    public function organization()
    {
        return $this->hasMany('App\organization');

    }
}
