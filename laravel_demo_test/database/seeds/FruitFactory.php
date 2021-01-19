<?php

use Illuminate\Database\Seeder;

class FruitFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory( App\FruitFactory::class ,5)->create();

        //$this->call(FruitFactory::class);
    }
}
