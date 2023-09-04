<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Services\CartService;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CartSummary extends Component
{
    public Cart $cart;

    public function mount()
    {
        $this->cart = auth()->user()->cart;
    }

    public function updateQty($cartItemId, $newQuantity)
    {
        if ($newQuantity == 0) {
            $this->removeItem($cartItemId);
        } else {
            auth()->user()->cart->cartItems()
                ->where('id', $cartItemId)
                ->update(['quantity' => $newQuantity]);
        }

        $this->cart->refresh();
    }

    public function removeItem($id)
    {
        auth()->user()->cart->cartItems()->where('id', $id)->delete();
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
