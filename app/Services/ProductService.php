<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function findByUuid(string $uuid)
    {
        return Product::where('uuid', $uuid)->first();
    }
}
