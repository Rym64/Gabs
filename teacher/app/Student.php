<?php


namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;



use Illuminate\Database\Eloquent\Model;





class Student extends Model
{


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function classes()
    {
       return $this->belongsTo('App\Classe');
    }

    public function absenses()
    {
      return  $this->hasMany('App\Absense');
    }

   
    //
}

    

