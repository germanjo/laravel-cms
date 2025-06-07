<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Revision;

class RevisionSeeder extends Seeder {
    public function run(): void {
        Revision::factory()->count(15)->create();
    }
}
