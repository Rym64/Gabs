<?php

use Illuminate\Database\Seeder;

class AbsensesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Absense::class, 50)->create();
    }
}
