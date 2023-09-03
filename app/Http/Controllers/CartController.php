<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Page;
use App\Services\CartService;
use App\Services\ProductService;

class CartController extends Controller
{
    public function __construct(public CartService $cartService)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $page = Page::where('slug', Page::CART_SLUG)->first();
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        return view('cart', ['page' => $page, 'cart' => $cart ]);
    }

    /**
     * Update cart or create a new one if none present.
     */
    public function update(UpdateCartRequest $request, ProductService $productService)
    {
        $cart = $this->cartService->getUserCart();
        $product = $productService->findByUuid($request->product_uuid);
        $this->cartService->addCartItem($cart, $product->id, $request->quantity);

        /**
         * 1. GET ANY CART ITEMS
         * 2. CHECK IF ANY CART ITEMS ARE THE SELECTED PRODUCT
         *      A. IF NO, ADD THE PRODUCT AS A NEW CART ITEM WITH SPECIFIED AMOUNT
         *      B. IF YES UPDATE QUANTITY OF THE CART
         *      C. CALCULATE TOTAL PRICE FOR CART ITEM QUANTITY
         * 3. RECALCULATE SUBTOTALS AND FEES
         * 4. SAVE CART
         */

        return redirect()->back();
    }

    /**
     * Empty/delete cart.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
