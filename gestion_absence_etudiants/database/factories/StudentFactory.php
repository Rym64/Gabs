<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'id_class' => Classe::get('id_class')->random(),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'date_birth' => $faker->date,
        'adress_stud' => $faker->address,
        'phone_stud' => $faker->e164PhoneNumber,
        'picture_stud' => $faker->image,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
