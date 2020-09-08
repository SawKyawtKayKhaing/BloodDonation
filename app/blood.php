<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\patient;
class blood extends Model
{
    //
    public function patient()
    {
        return $this->hasOne('App\patient');
    }
}
