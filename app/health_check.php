<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\donar;
class health_check extends Model
{
    //
    public function donar()
    {
        return $this->belongsTo('App\donar');

    }
}
