<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Website;
use Faker\Generator as Faker;

$factory->define(Website::class, function (Faker $faker) {
    return [
        'name' => $faker->domainName,
        'stars' => $faker->numberBetween(0, 10),
    ];
});
