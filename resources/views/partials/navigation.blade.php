<nav class="hidden md:flex items-center gap-2">
    <!-- Inicio -->
    <a href="{{ route('home') }}"
       class="px-3 py-2 rounded-full text-sm font-semibold transition
              {{ request()->routeIs('home')
                    ? 'bg-primary-50 text-primary-700'
                    : 'text-slate-700 hover:text-primary-700 hover:bg-slate-50' }}">
        Inicio
    </a>

    <!-- Productos -->
    <a href="{{ route('products.index') }}"
       class="px-3 py-2 rounded-full text-sm font-semibold transition
              {{ request()->routeIs('products.*')
                    ? 'bg-primary-50 text-primary-700'
                    : 'text-slate-700 hover:text-primary-700 hover:bg-slate-50' }}">
        Productos
    </a>

    <!-- Categorías -->
    <a href="{{ route('categories.index') }}"
       class="px-3 py-2 rounded-full text-sm font-semibold transition
              {{ request()->routeIs('categories.*')
                    ? 'bg-primary-50 text-primary-700'
                    : 'text-slate-700 hover:text-primary-700 hover:bg-slate-50' }}">
        Categorías
    </a>

    <!-- Ofertas -->
    <a href="{{ route('offers.index') }}"
       class="px-3 py-2 rounded-full text-sm font-semibold transition
              {{ request()->routeIs('offers.*')
                    ? 'bg-primary-50 text-primary-700'
                    : 'text-slate-700 hover:text-primary-700 hover:bg-slate-50' }}">
        Ofertas
    </a>

    <!-- Contacto -->
    <a href="{{ route('contact') }}"
       class="px-3 py-2 rounded-full text-sm font-semibold transition
              {{ request()->routeIs('contact')
                    ? 'bg-primary-50 text-primary-700'
                    : 'text-slate-700 hover:text-primary-700 hover:bg-slate-50' }}">
        Contacto
    </a>

    @auth
        <a href="{{ route('dashboard') }}"
           class="px-3 py-2 rounded-full text-sm font-semibold transition
                  {{ request()->routeIs('dashboard')
                        ? 'bg-primary-50 text-primary-700'
                        : 'text-slate-700 hover:text-primary-700 hover:bg-slate-50' }}">
            Dashboard
        </a>
    @endauth

    @guest
        <div class="w-px h-6 bg-slate-200 mx-2"></div>

        <a href="{{ route('login') }}"
           class="px-4 py-2 rounded-full text-sm font-bold transition
                  border border-primary-200 text-primary-700 bg-primary-50
                  hover:bg-primary-100 hover:border-primary-300">
            Login
        </a>

        <a href="{{ route('register') }}"
           class="px-4 py-2 rounded-full text-sm font-bold transition
                  bg-primary-600 text-white hover:bg-primary-700">
            Register
        </a>
    @endguest
</nav>
