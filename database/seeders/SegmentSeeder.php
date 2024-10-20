<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('segments')->insert([ 'name' => 'Garderie', 'description' => '1 a 2 anos' ]);
        DB::table('segments')->insert([ 'name' => 'Educação Infantil', 'description' => '2 a 5 anos' ]);
        DB::table('segments')->insert([ 'name' => 'Fundamental I', 'description' => '1º ao 5º ano' ]);
        DB::table('segments')->insert([ 'name' => 'Fundamental II', 'description' => '6º ao 9º ano' ]);
        DB::table('segments')->insert([ 'name' => 'Ensino Médio', 'description' => '1ª e 2ª série' ]);
    }
}
