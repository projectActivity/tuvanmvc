<?php

use Faker\Generator as Faker;
use App\Models\ArticleType;

$factory->define(App\Models\Category::class, function (Faker $faker) {

	$arrIdsArTy = ArticleType::all(['id']);
	$radIndex = rand(0, (count($arrIdsArTy) - 1));

    return [
        'title' => $faker->sentence(6, true),
        'image' => $faker->imageUrl(640, 480),
        'description' => $faker->sentence(12, true),
        'is_display' => rand(0, 1),
        'article_type_id' => $arrIdsArTy[$radIndex],
        'is_delete' => rand(0, 1),
        'link' => $faker->url,
        'slug' => $faker->slug,
    ];
});
