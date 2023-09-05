<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Services\CartService;
use Illuminate\Contracts\View\View;

class CartController extends Controller
{

    /**
     * Load Cart page
     * @param CartService $cartService
     * @return View
     */
    public function show(CartService $cartService): View
    {
        $page = Page::where('slug', Page::CART_SLUG)->first();

        return view('cart', ['page' => $page, 'cart' => $cartService->getUserCart()]);
    }
}
