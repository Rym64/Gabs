<?php

use App\Absense;
use Illuminate\Database\Seeder;

class AbsenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Absense::class, 10)->create();



        //
    }
}
