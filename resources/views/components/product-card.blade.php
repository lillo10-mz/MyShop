<div class="bg-white border border-slate-200 rounded-xl overflow-hidden relative transition hover:border-slate-300 hover:shadow-md {{ $class }} {{ $product->offer ? 'offer-ring' : '' }}">
    <!-- Badge descuento -->
    @if($product->offer)
        <div class="absolute top-3 right-3 offer-badge z-10">
            -{{ $product->offer->discount_percentage }}%
        </div>
    @endif

    <!-- Slot opcional -->
    @isset($topAction)
        <div class="absolute top-3 left-3 z-10">
            {{ $topAction }}
        </div>
    @endisset

    <!-- Imagen -->
    <div class="h-48 bg-slate-100 flex items-center justify-center overflow-hidden {{ $product->offer ? 'offer-surface' : '' }}">
        @if(!empty($product->image))
            <img src="{{ asset('storage/' . $product->image) }}"
                 alt="{{ $product->name }}"
                 class="w-full h-full object-cover">
        @else
            <span class="text-4xl text-slate-400">📦</span>
        @endif
    </div>

    <div class="p-6">
        <h4 class="text-lg font-extrabold text-ink mb-1">
            {{ $product->name }}
        </h4>

        <p class="text-slate-600 mb-4">
            {{ Str::limit($product->description, 80) }}
        </p>

        <!-- Nombre de la oferta -->
        @if($product->offer)
            <div class="mb-4">
                <span class="badge-offer">
                    🏷️ {{ $product->offer->name }}
                </span>
            </div>
        @endif

        <!-- Precio -->
        <div class="mb-5">
            @if($product->offer)
                <div class="flex items-baseline gap-2">
                    <span class="text-sm text-slate-400 line-through">
                        €{{ number_format($product->price, 2) }}
                    </span>
                    <span class="text-2xl font-extrabold offer-price">
                        €{{ number_format($product->final_price, 2) }}
                    </span>
                </div>
            @else
                <span class="text-2xl font-extrabold text-primary-600">
                    €{{ number_format($product->final_price, 2) }}
                </span>
            @endif
        </div>

        <!-- Acciones -->
        @isset($actions)
            {{ $actions }}
        @else
            <a href="{{ route('products.show', $product->id) }}"
               class="block text-center font-bold rounded-full px-4 py-2 transition
                      bg-primary-600 text-white hover:bg-primary-700">
                Ver Detalles
            </a>
        @endisset
    </div>
</div>

