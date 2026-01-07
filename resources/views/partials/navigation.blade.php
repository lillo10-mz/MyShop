<nav class="hidden md:flex space-x-8">
    <a
        href="{{ route('home') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('welcome') }}"
    >
        Inicio
    </a>

    <a
        href="{{ route('products.index') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('products.*') }}"
    >
        Productos
    </a>

    <a
        href="{{ route('categories.index') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('categories.*') }}"
    >
        Categorías
    </a>

    <a
        href="{{ route('offers.index') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('offers.*') }}"
    >
        Ofertas
    </a>

    <a
        href="{{ route('contact') }}"
        class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('contact') }}"
    >
        Contacto
    </a>

    @auth
        <a
            href="{{ route('dashboard') }}"
            class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('dashboard') }}"
        >
            Dashboard
        </a>
    @endauth

    @guest
        <a
            href="{{ route('login') }}"
            class="text-gray-700 hover:text-primary-600 transition {{ request()->routeIs('login') }}"
        >
            Login
        </a>
    @endguest
</nav>

