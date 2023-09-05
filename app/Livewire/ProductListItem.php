<?php

namespace App\Livewire;

use App\Services\CartService;
use Livewire\Component;

class ProductListItem extends Component
{
    public $product;
    public ?int $quantity;

    public function mount(CartService $cartService)
    {
        if (auth()->check()) {
            $cartItem = $cartService->getUserCart()->cartItems()
                ->where('product_id', $this->product->id)
                ->first();

            $this->quantity = $cartItem ? $cartItem->quantity +1 : 1;
        } else {
            $this->quantity = 1;
        }
    }

    public function add(CartService $cartService)
    {
        $cartService->addCartItem($this->product->id, $this->quantity);
        $this->product->refresh();
    }

    public function render()
    {
        return view('livewire.product-list-item');
    }
}
