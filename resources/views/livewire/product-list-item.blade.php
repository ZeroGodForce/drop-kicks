<div class="flex flex-col h-full">
    <div class="relative flex-grow">
        <div class="relative h-72 w-full overflow-hidden rounded-lg">
            <img src="{{ url("product-images/{$product->product_image}") }}" alt="Picture of {{ $product->name }}" class="h-full w-full object-cover object-center">
        </div>
        <div class="relative mt-4">
            <h3 class="text-sm font-medium text-gray-900">{{ $product->name }}</h3>
            <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>
        </div>
        <div class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
            <p class="relative text-lg font-semibold text-black">£{{ $product->price }}</p>
        </div>
    </div>
    <div class="mt-6">
        @auth
            <form wire:submit="add">
                <input type="hidden" name="product_uuid" wire:model="product_uuid" value="{{ $product->uuid }}">
                <input type="hidden" name="quantity" wire:model="quantity" value="{{ $quantity }}">
                <button type="submit" class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">
                    Add to bag<span class="sr-only">, {{ $product->name }}</span>
                </button>
            </form>
        @else
            <a href="#" class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add to bag<span class="sr-only">, Zip Tote Basket</span></a>
        @endauth
    </div>
</div>
