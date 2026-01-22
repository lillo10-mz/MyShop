<div class="bg-white border border-slate-200 rounded-xl p-6 cursor-pointer transition hover:border-slate-300 hover:shadow-md {{ $class }}">

    {{-- Icono por categoría --}}
    <div class="text-4xl mb-4">
        @switch($category['name'])
            @case('Bienestar General')
                🌿
                @break

            @case('Sueño y Relajación')
                🌙
                @break

            @case('Deporte y Rendimiento')
                💪
                @break

            @case('Salud Digestiva')
                🍃
                @break

            @case('Vitaminas y Minerales')
                💊
                @break

            @default
                📦
        @endswitch
    </div>

    <h4 class="text-lg font-extrabold text-ink mb-2">
        {{ $category['name'] }}
    </h4>

    <p class="text-slate-600 mb-4">
        {{ $category['description'] }}
    </p>

    <a
        href="{{ route('categories.show', $category['id']) }}"
        class="inline-flex items-center gap-2 font-bold text-primary-700 hover:text-primary-800 transition"
    >
        Ver Productos <span aria-hidden="true">→</span>
    </a>
</div>


