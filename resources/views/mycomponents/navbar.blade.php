<div class="navbar bg-transparent  text-white fixed top-0 left-0 right-0 px-64 z-50">
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl">D'Zen Media</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/services">Services</a></li>
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
