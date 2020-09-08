<?php

namespace App;
use App\blood;
use App\hospital;
use Illuminate\Database\Eloquent\Model;
use App\blood;
use App\hospital;
class patient extends Model
{
    //
    public function blood()
    {
        return $this->belongsTo('App\blood');
<<<<<<< HEAD
    }
    public function hospital()
    {
        return $this->hasOne('App\hospital');
=======

    }
    public function hospital()
    {
        return $this->hasMany('App\hospital');

>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22
    }
}
