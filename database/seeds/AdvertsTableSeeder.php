<?php

use Illuminate\Database\Seeder;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Create some random adverts.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Advert::class, 4)->create();
    }
}
