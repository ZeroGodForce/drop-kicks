<?php

namespace App\Services;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;

class CartService
{
    /**
     * Return the currently authorised User's cart
     * @return mixed
     */
    public function getUserCart(): mixed
    {
        return Cart::firstOrCreate([
            'user_id' => auth()->user()->id,
            'fees' => 4.99
        ]);
    }

    /**
     * Add a new item to the cart or alternatively update the quantity of an existing item
     * @param int $id
     * @param int|null $quantity
     * @return Model
     */
    public function addCartItem(int $id, int|null $quantity): Model
    {
        return $this->getUserCart()->cartItems()->updateOrCreate([
            'product_id' => $id
        ], [
            'quantity' => $quantity ?? 1,
            'expires_at' => now()->addDays(7),  // Extend cart life by 7 days
        ]);
    }

    /**
     * Remove an item from the cart
     * @param $itemId
     * @return void
     */
    public function removeCartItem($itemId): void
    {
        $this->getUserCart()->cartItems()->where('id', $itemId)->delete();
    }

    /**
     * Update the quantity of an item in the cart
     * @param $cartItemId
     * @param $qty
     * @return void
     */
    public function updateQuantity($cartItemId, $qty): void
    {
        $this->getUserCart()->cartItems()
            ->where('id', $cartItemId)
            ->update(['quantity' => $qty]);
    }
}
