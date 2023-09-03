<?php

namespace App\Services;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class CartService
{
    public function getUserCart()
    {
        return Cart::firstOrCreate([
            'user_id' => auth()->user()->id
        ]);
    }

    public function addCartItem(Cart $cart, string $id, int|null $quantity): Model
    {
        return $cart->cartItems()->updateOrCreate([
            'product_id' => $id
        ], [
            'quantity' => $quantity ?? 1,
            'expires_at' => now()->addDays(7),  // Extend cart life by 7 days
        ]);
    }
}
