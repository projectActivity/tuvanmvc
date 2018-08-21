<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->word,
        'description' => $faker->sentence(6, true)
    ];
});
