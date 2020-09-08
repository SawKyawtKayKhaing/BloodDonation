<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\organization;
use App\donar;
class member extends Model
{
    //
    public function organization()
    {
        return $this->belongsTo('App\organization');

    }
    public function donar()
    {
        return $this->belongsTo('App\donar');

    }
}
