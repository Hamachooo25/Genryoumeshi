<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker -> company,
        'address' => $faker -> address,
        'email' => $faker ->companyEmail,
        'password' => $faker ->password,
        'prefecture_id' =>$faker ->numberBetween(1,47),
    ];
});
