<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function classes()
    {
        $this->belongsTo('App\Classe');
    }

    public function absenses()
    {
        $this->hasMany('App\Absense');
    }

    //
}
