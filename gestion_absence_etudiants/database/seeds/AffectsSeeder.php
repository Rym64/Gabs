<?php

use Illuminate\Database\Seeder;

class AffectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Affect::class, 50)->create();
    }
}
