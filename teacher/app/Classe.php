<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{

    public function students()
    {
       return  $this->hasMany('App\Student');
    }

    public function teachers()
    {
       return $this->hasMany('App\Teacher');
    }


    //
}