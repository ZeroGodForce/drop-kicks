<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    /**
     * Display the Products page.
     * @return View
     */
    public function index(): View
    {
        $products = Product::all();
        $page = Page::where('slug', Page::PRODUCTS_SLUG)->first();

        return view('products', ['products' => $products, 'page' => $page]);
    }
}
