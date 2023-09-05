<div x-data="{ open: false }" @keydown.window.escape="open = false" class="bg-white">
    <div x-show="open" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div x-show="open" class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">
            <div x-show="open" class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
                <div class="flex px-4 pb-2 pt-5">
                    <button @click="open = false" type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="{{ route('product.index') }}" class="-m-2 block p-2 font-medium text-gray-900">Products</a>
                    </div>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    @auth()
                        <div class="flow-root">
                            <a href="{{ route('profile.edit') }}" class="-m-2 block p-2 font-medium text-gray-900">Account</a>
                        </div>
                        <div class="flow-root">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="-m-2 block p-2 font-medium text-gray-900"
                                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Sign out
                                </a>
                            </form>
                        </div>
                    @else
                        <div class="flow-root">
                            <a href="{{ route('login') }}" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                        </div>
                        <div class="flow-root">
                            <a href="{{ route('register') }}" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                        </div>
                    @endauth
                </div>
                <div class="border-t border-gray-200 px-4 py-6"></div>
            </div>
        </div>
    </div>

    <header class="relative bg-white">
        <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">Get free delivery on orders over $100</p>

        <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center">
                    <button @click="open = true" type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="{{ route('page.home') }}">
                            <span class="sr-only">Drop Kicks</span>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" />
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <a href="{{ route('product.index') }}" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Products</a>
                        </div>
                    </div>

                    <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            @auth()
                                <a href="{{ route('profile.edit') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Account</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="text-sm font-medium text-red-700 hover:text-red-800"
                                       onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        Sign out
                                    </a>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Sign in</a>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <a href="{{ route('register') }}" class="text-sm font-medium text-gray-700 hover:text-gray-800">Create account</a>
                            @endauth
                        </div>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="{{ route('cart.show') }}" class="group -m-2 flex items-center p-2">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">
                                    @auth
                                        {{ auth()->user()->cart?->cartItems?->count() ?? 0 }}
                                    @else
                                        0
                                    @endauth
                                </span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
