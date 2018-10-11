<?php

use Faker\Generator as Faker;

$factory->define(\App\Feature::class, function (Faker $faker) {
    return [
        'advert_id' => random_int(750, 950),
        'feature' => $faker->text(30)
    ];
});
