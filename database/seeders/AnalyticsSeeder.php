<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Analytics;

class AnalyticsSeeder extends Seeder {
    public function run(): void {
        Analytics::factory()->count(20)->create();
    }
}
