<nav class="hidden md:flex space-x-8">
    <a
        href="{{ route('home') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('home') ? 'font-semibold' : '' }}"
    >
        Inicio
    </a>

    <a
        href="{{ route('products.index') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('products.*') ? 'font-semibold' : '' }}"
    >
        Productos
    </a>

    <a
        href="{{ route('categories.index') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('categories.*') ? 'font-semibold' : '' }}"
    >
        Categorías
    </a>

    <a
        href="{{ route('offers.index') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('offers.*') ? 'font-semibold' : '' }}"
    >
        Ofertas
    </a>

    <a
        href="{{ route('contact') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('contact') ? 'font-semibold' : '' }}"
    >
        Contacto
    </a>

    @auth
        <a
            href="{{ route('dashboard') }}"
            class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('dashboard') ? 'font-semibold' : '' }}"
        >
            Dashboard
        </a>
    @endauth

    @guest
        <a
            href="{{ route('login') }}"
            class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('login') ? 'font-semibold' : '' }}"
        >
            Login
        </a>

        <a
            href="{{ route('register') }}"
            class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('register') ? 'font-semibold' : '' }}"
        >
            Register
        </a>
    @endguest
</nav>


