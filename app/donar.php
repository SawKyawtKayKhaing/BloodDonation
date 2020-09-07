<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\organization;
use App\member;
use App\health_check;
use App\record;
class donar extends Model
{
    //
    public function organization()
    {
        return $this->hasMany('App\organization');

    }
    public function member()
    {
        return $this->hasOne('App\member');

    }
    public function health_check()
    {
        return $this->hasOne('App\health_check');

    }
    public function record()
    {
        return $this->hasOne('App\record');

    }
}
