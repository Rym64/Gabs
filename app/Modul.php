<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
  
    public function users()
    {
        return $this->belongsToMany('App\User');
    }



/*
   // relaion affec
   public function affects()
   {
   return $this->hasMany('App\Affect');
   }

    //*/
}
