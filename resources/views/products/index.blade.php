@extends('layouts.public')

@section('title', 'Todos los Productos - Mi Tienda')

@push('styles')
    <style>
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto px-6 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">
                Todos los Productos
            </h1>

            <p class="text-gray-600">
                Descubre nuestra amplia gama de productos de calidad.
            </p>
        </div>

        {{-- Buscador --}}
        <form method="GET" action="{{ route('products.index') }}" class="mb-6">
            <div class="flex gap-4">
                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Buscar productos..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring focus:ring-primary-200"
                >

                <button
                    type="submit"
                    class="bg-primary-600 text-white px-6 py-2 rounded-lg hover:bg-primary-700 transition"
                >
                    🔍 Buscar
                </button>
            </div>
        </form>

        @if(request()->filled('search'))
            <p class="text-sm text-gray-500 mb-6">
                Resultados para: <strong>"{{ request('search') }}"</strong>
            </p>
        @endif

        <div class="product-grid">
            @forelse($products as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">
                        No hay productos disponibles.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
@endsection

