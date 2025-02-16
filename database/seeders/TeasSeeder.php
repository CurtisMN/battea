<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teas;

class TeasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teas::factory()->count(500)->create();
    }
}
