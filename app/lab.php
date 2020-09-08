<?php

namespace App;
use App\blood;
use App\lab;
use Illuminate\Database\Eloquent\Model;

class lab extends Model
{
    //
    public function blood()
    {
        return $this->belongsTo('App\blood');

    }
    public function lab()
    {
        return $this->hasOne('App\lab');

    }
}
