<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear the table
        DB::table('pages')->truncate();

        // Insert the three system pages
        DB::table('pages')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Home',
                'slug' => '/',
                'main_content' => '',
                'system_page' => true,
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Products',
                'slug' => 'products',
                'main_content' => '',
                'system_page' => true,
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Cart',
                'slug' => 'cart',
                'main_content' => '',
                'system_page' => true,
            ],
        ]);
    }
}
