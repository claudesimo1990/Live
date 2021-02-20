<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'User_id' => 1,
            'categorie_id' => $this->faker->numberBetween(1, 2),
            'from' => $this->faker->city,
            'to' => $this->faker->city,
            'dateFrom' => $this->faker->dateTimeBetween('now', '+30 years'),
            'dateTo' => $this->faker->dateTimeBetween('now', '+30 years'),
            'content' => $this->faker->paragraphs(1, true),
            'kilo' => $this->faker->numberBetween(0, 20),
            'prix' => $this->faker->numberBetween(10,50),
            'quantity' => $this->faker->numberBetween(10,50),
            'compagnie' => $this->faker->name,
            'photoBielletAvion' => $this->faker->name,
            'publish' => true
        ];
    }
}
