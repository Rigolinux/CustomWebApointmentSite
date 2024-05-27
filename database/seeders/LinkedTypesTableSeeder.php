<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkedTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LinkedTypes')->insert([
            ['IdLink' => 1, 'name' => 'Type 1', 'created_at' => now(), 'updated_at' => now()],
            ['IdLink' => 2, 'name' => 'Type 2', 'created_at' => now(), 'updated_at' => now()],
            ['IdLink' => 3, 'name' => 'Type 3', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
