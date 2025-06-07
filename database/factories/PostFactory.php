<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory {
    protected $model = Post::class;

    public function definition(): array {
        return [
            'slug' => fake()->unique()->slug,
            'author_id' => User::factory(),
            'is_active' => true,
            'published_at' => now(),
        ];
    }
}