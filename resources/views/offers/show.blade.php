@extends('layouts.public')

@section('title', $offer->name . ' - Sesanus')

@section('content')
    <div class="py-8">
        <!-- Header de la Oferta -->
        <div class="rounded-xl p-8 mb-8 text-white bg-gradient-to-r from-primary-600 to-accent">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h1 class="text-4xl font-extrabold mb-2">
                        {{ $offer->name }}
                    </h1>

                    <p class="text-white/90 text-lg">
                        {{ $offer->description }}
                    </p>
                </div>

                <div class="bg-white text-primary-700 rounded-full w-32 h-32 flex items-center justify-center shadow">
                    <div class="text-center">
                        <div class="text-4xl font-extrabold">
                            {{ $offer->discount_percentage }}%
                        </div>
                        <div class="text-sm font-bold text-slate-600">
                            OFF
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Productos con esta oferta -->
        <div class="mb-8">
            <h2 class="text-2xl font-extrabold text-ink mb-6">
                Productos en Oferta
            </h2>

            @if($offerProducts->isNotEmpty())
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($offerProducts as $product)
                        <x-product-card :product="$product" />
                    @endforeach
                </div>
            @else
                <div class="panel panel-pad text-center">
                    <p class="text-slate-600 text-lg">
                        No hay productos con esta oferta actualmente.
                    </p>
                </div>
            @endif
        </div>

        <!-- Botón volver -->
        <div class="mt-8">
            <a href="{{ route('offers.index') }}" class="btn-muted">
                ← Volver a Ofertas
            </a>
        </div>
    </div>
@endsection
