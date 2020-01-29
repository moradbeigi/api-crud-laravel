<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\story;
use Faker\Generator as Faker;

$factory->define(story::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'subject' => $faker->text,
        'body' => $faker->paragraph,
        'publish' => $faker->numberBetween(1900, 2019)
    ];
});
