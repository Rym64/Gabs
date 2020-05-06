<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{


    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function classes()
    {
      return $this->belongsTo('App\Classe');
    }

    //modul affect
    
    public function moduls()
    {
    return $this->belongsTo('App\Modul');
    }


    public function seances()
    {
     return $this->hasMany('App\Seance');
    }


    public function affects()
    {
    return $this->hasMany('App\Affect');
    }



   
    //
    //
}
