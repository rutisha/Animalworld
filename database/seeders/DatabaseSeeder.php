<?php

namespace Database\Seeders;
use App\Models\Animal;
use App\Models\Lifespan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Animal::factory()->create([
            'name' => 'Test animal',
            'height' => '125 cm',
            'weight' => '40 kg',
        ]);

        Lifespan::factory()->create([
            'animal_id' => 1,
            'years' => '45 years',
            'status' => 'Endangered',
        ]);
    }
}
