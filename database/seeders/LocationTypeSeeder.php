<?php

namespace Database\Seeders;

use App\Models\LocationType;
use Illuminate\Database\Seeder;

class LocationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocationType::create([
            'name' => 'Hofladen',
        ]);
    }
}
