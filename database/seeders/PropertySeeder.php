<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Property::factory()
            ->count(100)
            ->hasImages(3)
            ->create();
    }
}
