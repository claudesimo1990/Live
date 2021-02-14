<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'email_verified_at' => $faker->dateTime(),
        'google_id' => $faker->word,
        'facebook_id' => $faker->word,
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'avatar_original' => $faker->word,
        'password' => '$2y$10$gBSyzwffVCN/nmls9eQZd.egmGQcFfv4hPGyqjeahUR7G5nqyt6ke', //password
        'is_admin' => 1
    ];
});
