<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinkedAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('LinkedAccounts')->insert([
            ['IdLinkA' => 1, 'IdLink' => 1,'Data' => 'text 1', 'created_at' => now(), 'updated_at' => now()],
            ['IdLinkA' => 2, 'IdLink' => 2,'Data' => 'text 12', 'created_at' => now(), 'updated_at' => now()],
            ['IdLinkA' => 3, 'IdLink' => 3, 'Data' => 'text 3','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
