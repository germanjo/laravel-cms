<?php

namespace Database\Factories;

use App\Models\Revision;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RevisionFactory extends Factory {
    protected $model = Revision::class;

    public function definition(): array {
        return [
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'field' => 'title',
            'old_value' => 'Old Title',
            'new_value' => fake()->sentence,
        ];
    }
}
