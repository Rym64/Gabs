<?php
use App\Modul;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { factory(Modul::class, 50)->create();
        //
    }
}
