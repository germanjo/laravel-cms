<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder {
    public function run(): void {
        Language::insert([
            ['code' => 'es', 'name' => 'Español'],
            ['code' => 'en', 'name' => 'English'],
        ]);
    }
}