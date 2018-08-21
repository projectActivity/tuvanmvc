<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Slide::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'url' => $faker->url,
        'is_display' => rand(0, 1),
        'position' => rand(0, 1)
    ];
});
