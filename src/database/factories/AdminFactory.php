<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(user::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'email_verified_at' => $faker->dateTime(),
        'google_id' => $faker->word,
        'facebbook_id' => $faker->word,
        'avatar' => $faker->word,
        'avatar_original' => $faker->word,
        'password' => '$2y$10$gBSyzwffVCN/nmls9eQZd.egmGQcFfv4hPGyqjeahUR7G5nqyt6ke', //password
        'is_admin' => 1
    ];
});
