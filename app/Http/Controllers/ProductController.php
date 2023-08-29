<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $products = Product::all();
        $products = Product::make([
            'name' => "Nike Dunk Low SB 'Orange Emerald Rise'",
            'description' => "The Nike Dunk Low SB ‘Orange Emerald Rise’ showcases hairy suede on the upper, featuring a base color in Emerald Rise with contrasting orange overlays at the forefoot and heel. The signature Swoosh appears in aqua blue suede, matching the Nike logo hits that adorn the tongue tag and back tab. The insole packs a Zoom Air unit in the heel for impact protection. Underpinning the sneaker is a durable rubber cupsole in Lemon Chiffon.",
            'price' => number_format(305.00, 2),
        ]);

        return view('welcome', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
