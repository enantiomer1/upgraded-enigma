<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Speaker;
use Faker\Generator as Faker;

$factory->define(Speaker::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'place' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'date' => now(),
        'file' => 'sandyb_step1_94.mp3',
    ];
});
