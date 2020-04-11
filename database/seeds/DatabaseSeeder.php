<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {$this->call([
        // $this->call(UsersTableSeeder::class);
     
        AdminSeeder::class,
        ClasseSeeder::class,
       StudentSeeder::class,
     ModulSeeder::class,
        TeacherSeeder::class,
        AffectSeeder::class,
        SeanceSeeder::class,
      AbsenseSeeder::class,
      UsersSeeder::class,
      ]);
    }
}
