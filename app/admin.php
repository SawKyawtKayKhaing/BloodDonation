<?php

namespace App;
use App\organization;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    public function organization()
    {
        return $this->belongsTo('App\organization');

    }
}
