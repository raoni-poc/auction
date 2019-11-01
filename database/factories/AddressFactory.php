<?php

/** @var Factory $factory */

use App\Models\Address;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Address::class, function (Faker $faker) {
    return [
        'company_owner_id' => mt_rand(1, 60),
        'name' => $faker->colorName,
        'city_id' => mt_rand(1, 5565),
        'number' => mt_rand(1, 10000),
        'zip_code' =>  mt_rand(10000,99999).'-'.mt_rand(100,999),
        'neighborhood' => $faker->century,
        'complement' => $faker->domainWord,
        'note' => $faker->text,
        'address' => $faker->address,
        'created_at' => now(),
        'updated_at' => now(),

    ];
});
