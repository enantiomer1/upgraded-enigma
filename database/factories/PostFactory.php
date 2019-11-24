<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'slug' => $faker->slug(),
        'description' => $faker->sentence($nbWords = 50, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 15, $variableNbSentences = true),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'seo_title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'meta_description' => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'meta_keywords' => $faker->sentence($nbWords = 3, $variableNbWords = false),
        'published_date' => now(),
    ];
});
