@extends('layouts.public')

@section('title', 'Categorías - Sesanus')

@section('content')
    <div class="py-8">
        {{-- Cabecera --}}
        <div class="mb-8">
            <h1 class="page-title mb-2">
                Nuestras Categorías
            </h1>

            <p class="page-subtitle">
                Explora nuestros productos por categoría.
            </p>
        </div>

        {{-- Grid de categorías --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse($categories as $category)
                <x-category-card :category="$category" />
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">
                        No hay categorías disponibles.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
@endsection

