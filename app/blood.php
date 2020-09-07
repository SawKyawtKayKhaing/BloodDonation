<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\patient;
use App\NeededBlood;
use App\record;
use App\lab;
class blood extends Model
{
    //
    public function patient()
    {
        return $this->hasOne('App\patient');

    }
    public function NeededBlood()
    {
        return $this->hasMany('App\NeededBlood');

    }
    public function record()
    {
        return $this->hasOne('App\record');

    }
    public function lab()
    {
        return $this->hasOne('App\lab');

    }

    
}
