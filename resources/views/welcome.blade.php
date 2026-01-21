@extends('layouts.public')

@section('title', 'Bienvenido - Sesanus')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-primary-700 via-primary-500 to-accent text-white py-20 rounded-2xl shadow-sm">
    <div class="px-6 text-center">
        <p class="text-white/80 font-semibold tracking-wide mb-3">
            Sesanus
        </p>

        <h2 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
            Bienvenido a <span class="text-white">Sesanus</span>
        </h2>

        <p class="text-xl md:text-2xl text-white/85 mb-8 max-w-3xl mx-auto">
            Suplementos y bienestar para cuidar tu salud, tu descanso
            y tu rendimiento día a día.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
            <a
                href="{{ route('products.index') }}"
                class="bg-white text-primary-700 font-bold py-4 px-8 rounded-full
                       hover:bg-slate-100 transition duration-300 ease-in-out
                       transform hover:scale-105"
            >
                Ver Productos
            </a>

            <a
                href="{{ route('products.onSale') }}"
                class="border-2 border-white/90 text-white font-bold py-4 px-8
                       rounded-full hover:bg-white hover:text-primary-700
                       transition duration-300 ease-in-out"
            >
                🏷 Ofertas Especiales
            </a>
        </div>
    </div>
</section>


    <!-- Productos Destacados -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center text-gray-900">
                Productos Destacados
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($featuredProducts as $product)
                    <x-product-card :product="$product" />
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">
                            No hay productos destacados.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
