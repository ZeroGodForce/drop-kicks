<?php

namespace App\Livewire;

use App\Models\Product;
use App\Services\CartService;
use Livewire\Component;

class ProductListItem extends Component
{
    public Product $product;
    public ?int $quantity;

    public function mount()
    {
        if (auth()->check()) {
            $cartItem = auth()->user()->cart->cartItems()
                ->where('product_id', $this->product->id)
                ->first();

            $this->quantity = $cartItem ? $cartItem->quantity +1 : 1;
        } else {
            $this->quantity = 1;
        }
    }

    public function add()
    {
        $cartService = new CartService();

        if (auth()->check()) {
            $cart = $cartService->getUserCart();
            $cartItem = $cartService->addCartItem($cart, $this->product->id, $this->quantity);
            $this->quantity = $cartItem->quantity;
        } else {
            // REDIRECT TO LOGIN, THEN ONCE LOGIN COMPLETE RETURN TO ORIGINAL LOCATION?
        }
    }

    public function render()
    {
        return view('livewire.product-list-item');
    }
}
