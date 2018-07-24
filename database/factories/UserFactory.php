<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'Hamdan Hanafi',
        'email' => 'hamdanhanafi90@gmail.com',
        'password' => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'brand' => $faker->sentence(3),
        'price' => random_int(10000, 999999),
        'category' => $faker->sentence(3),
        'image_path' => $faker->imageUrl(640, 480, 'technics'),
    ];
});
