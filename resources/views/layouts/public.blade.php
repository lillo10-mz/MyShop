<!DOCTYPE html>
<html lang="es">
<head>
    @include('partials.head')
</head>

<body class="min-h-screen flex flex-col bg-slate-50 text-slate-900">
    {{-- Header --}}
    @include('partials.header')

    {{-- Flash (centrado y con margen) --}}
    <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 pt-4">
        @include('partials.flash-messages')
    </div>

    {{-- Contenido --}}
    <main class="flex-1">
        <div class="max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-8">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    @stack('scripts')
</body>
</html>


