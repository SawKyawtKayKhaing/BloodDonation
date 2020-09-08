<?php

namespace App;
use App\patient;
<<<<<<< HEAD
use App\register;
=======
use App\NeededBlood;
>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    //
    public function patient()
    {
        return $this->belongsTo('App\patient');
<<<<<<< HEAD
    }
    public function register()
    {
        return $this->belongsTo('App\register');
    }
=======

    }
    public function NeededBlood()
    {
        return $this->belongsTo('App\NeededBlood');

    }
    

>>>>>>> e80d5e232a238130e54b9a75ed39dc5354a26b22
}
