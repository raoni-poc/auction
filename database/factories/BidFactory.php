<?php

/** @var Factory $factory */

use App\Models\Bid;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Bid::class, function (Faker $faker) {
    return [
//        'value' => mt_rand(10, 250),
    ];
});
