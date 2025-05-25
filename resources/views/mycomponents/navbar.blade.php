<div class="navbar bg-transparent  text-white fixed top-0 left-0 right-0 px-64 z-50">
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl">D'Zen Media</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/" wire:navigate>Home</a></li>
            <li><a href="/about" wire:navigate>About</a></li>
            <li><a href="/services" wire:navigate>Services</a></li>
            {{-- <li><a href="/order">Order</a></li> --}}
            <li><a href="{{ route('transaksi.order') }}">Order</a></li>

            {{-- <li><a href="{{ route('transaksi.index') }}">Order</a></li> --}}

        </ul>
    </div>
    <div class="navbar-end">
        @if (Route::has('login'))

            @auth
                <a href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:font-bold focus:outline-none focus-visible:ring-[#FF2D20]">
                    Dashboard
                </a>
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white  focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <a href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:font-bold focus:outline-none focus-visible:ring-[#FF2D20]">
                    Log in
                </a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:font-bold focus:outline-none focus-visible:ring-[#FF2D20]">
                        Register
                    </a>
                @endif

            @endauth

        @endif
    </div>
</div>
