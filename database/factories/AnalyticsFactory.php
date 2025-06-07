<?php

namespace Database\Factories;

use App\Models\Analytics;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnalyticsFactory extends Factory {
    protected $model = Analytics::class;

    public function definition(): array {
        return [
            'type' => 'post',
            'item_id' => 1, // actualizar luego si es necesario
            'hits' => rand(10, 100),
            'date' => now()->subDays(rand(0, 30)),
        ];
    }
}
