<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "title" => $faker->title,
        "text" => $faker->text,
        "author_id" => \App\User::inRandomOrder()->first(),
        "views" => $faker->numberBetween('1', '10000'),
    ];
});
