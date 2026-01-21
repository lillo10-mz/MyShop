@extends('layouts.public')

@section('title', 'Carrito - Sesanus')

@section('content')
<div class="py-8">
    <h1 class="page-title mb-8">🛒 Carrito de Compras</h1>

    @if($cartProducts->isEmpty())
        <div class="panel panel-pad text-center">
            <div class="text-6xl mb-4">🛒</div>
            <h2 class="text-2xl font-extrabold text-ink mb-2">Tu carrito está vacío</h2>
            <p class="text-slate-600 mb-6">¡Añade productos para comenzar tu compra!</p>

            <a href="{{ route('products.index') }}" class="btn-primary">
                Ver Productos
            </a>
        </div>
    @else
        <div class="panel overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-extrabold text-slate-700">Producto</th>
                            <th class="px-6 py-4 text-left text-sm font-extrabold text-slate-700">Precio</th>
                            <th class="px-6 py-4 text-center text-sm font-extrabold text-slate-700">Cantidad</th>
                            <th class="px-6 py-4 text-left text-sm font-extrabold text-slate-700">Subtotal</th>
                            <th class="px-6 py-4 text-center text-sm font-extrabold text-slate-700">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-200 bg-white">
                        @php $total = 0; @endphp

                        @foreach($cartProducts as $product)
                            @php
                                $subtotal = $product->final_price * $product->quantity;
                                $total += $subtotal;
                            @endphp

                            <tr class="hover:bg-slate-50/60 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-4">
                                        @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                 alt="{{ $product->name }}"
                                                 class="h-16 w-16 object-cover rounded-lg border border-slate-200">
                                        @else
                                            <div class="h-16 w-16 bg-slate-100 flex items-center justify-center rounded-lg text-3xl border border-slate-200">
                                                📦
                                            </div>
                                        @endif

                                        <div>
                                            <div class="font-extrabold text-ink">{{ $product->name }}</div>
                                            <div class="text-sm text-slate-600">{{ $product->category->name }}</div>

                                            @if($product->offer)
                                                <span class="badge-offer mt-2">
                                                    🏷️ -{{ $product->offer->discount_percentage }}%
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4">
                                    @if($product->offer)
                                        <div>
                                            <span class="text-sm text-slate-400 line-through">
                                                €{{ number_format($product->price, 2) }}
                                            </span>
                                            <div class="font-extrabold text-orange-600">
                                                €{{ number_format($product->final_price, 2) }}
                                            </div>
                                        </div>
                                    @else
                                        <div class="font-extrabold text-ink">
                                            €{{ number_format($product->final_price, 2) }}
                                        </div>
                                    @endif
                                </td>

                                <td class="px-6 py-4">
                                    {{-- FORMULARIO PARA ACTUALIZAR CANTIDAD --}}
                                    <form action="{{ route('cart.update', $product->id) }}" method="POST" class="flex items-center justify-center gap-2">
                                        @csrf
                                        @method('PUT')

                                        <input
                                            type="number"
                                            name="quantity"
                                            value="{{ $product->quantity }}"
                                            min="1"
                                            class="w-20 text-center border border-slate-300 rounded-lg px-3 py-2
                                                   focus:outline-none focus:ring-2 focus:ring-primary-200 focus:border-primary-300"
                                        >

                                        <button type="submit"
                                                class="btn-soft px-3 py-2"
                                                title="Actualizar cantidad">
                                            🔄
                                        </button>
                                    </form>
                                </td>

                                <td class="px-6 py-4 font-extrabold text-ink">
                                    €{{ number_format($subtotal, 2) }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    {{-- FORMULARIO PARA ELIMINAR --}}
                                    <form action="{{ route('cart.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="font-bold text-red-600 hover:text-red-800 transition"
                                                title="Eliminar producto">
                                            🗑️ Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                    <tfoot class="bg-slate-50">
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-right font-extrabold text-slate-700">
                                Total:
                            </td>
                            <td class="px-6 py-4 font-extrabold text-2xl text-primary-600">
                                €{{ number_format($total, 2) }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="mt-6 flex flex-col sm:flex-row justify-between items-center gap-3">
            <a href="{{ route('products.index') }}" class="btn-muted">
                ← Seguir Comprando
            </a>

            {{-- FORMULARIO PARA FINALIZAR COMPRA --}}
            <form action="{{ route('cart.checkout') }}" method="POST">
                @csrf
                <button type="submit"
                        class="btn inline-flex items-center justify-center font-bold rounded-full px-6 py-3 transition
                               bg-emerald-600 text-white hover:bg-emerald-700">
                    Realizar Pedido →
                </button>
            </form>
        </div>
    @endif
</div>
@endsection
