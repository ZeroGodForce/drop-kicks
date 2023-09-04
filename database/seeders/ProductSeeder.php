<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sneakers = [
            [
                'name' => "Air Jordan 4 Retro 'Thunder' 2023",
                'description' => 'A stunning Air Jordan 4 Retro with a yellow colorway.',
                'price' => 220.00,
                'product_image' => 'air-jordan-4-retro-thunder-2023.jpg'
            ],
            [
                'name' => "Air Jordan 4 ‘Red Thunder’",
                'description' => 'A vibrant red variant of the Air Jordan 4 series.',
                'price' => 230.00,
                'product_image' => 'air-jordan-4-red-thunder.jpg'
            ],
            [
                'name' => "Concepts x Nike Air Max 1 ‘Heavy’",
                'description' => 'A collaboration between Concepts and Nike featuring an intricate design.',
                'price' => 180.00,
                'product_image' => 'concepts-x-nike-air-max-1-heavy.jpg'
            ],
            [
                'name' => "A Ma Maniere x Air Jordan 4",
                'description' => 'A luxurious Air Jordan 4 iteration in collaboration with A Ma Maniere.',
                'price' => 250.00,
                'product_image' => 'a-ma-maniere-x-air-jordan-4.jpg'
            ],
            [
                'name' => "New Balance 993 Joe Freshgoods ‘Performance Art Sage’",
                'description' => 'A refreshing New Balance 993 variant in a sage colorway.',
                'price' => 180.00,
                'product_image' => 'new-balance-993-joe-freshgoods-performance-art-sage.jpg'
            ],
            [
                'name' => "Stüssy x Nike Air Force 1 Mid ‘Fossil’",
                'description' => 'A mid-top Air Force 1 in collaboration with streetwear brand Stüssy.',
                'price' => 160.00,
                'product_image' => 'stussy-x-nike-air-force-1-mid-fossil.jpg'
            ],
            [
                'name' => "Travis Scott x Nike Air Max 1 'Baroque Brown'",
                'description' => 'A unique Air Max 1 design in collaboration with rapper Travis Scott.',
                'price' => 190.00,
                'product_image' => 'travis-scott-nike-air-max-1-baroque-brown.jpg'
            ],
            [
                'name' => "Union LA x Nike Dunk Low 'Passport Pack - Pistachio'",
                'description' => 'A Dunk Low variant featuring unique design cues from Union LA.',
                'price' => 150.00,
                'product_image' => 'union-la-x-nike-dunk-lo-passport-pack-pestachio.jpg'
            ],
            [
                'name' => "Air Jordan 4 Retro SE 'Black Canvas'",
                'description' => 'A sleek black canvas version of the iconic Air Jordan 4.',
                'price' => 240.00,
                'product_image' => 'air-jordan-4-retro-se-black-canvas.jpg'
            ],
            [
                'name' => "Air Jordan 5 Retro Wmns 'Dunk on Mars'",
                'description' => 'The Women’s Air Jordan 5 Retro ‘Dunk on Mars’ pays homage to Spike Lee’s alter ego.',
                'price' => 130.00,
                'product_image' => 'air-jordan-5-retro-wmns-dunk-on-mars.jpg'
            ],
            [
                'name' => "Nike Air Max 1 Retro 'Crepe Hemp' 2022",
                'description' => 'A sustainable version of the iconic Air Max 1, made with hemp.',
                'price' => 150.00,
                'product_image' => 'nike-air-max-1-retro-crepe-hemp.jpg'
            ],
        ];

        foreach ($sneakers as $sneaker) {
            DB::table('products')->insert([
                'uuid' => Str::uuid(),
                'name' => $sneaker['name'],
                'description' => $sneaker['description'],
                'price' => $sneaker['price'],
                'product_image' => $sneaker['product_image'],
            ]);
        }
    }
}
