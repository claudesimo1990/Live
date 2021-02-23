<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Admin::factory(1)->create();

        Post::factory(10)->create([
            'User_id' => rand(1, 10)
        ]);

        Testimonial::factory(6)->create([
            'user_id' => rand(1, 10)
        ]);
    }
}
