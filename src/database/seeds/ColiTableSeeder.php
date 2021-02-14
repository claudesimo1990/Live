<?php

use Illuminate\Database\Seeder;

class ColiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Coli::class,50)->create();
    }
}
