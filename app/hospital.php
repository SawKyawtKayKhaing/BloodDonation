<?php

namespace App;
use App\patient;
use App\register;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo('App\patient');
    }
    public function register()
    {
        return $this->belongsTo('App\register');
    }
}
