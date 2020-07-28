<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Visit;
use App\Website;
use Faker\Generator as Faker;

$factory->define(Visit::class, function (Faker $faker) {
    return [
        'website_id' => $faker->numberBetween(1, Website::count()),
        'arrived_at' => $faker->dateTimeBetween('-1 year', 'now'),
    ];
});
