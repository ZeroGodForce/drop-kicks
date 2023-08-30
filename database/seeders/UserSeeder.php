<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert the three system pages
        DB::table('users')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'Sneakerhead',
                'email' => 'yo@drop-kicks.test',
                'password' => Hash::make('change-me'),
            ]
        ]);
    }
}
