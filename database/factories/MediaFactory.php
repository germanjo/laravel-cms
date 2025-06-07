<?php

namespace Database\Factories;

use App\Models\Media;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory {
    protected $model = Media::class;

    public function definition(): array {
        return [
            'filename' => fake()->uuid . '.jpg',
            'path' => 'uploads/' . fake()->uuid . '.jpg',
            'mime_type' => 'image/jpeg',
            'uploaded_by' => User::factory(),
        ];
    }
}
