@extends('layouts.public')

@section('title', 'Ofertas - Sesanus')

@section('content')
    <div class="py-8">
        {{-- Cabecera --}}
        <div class="mb-8">
            <h1 class="page-title mb-2">
                Ofertas Especiales
            </h1>

            <p class="page-subtitle">
                Descubre nuestras mejores ofertas y descuentos.
            </p>
        </div>

        {{-- Grid de ofertas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($offers as $offer)
                <div class="card card-hover card-offer p-6">
                    
                    {{-- Badge descuento --}}
                    <div class="badge-offer mb-4">
                        🏷️ {{ $offer->discount_percentage }}% de descuento
                    </div>

                    {{-- Nombre --}}
                    <h3 class="text-xl font-extrabold text-ink mb-2">
                        {{ $offer->name }}
                    </h3>

                    {{-- Descripción --}}
                    <p class="text-slate-600 mb-6">
                        {{ $offer->description }}
                    </p>

                    {{-- Acción --}}
                    <a href="{{ route('offers.show', $offer->id) }}" class="btn-offer">
                        Ver Productos
                    </a>
                </div>
            @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-slate-500 text-lg">
                        No hay ofertas disponibles.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
@endsection



