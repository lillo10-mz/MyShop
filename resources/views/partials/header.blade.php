<!-- Header -->
<header class="bg-white border-b border-slate-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <div class="flex items-center justify-between gap-6">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <img
                    src="{{ asset('images/logo-sesanus.jpg') }}"
                    alt="Sesanus"
                    class="h-10 sm:h-12 w-auto rounded-lg"
                >
            </a>

            <!-- Navegación -->
            <div class="flex-1 flex justify-center">
                @include('partials.navigation')
            </div>

            <!-- Carrito -->
            @php
                $cart = session('cart', []);
                $totalQuantity = array_sum(array_column($cart, 'quantity'));
            @endphp

            <a
                href="{{ route('cart.index') }}"
                class="inline-flex items-center gap-2 rounded-full px-4 py-2 font-semibold
                       text-primary-700 border border-primary-200 bg-primary-50
                       hover:bg-primary-100 hover:border-primary-300 transition"
            >
                <span>🛒</span>
                <span>Carrito</span>

                <span
                    class="inline-flex items-center justify-center min-w-7 h-7 px-2
                           rounded-full bg-primary-600 text-white text-sm font-bold"
                >
                    {{ $totalQuantity }}
                </span>
            </a>

        </div>
    </div>
</header>


