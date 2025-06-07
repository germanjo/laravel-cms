<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostTranslation;
use App\Models\Tag;
use App\Models\Language;

class PostSeeder extends Seeder {
    public function run(): void {
        $tags = Tag::factory()->count(10)->create();

        Post::factory()
            ->count(10)
            ->has(PostTranslation::factory()->count(2), 'translations')
            ->create()
            ->each(function ($post) use ($tags) {
                $post->tags()->attach($tags->random(3));
            });
    }
}
