<?php

/** @var Factory $factory */

use App\Models\Cargo;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Cargo::class, function (Faker $faker) {
    return [
        'cargo' => $faker->jobTitle,
        'packing' => $faker->companySuffix,
        'description' => $faker->paragraph,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
