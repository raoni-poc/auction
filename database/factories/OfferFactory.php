<?php

/** @var Factory $factory */

use App\Models\Offer;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Offer::class, function (Faker $faker) {
    return [
        'route_wrapper_id' => 0,
        'gateway_wrapper_id' => 0,
        'cargo_id' => mt_rand(1, 5),
        'offer_type_id' => mt_rand(1, 3),
        'start_price' => mt_rand(10, 10000),
        'first_positive_price' => 0,
        'current_price' => 0,
        'description' => $faker->paragraph,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
