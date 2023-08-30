<x-storefront-layout>
    <div class="bg-white">
        <!--
          Mobile menu

          Off-canvas menu for mobile, show/hide based on off-canvas menu state.
        -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
              Off-canvas menu backdrop, show/hide based on off-canvas menu state.

              Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
              Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>

            <div class="fixed inset-0 z-40 flex">
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                    <div class="flex px-4 pb-2 pt-5">
                        <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Links -->
                    <div class="mt-2">
                        <div class="border-b border-gray-200">
                            <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                                <button id="tabs-1-tab-1" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                                <button id="tabs-1-tab-2" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                            </div>
                        </div>

                        <!-- 'Women' tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="group relative text-sm">
                                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                                <div class="group relative text-sm">
                                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Basic Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div>
                                <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                                <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                                <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 'Men' tab panel, show/hide based on tab state. -->
                        <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                            <div class="grid grid-cols-2 gap-x-4">
                                <div class="group relative text-sm">
                                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        New Arrivals
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                                <div class="group relative text-sm">
                                    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                                    </div>
                                    <a href="#" class="mt-6 block font-medium text-gray-900">
                                        <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                        Artwork Tees
                                    </a>
                                    <p aria-hidden="true" class="mt-1">Shop now</p>
                                </div>
                            </div>
                            <div>
                                <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                                <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                                <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                                <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                    </li>
                                    <li class="flow-root">
                                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                        </div>
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                        </div>
                    </div>

                    <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                        </div>
                        <div class="flow-root">
                            <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-6">
                        <a href="#" class="-m-2 flex items-center p-2">
                            <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                            <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                            <span class="sr-only">, change currency</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <header class="relative overflow-hidden">
            <!-- Top navigation -->
            <x-storefront.top-navigation />

            <!-- Hero section -->
            <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
                <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
                    <div class="sm:max-w-lg">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Summer styles are finally here</h1>
                        <p class="mt-4 text-xl text-gray-500">This year, our new summer collection will shelter you from the harsh elements of a world that doesn't care if you live or die.</p>
                    </div>
                    <div>
                        <div class="mt-10">
                            <!-- Decorative image grid -->
                            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                                <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                                    <div class="flex items-center space-x-6 lg:space-x-8">
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-01.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-02.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-03.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-04.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-05.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-06.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                            <div class="h-64 w-44 overflow-hidden rounded-lg">
                                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-hero-image-tile-07.jpg" alt="" class="h-full w-full object-cover object-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">Shop Collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Category section -->
            <section aria-labelledby="category-heading" class="bg-gray-50">
                <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                    <div class="sm:flex sm:items-baseline sm:justify-between">
                        <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Category</h2>
                        <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                            Browse all categories
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                        <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-featured-category.jpg" alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee." class="object-cover object-center group-hover:opacity-75">
                            <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50"></div>
                            <div class="flex items-end p-6">
                                <div>
                                    <h3 class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            New Arrivals
                                        </a>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                                </div>
                            </div>
                        </div>
                        <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                            <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
                            <div class="flex items-end p-6 sm:absolute sm:inset-0">
                                <div>
                                    <h3 class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Accessories
                                        </a>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                                </div>
                            </div>
                        </div>
                        <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk." class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                            <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
                            <div class="flex items-end p-6 sm:absolute sm:inset-0">
                                <div>
                                    <h3 class="font-semibold text-white">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Workspace
                                        </a>
                                    </h3>
                                    <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 sm:hidden">
                        <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                            Browse all categories
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- Featured section -->
            <section aria-labelledby="cause-heading">
                <div class="relative bg-gray-800 px-6 py-32 sm:px-12 sm:py-40 lg:px-16">
                    <div class="absolute inset-0 overflow-hidden">
                        <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-feature-section-full-width.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
                    <div class="relative mx-auto flex max-w-3xl flex-col items-center text-center">
                        <h2 id="cause-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Long-term thinking</h2>
                        <p class="mt-3 text-xl text-white">We're committed to responsible, sustainable, and ethical manufacturing. Our small-scale approach allows us to focus on quality and reduce our impact. We're doing our best to delay the inevitable heat-death of the universe.</p>
                        <a href="#" class="mt-8 block w-full rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-gray-900 hover:bg-gray-100 sm:w-auto">Read our story</a>
                    </div>
                </div>
            </section>

            <!-- Favorites section -->
            <section aria-labelledby="favorites-heading">
                <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
                    <div class="sm:flex sm:items-baseline sm:justify-between">
                        <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Our Favorites</h2>
                        <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                            Browse all favorites
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-10 sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 lg:gap-x-8">
                        <div class="group relative">
                            <div class="h-96 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2 group-hover:opacity-75 sm:h-auto">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="Model wearing women&#039;s black cotton crewneck tee." class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Black Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">$32</p>
                        </div>
                        <div class="group relative">
                            <div class="h-96 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2 group-hover:opacity-75 sm:h-auto">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="Model wearing women&#039;s off-white cotton crewneck tee." class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Off-White Basic Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">$32</p>
                        </div>
                        <div class="group relative">
                            <div class="h-96 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2 group-hover:opacity-75 sm:h-auto">
                                <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-03.jpg" alt="Model wearing women&#039;s burgundy red crewneck artwork tee with small white triangle overlapping larger black triangle." class="h-full w-full object-cover object-center">
                            </div>
                            <h3 class="mt-4 text-base font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Mountains Artwork Tee
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">$36</p>
                        </div>
                    </div>

                    <div class="mt-6 sm:hidden">
                        <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                            Browse all favorites
                            <span aria-hidden="true"> &rarr;</span>
                        </a>
                    </div>
                </div>
            </section>

            <!-- CTA section -->
            <section aria-labelledby="sale-heading">
                <div class="overflow-hidden pt-32 sm:pt-14">
                    <div class="bg-gray-800">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                            <div class="relative pb-16 pt-48 sm:pb-24">
                                <div>
                                    <h2 id="sale-heading" class="text-4xl font-bold tracking-tight text-white md:text-5xl">
                                        Final Stock.
                                        <br>
                                        Up to 50% off.
                                    </h2>
                                    <div class="mt-6 text-base">
                                        <a href="#" class="font-semibold text-white">
                                            Shop the sale
                                            <span aria-hidden="true"> &rarr;</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="absolute -top-32 left-1/2 -translate-x-1/2 transform sm:top-6 sm:translate-x-0">
                                    <div class="ml-24 flex min-w-max space-x-6 sm:ml-3 lg:space-x-8">
                                        <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                            <div class="flex-shrink-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                                            </div>

                                            <div class="mt-6 flex-shrink-0 sm:mt-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex space-x-6 sm:-mt-20 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                            <div class="flex-shrink-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-01.jpg" alt="">
                                            </div>

                                            <div class="mt-6 flex-shrink-0 sm:mt-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-favorite-02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="flex space-x-6 sm:flex-col sm:space-x-0 sm:space-y-6 lg:space-y-8">
                                            <div class="flex-shrink-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="">
                                            </div>

                                            <div class="mt-6 flex-shrink-0 sm:mt-0">
                                                <img class="h-64 w-64 rounded-lg object-cover md:h-72 md:w-72" src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer aria-labelledby="footer-heading" class="bg-white">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="py-20 xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                        <div class="space-y-16 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Shop</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Company</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-16 md:grid md:grid-cols-2 md:gap-8 md:space-y-0">
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Account</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Manage Account</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Returns &amp; Exchanges</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Redeem a Gift Card</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-900">Connect</h3>
                                <ul role="list" class="mt-6 space-y-6">
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Contact Us</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Twitter</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Instagram</a>
                                    </li>
                                    <li class="text-sm">
                                        <a href="#" class="text-gray-500 hover:text-gray-600">Pinterest</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mt-16 md:mt-16 xl:mt-0">
                        <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
                        <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
                        <form class="mt-2 flex sm:max-w-md">
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white px-4 py-2 text-base text-indigo-500 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
                            <div class="ml-4 flex-shrink-0">
                                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-10">
                    <p class="text-sm text-gray-500">Copyright &copy; 2021 Your Company, Inc.</p>
                </div>
            </div>
        </footer>
    </div>

</x-storefront-layout>
