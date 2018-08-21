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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$05$Swwp9/fEzEtPju2tRyVnBu9xtWnuNXhJJELqzClTIy8dESbY93k5e', // 123456
        'remember_token' => str_random(10),
        'phone' => rand(1000000000, 9999999999),
        'address' => $faker->streetAddress,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sex' => rand(0, 1),
        'experience' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'introduction' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
