<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Affect;
use Faker\Generator as Faker;

$factory->define(Affect::class, function (Faker $faker) {
    return [
        'id_teacher' => Teachers::get('id_teacher')->random(),
        'id_modul' => Modul::get('id_modul')->random(),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
