<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\FruitFactory;
use Faker\Generator as Faker;

$factory->define(FruitFactory::class, function (Faker $faker) {
    return [
        'fruit_name' => $faker->name,
    ];
});
