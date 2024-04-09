<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::query()->find(fake()->numberBetween(1, 25)),
            'text' => fake()->text()
        ];
    }
}
