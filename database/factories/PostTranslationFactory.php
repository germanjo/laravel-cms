<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Language;
use App\Models\PostTranslation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTranslationFactory extends Factory {
    protected $model = PostTranslation::class;

    public function definition(): array {
        return [
            'post_id' => Post::factory(),
            'language_id' => Language::inRandomOrder()->first()->id ?? 1,
            'title' => fake()->sentence,
            'content' => fake()->paragraphs(3, true),
        ];
    }
}
