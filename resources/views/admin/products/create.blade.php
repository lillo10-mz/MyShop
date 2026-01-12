<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form
                        action="{{ route('admin.products.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        {{-- Nombre del Producto --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Nombre
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                class="mt-1 block w-full"
                            >

                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Descripción --}}
                        <div class="mt-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">
                                Descripción
                            </label>

                            <textarea
                                id="description"
                                name="description"
                                rows="4"
                                class="mt-1 block w-full"
                            >{{ old('description') }}</textarea>

                            @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Marca --}}
                        <div class="mt-4">
                            <label for="brand" class="block text-sm font-medium text-gray-700">
                                Marca
                            </label>

                            <input
                                type="text"
                                id="brand"
                                name="brand"
                                value="{{ old('brand') }}"
                                class="mt-1 block w-full"
                            >

                            @error('brand')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Modelo --}}
                        <div class="mt-4">
                            <label for="model" class="block text-sm font-medium text-gray-700">
                                Modelo
                            </label>

                            <input
                                type="text"
                                id="model"
                                name="model"
                                value="{{ old('model') }}"
                                class="mt-1 block w-full"
                            >

                            @error('model')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Stock --}}
                        <div class="mt-4">
                            <label for="stock" class="block text-sm font-medium text-gray-700">
                                Stock
                            </label>

                            <input
                                type="number"
                                id="stock"
                                name="stock"
                                value="{{ old('stock') }}"
                                class="mt-1 block w-full"
                                min="0"
                            >

                            @error('stock')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Imagen del Producto --}}
                        <div class="mt-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">
                                Imagen
                            </label>

                            <input
                                type="file"
                                id="image"
                                name="image"
                                class="mt-1 block w-full"
                            >

                            <p class="mt-1 text-xs text-gray-500">
                                Formatos permitidos: JPG, PNG
                            </p>

                            @error('image')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Precio --}}
                        <div class="mt-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">
                                Precio
                            </label>

                            <input
                                type="number"
                                id="price"
                                name="price"
                                value="{{ old('price') }}"
                                class="mt-1 block w-full"
                            >

                            @error('price')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Categoría --}}
                        <div class="mt-4">
                            <label for="category_id" class="block text-sm font-medium text-gray-700">
                                Categoría
                            </label>

                            <select
                                id="category_id"
                                name="category_id"
                                class="mt-1 block w-full"
                            >
                                <option value="">Selecciona una categoría</option>

                                @foreach ($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                                    >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Oferta (Opcional) --}}
                        <div class="mt-4">
                            <label for="offer_id" class="block text-sm font-medium text-gray-700">
                                Oferta
                            </label>

                            <select
                                id="offer_id"
                                name="offer_id"
                                class="mt-1 block w-full"
                            >
                                <option value="">Sin oferta</option>

                                @foreach ($offers as $offer)
                                    <option
                                        value="{{ $offer->id }}"
                                        {{ old('offer_id') == $offer->id ? 'selected' : '' }}
                                    >
                                        {{ $offer->name }} (-{{ $offer->discount_percentage }}%)
                                    </option>
                                @endforeach
                            </select>

                            @error('offer_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Botones de Acción --}}
                        <div class="flex justify-end space-x-4 pt-6">
                            <a
                                href="{{ route('admin.products.index') }}"
                                class="px-4 py-2 bg-gray-300 rounded"
                            >
                                Cancelar
                            </a>

                            <button
                                type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded"
                            >
                                Crear Producto
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
