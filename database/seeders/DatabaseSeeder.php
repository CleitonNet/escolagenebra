<?php

namespace Database\Seeders;

use App\Models\School;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // SlidesSeeder::class,
            SchoolSeeder::class,
            SegmentSeeder::class
         ]);

        School::find(1)->segments()->sync([2]);
        School::find(2)->segments()->sync([1,2]);
        School::find(3)->segments()->sync([3,4,5]);
        School::find(4)->segments()->sync([3,4]);

        User::factory()->create([
            'name' => 'Cleiton dos Santos',
            'email' => 'cleiton.jnet@gmail.com',
        ]);
    }
}
