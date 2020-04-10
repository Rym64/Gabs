<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seance;
use Faker\Generator as Faker;

$factory->define(Seance::class, function (Faker $faker) {
    return [
        'id_teacher' => Teachers::get('id_teacher')->random(),
        'type' => $faker->sentence,
        'date_seance' => $faker->date,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
