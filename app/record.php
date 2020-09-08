<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\blood;
use App\donar;
class record extends Model
{
    //
    public function blood()
    {
        return $this->belongsTo('App\blood');

    }
    public function donar()
    {
        return $this->belongsTo('App\donar');

    }
}
