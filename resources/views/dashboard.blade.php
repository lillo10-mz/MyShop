
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- ADMIN --}}
            @if(auth()->user()->role === 'admin')
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Panel de Administración</h3>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="p-5 rounded-lg border">
                                <p class="text-sm text-gray-500">Productos</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $adminStats['products'] ?? 0 }}</p>
                            </div>

                            <div class="p-5 rounded-lg border">
                                <p class="text-sm text-gray-500">Usuarios</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $adminStats['users'] ?? 0 }}</p>
                            </div>

                            <div class="p-5 rounded-lg border">
                                <p class="text-sm text-gray-500">Deseos (total)</p>
                                <p class="text-3xl font-bold text-gray-900">{{ $adminStats['wishlist'] ?? 0 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- USER (y admin también lo ve) --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Tu Actividad</h3>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="p-5 rounded-lg border">
                            <p class="text-sm text-gray-500">Tus deseos</p>
                            <p class="text-3xl font-bold text-gray-900">{{ $wishlistCount ?? 0 }}</p>
                        </div>

                        <div class="p-5 rounded-lg border">
                            <p class="text-sm text-gray-500">Compras</p>
                            <p class="text-3xl font-bold text-gray-900">{{ $fakePurchasesQty ?? 0 }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>