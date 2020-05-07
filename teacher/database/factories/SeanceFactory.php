<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seance;
//use App\User;


use Faker\Generator as Faker;

$factory->define(Seance::class, function (Faker $faker) {
    return [
      //  'id_user' => User::get('id')->random(),
      
        'type'=> $faker->sentence($nbWords = 6, $variableNbWords = true),
        'date_seance' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
