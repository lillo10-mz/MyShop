@extends('layouts.public')

@section('title', 'Todos los Productos - Sesanus')

@section('content')
        {{-- Cabecera --}}
        <div class="mb-8">
            <h1 class="page-title mb-2">Todos los Productos</h1>
            <p class="page-subtitle">
                Descubre nuestra amplia gama de productos de calidad.
            </p>
        </div>

        {{-- 🔍 Buscador + Filtros --}}
        <div class="panel panel-pad mb-8">
            <form method="GET" action="{{ route('products.index') }}" class="grid grid-cols-1 md:grid-cols-4 gap-4">

                {{-- Buscar --}}
                <div class="md:col-span-2">
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Buscar por nombre, descripción, marca o modelo..."
                        class="input"
                    >
                </div>

                {{-- Categoría --}}
                <div>
                    <select name="category_id" class="select">
                        <option value="">Todas las categorías</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Orden --}}
                <div>
                    <select name="sort" class="select">
                        <option value="newest" {{ request('sort', 'newest') === 'newest' ? 'selected' : '' }}>
                            Más nuevos
                        </option>
                        <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>
                            Precio: menor a mayor
                        </option>
                        <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>
                            Precio: mayor a menor
                        </option>
                        <option value="name_asc" {{ request('sort') === 'name_asc' ? 'selected' : '' }}>
                            Nombre A–Z
                        </option>
                        <option value="name_desc" {{ request('sort') === 'name_desc' ? 'selected' : '' }}>
                            Nombre Z–A
                        </option>
                    </select>
                </div>

                {{-- Checks + botones --}}
                <div class="md:col-span-4 flex flex-col md:flex-row md:items-center gap-4">
                    <label class="inline-flex items-center gap-2">
                        <input type="checkbox" name="on_sale" value="1" {{ request('on_sale') ? 'checked' : '' }}>
                        <span class="text-sm text-slate-700 font-semibold">Solo ofertas</span>
                    </label>

                    <label class="inline-flex items-center gap-2">
                        <input type="checkbox" name="in_stock" value="1" {{ request('in_stock') ? 'checked' : '' }}>
                        <span class="text-sm text-slate-700 font-semibold">Solo con stock</span>
                    </label>

                    <div class="flex gap-2 md:ml-auto">
                        <button type="submit" class="btn-primary">
                            🔍 Buscar
                        </button>

                        <a href="{{ route('products.index') }}" class="btn-muted">
                            Limpiar
                        </a>
                    </div>
                </div>
            </form>
        </div>

        {{-- Texto de búsqueda --}}
        @if(request()->filled('search'))
            <p class="text-sm text-slate-500 mb-6">
                Resultados para: <strong class="text-slate-700">"{{ request('search') }}"</strong>
            </p>
        @endif

        {{-- Grid de productos --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($products as $product)
                <x-product-card :product="$product" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">
                        No hay productos disponibles con estos filtros.
                    </p>
                </div>
            @endforelse
        </div>
@endsection
