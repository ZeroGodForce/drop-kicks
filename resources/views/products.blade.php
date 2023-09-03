<x-storefront-layout>
    <x-storefront.top-navigation />

            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
                    <h2 class="text-xl font-bold text-gray-900">{{ $page->name }}</h2>
                    <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                        @isset($products)
                            @foreach($products as $product)
                                <livewire:product-list-item :product="$product" />
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

    <x-storefront.footer />
</x-storefront-layout>
