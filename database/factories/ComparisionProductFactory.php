<?php

use Faker\Generator as Faker;

$factory->define(\App\ComparisionProduct::class, function (Faker $faker) {
    return [
        'comparision_list_id' => 1,
        'product_id' => 1
    ];
});
