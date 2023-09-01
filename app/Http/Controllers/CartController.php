<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\Page;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of all "active" carts - ADMIN.
     */
    public function index()
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
    public function update(UpdateCartRequest $request)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => $request->user()->id
        ]);

        $product = Product::where('uuid', $request->product_uuid)->first();

        $cart->cartItems()->updateOrCreate(
            ['product_id' => $product->id],
            ['quantity' => $request->quantity]
        );

        /**
         * 1. GET ANY CART ITEMS
         * 2. CHECK IF ANY CART ITEMS ARE THE SELECTED PRODUCT
         *      A. IF NO, ADD THE PRODUCT AS A NEW CART ITEM WITH SPECIFIED AMOUNT
         *      B. IF YES UPDATE QUANTITY OF THE CART
         *      C. CALCULATE TOTAL PRICE FOR CART ITEM QUANTITY
         * 3. RECALCULATE SUBTOTALS AND FEES
         * 4. SAVE CART
         */

        // Extend cart life by 7 days
        $cart->expires_at = now()->addDays(7);
        $cart->save();


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
