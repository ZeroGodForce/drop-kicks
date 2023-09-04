<x-storefront-layout>
    <x-storefront.top-navigation />

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 lg:max-w-7xl lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>
            <livewire:cart-summary :cart="$cart" />
        </div>
    </div>

    <x-storefront.footer />
</x-storefront-layout>
