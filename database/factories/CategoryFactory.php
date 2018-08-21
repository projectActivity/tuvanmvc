<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Catagory::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'image' => $faker->imageUrl(640, 480),
        'description' => $faker->sentence(12, true),
        'is_display' => rand(0, 1),
        'is_delete' => rand(0, 1),
        'link' => $faker->url,
    ];
});
