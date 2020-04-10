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
    {
         $this->call(AdminsSeeder::class);
         $this->call(ClassesSeeder::class);
         $this->call(StudentsSeeder::class);
         $this->call(ModulsSeeder::class);
         $this->call(TeachersSeeder::class);
         $this->call(AffectsSeeder::class);
         $this->call(SeancesSeeder::class);
         $this->call(AbsensesSeeder ::class);
    }
}
