@extends('layouts.public')

@section('title', 'Contacto - Sesanus')

@section('content')
    <div class="py-10">
        <div class="max-w-3xl mx-auto">

            {{-- Cabecera --}}
            <div class="mb-10 text-center">
                <h1 class="page-title mb-3">
                    Contacta con Nosotros
                </h1>

                <p class="page-subtitle">
                    ¿Tienes alguna duda, sugerencia o necesitas ayuda?
                    Escríbenos y te responderemos lo antes posible.
                </p>
            </div>

            {{-- Formulario --}}
            <div class="panel panel-pad">
                <form action="#" method="POST" class="space-y-6">
                    {{-- Nombre --}}
                    <div>
                        <label class="block text-sm font-bold text-ink mb-2">
                            Nombre
                        </label>
                        <input
                            type="text"
                            placeholder="Tu nombre"
                            class="input"
                        >
                    </div>

                    {{-- Email --}}
                    <div>
                        <label class="block text-sm font-bold text-ink mb-2">
                            Email
                        </label>
                        <input
                            type="email"
                            placeholder="tu@email.com"
                            class="input"
                        >
                    </div>

                    {{-- Asunto --}}
                    <div>
                        <label class="block text-sm font-bold text-ink mb-2">
                            Asunto
                        </label>
                        <input
                            type="text"
                            placeholder="Motivo del mensaje"
                            class="input"
                        >
                    </div>

                    {{-- Mensaje --}}
                    <div>
                        <label class="block text-sm font-bold text-ink mb-2">
                            Mensaje
                        </label>
                        <textarea
                            rows="5"
                            placeholder="Escribe aquí tu mensaje..."
                            class="input resize-none"
                        ></textarea>
                    </div>

                    {{-- Botón --}}
                    <div class="pt-2 flex justify-end">
                        <button type="submit" class="btn-primary">
                            ✉️ Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>

            {{-- Info adicional --}}
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="panel panel-pad">
                    <div class="text-3xl mb-2">📞</div>
                    <p class="font-bold text-ink">Teléfono</p>
                    <p class="text-slate-600">665 137 268</p>
                </div>

                <div class="panel panel-pad">
                    <div class="text-3xl mb-2">📧</div>
                    <p class="font-bold text-ink">Email</p>
                    <p class="text-slate-600">migzamrui@alu.edu.gva.es</p>
                </div>

                <div class="panel panel-pad">
                    <div class="text-3xl mb-2">🕒</div>
                    <p class="font-bold text-ink">Horario</p>
                    <p class="text-slate-600">24h · Atención online</p>
                </div>
            </div>

        </div>
    </div>
@endsection
