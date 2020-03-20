<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Movie;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Movie::class, function (Faker $faker) {
    $values = collect([
        'Action',
        'Comedy',
        'Drama',
        'Horror',
        'Western',
        'Thriller',
        'Animation',
        'Documentary'
    ]);

    return [
        'title' => $faker->name,
        'director' => $faker->name,
        'imageUrl' => $faker-> url,
        'duration' => $faker->numberBetween(100,140),
        'releaseDate' => $faker->date('Y-m-d'),
        'genre' => $values->random(3)
    ];
});