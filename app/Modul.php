<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//modul affect
class Modul extends Model
{//relaion affec
    public function teachers()
    {
         $this->belongsTo('App\Teacher');
    }

    //
}
