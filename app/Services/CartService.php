<?php

namespace App\Services;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class CartService
{
    public function getUserCart()
    {
        return Cart::firstOrCreate([
            'user_id' => auth()->user()->id,
            'fees' => 4.99
        ]);
    }

    public function addCartItem(int $id, int|null $quantity): Model
    {
        return $this->getUserCart()->cartItems()->updateOrCreate([
            'product_id' => $id
        ], [
            'quantity' => $quantity ?? 1,
            'expires_at' => now()->addDays(7),  // Extend cart life by 7 days
        ]);
    }

    public function removeCartItem($itemId)
    {
        $this->getUserCart()->cartItems()->where('id', $itemId)->delete();
    }

    public function updateQuantity($cartItemId, $qty)
    {
        $this->getUserCart()->cartItems()
            ->where('id', $cartItemId)
            ->update(['quantity' => $qty]);
    }
}
