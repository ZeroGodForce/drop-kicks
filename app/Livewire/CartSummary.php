<?php

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CartSummary extends Component
{
    public $cart;

    public function updateQty(CartService $cartService, $cartItemId, $newQuantity)
    {
        if ($newQuantity == 0) {
            $cartService->removeCartItem($cartItemId);
        } else {
            $cartService->updateQuantity($cartItemId, $newQuantity);
        }

        $this->cart->refresh();
    }

    public function removeItem(CartService $cartService, $itemId)
    {
        $cartService->removeCartItem($itemId);
        $this->cart->refresh();
    }

    #[Computed]
    public function subtotal()
    {
        return $this->cart->cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });
    }

    #[Computed]
    public function total()
    {
        return $this->subtotal() + $this->cart->fees;
    }

    public function render()
    {
        return view('livewire.cart-summary');
    }
}
