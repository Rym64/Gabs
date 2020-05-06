<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affect extends Model
{

    public function teachers()
    {
     return  $this->belongsTo('App\User');
    }
    
    public function moduls()
    {
     return  $this->belongsTo('App\Modul');
    }
    //
}
