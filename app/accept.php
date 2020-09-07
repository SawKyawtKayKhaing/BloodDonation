<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\lab;
class accept extends Model
{
    //
    public function lab()
    {
        return $this->belongsTo('App\lab');

    }
}
