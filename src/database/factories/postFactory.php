<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'User_id' => 1,
        'categorie_id' =>  $faker->numberBetween(1, 2),
        'from' => $faker->city,
        'to' => $faker->city,
        'dateFrom' => $faker->dateTimeBetween('now', '+30 years'),
        'dateTo' => $faker->dateTimeBetween('now', '+30 years'),
        'content' => $faker->paragraphs(1, true),
        'kilo' => $faker->numberBetween(0, 20),
        'prix' => $faker->numberBetween(10,50),
        'quantity' => $faker->numberBetween(10,50),
        'compagnie' => $faker->name,
        'photoBielletAvion' => $faker->name,
        'publish' => true
    ];
});
