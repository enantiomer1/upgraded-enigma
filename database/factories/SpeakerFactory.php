<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Speaker;
use Faker\Generator as Faker;

$factory->define(Speaker::class, function (Faker $faker) {
    return [
        'speaker_name' => $faker->name(),
        'description' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'file' => 'sandyb_step1_94.mp3',
    ];
});
