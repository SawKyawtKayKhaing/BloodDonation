<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\patient;
<<<<<<< HEAD
=======
use App\NeededBlood;
use App\record;
use App\lab;
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22
class blood extends Model
{
    //
    public function patient()
    {
        return $this->hasOne('App\patient');
<<<<<<< HEAD
    }
=======

    }
    public function NeededBlood()
    {
        return $this->hasMany('App\NeededBlood');

    }
    public function record()
    {
        return $this->hasOne('App\record');

    }
    public function lab()
    {
        return $this->hasOne('App\lab');

    }

    
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22
}
