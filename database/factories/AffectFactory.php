<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Affect;
//use App\User;
use App\Modul;
use Faker\Generator as Faker;

$factory->define(Affect::class, function (Faker $faker) {
    return [
        //'id_user' => User::get('id')->random(),
        'id_modul' => Modul::get('id')->random(),
        'created_at' => now(),
        'updated_at' => now(),



        //
    ];
});
