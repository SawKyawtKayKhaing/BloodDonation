<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NeededBlood;
use App\donar;
use App\admin;
use App\member;
class organization extends Model
{
    //
    public function NeededBlood()
    {
        return $this->belongsTo('App\NeededBlood');

    }
    public function donar()
    {
        return $this->belongsTo('App\donar');

    }
    public function admin()
    {
        return $this->hasOne('App\admin');

    }
    public function member()
    {
        return $this->hasMany('App\member');

    }
    

}
