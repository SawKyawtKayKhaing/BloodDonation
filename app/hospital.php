<?php

namespace App;
use App\patient;
use App\NeededBlood;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo('App\patient');

    }
    public function NeededBlood()
    {
        return $this->belongsTo('App\NeededBlood');

    }
    

}
