<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absense;
//use App\User;
//use App\Seance;
use Faker\Generator as Faker;

$factory->define(Absense::class, function (Faker $faker) {
    return [
  
        'absente' => $faker->name,
          
        'commentaire'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
       // 'user_id' => User::get('id')->random(),

        //'id_seance' => Seance::get('id')->random(),

        'created_at' => now(),
        'updated_at' => now(),


        //
    ];
});
