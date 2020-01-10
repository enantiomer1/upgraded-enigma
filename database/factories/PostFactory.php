<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 5),
        'title' => $faker->sentence($nbWords = 8, $variableNbWords = true),
        'description' => $faker->sentence($nbWords = 75, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 50, $variableNbSentences = false),
        'section' =>$faker->randomElement($array = array ('blog','history','literature', 'prayers')),
        //'section' => 'blog',
        'image' => 'matrix-code.jpg',
        'alt_text' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'meta_description' => $faker->sentence($nbWords = 30, $variableNbWords = true),
        'published_date' => now(),
    ];
});
