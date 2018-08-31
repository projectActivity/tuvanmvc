<?php

use Faker\Factory as Factory;
use Faker\Generator as Faker;
use App\Models\Education;
use App\Models\Position;
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
    $localisedFaker = Factory::create('vi_VN');

    $idsEdu = Education::all(['id']);
    $idsPos = Position::all(['id']);

    $lgEdu = count($idsEdu);
    $lgPos = count($idsPos);

    return [
        'full_name'      => $localisedFaker->name,
        'email'          => $localisedFaker->unique()->safeEmail,
        'password'       => '$2y$05$Swwp9/fEzEtPju2tRyVnBu9xtWnuNXhJJELqzClTIy8dESbY93k5e', // 123456
        'remember_token' => str_random(10),
        'phone'          => rand(1000000000, 9999999999),
        'address'        => $localisedFaker->streetAddress,
        'birthday'       => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sex'            => rand(0, 1),
        'position_id'    => $idsPos[rand(0, $lgPos -1)],
        'education_id'   => $idsEdu[rand(0, $lgEdu -1)],
        'experience'     => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
        'avatar'         => $faker->imageUrl($width = 640, $height = 480),
        'introduction'   => $localisedFaker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
