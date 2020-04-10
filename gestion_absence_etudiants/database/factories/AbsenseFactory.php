<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Absense;
use Faker\Generator as Faker;

$factory->define(Absense::class, function (Faker $faker) {
    return [
    'code_student' => Student::get('code_student')->random(),
    'id_seance' => Seance::get('id_seance')->random(),
    'date_abs' => $faker->dateTime,
    'created_at' => now(),
    'updated_at' => now(),
    ];
});
