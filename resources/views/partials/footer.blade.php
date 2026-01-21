<!-- Footer -->
<footer class="mt-16 border-t border-slate-200 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Marca -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-primary-50 text-primary-700 font-extrabold">
                        SE
                    </span>
                    <h5 class="text-xl font-extrabold text-ink">
                        <span class="text-primary-600">SE</span>SANUS
                    </h5>
                </div>

                <p class="text-slate-600 leading-relaxed">
                    Suplementos y bienestar para cuidar tu salud, tu descanso
                    y tu rendimiento día a día.
                </p>
            </div>

            <!-- Enlaces -->
            <div>
                <h6 class="font-extrabold text-ink mb-4">Enlaces rápidos</h6>
                <ul class="space-y-2 text-slate-600">
                    <li>
                        <a href="{{ route('home') }}"
                           class="hover:text-primary-700 transition">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}"
                           class="hover:text-primary-700 transition">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('categories.index') }}"
                           class="hover:text-primary-700 transition">
                            Categorías
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                           class="hover:text-primary-700 transition">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h6 class="font-extrabold text-ink mb-4">Contacto</h6>
                <ul class="space-y-2 text-slate-600">
                    <li class="flex items-center gap-2">
                        <span>📞</span><span>665137268</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>📧</span><span>migzamrui@alu.edu.gva.es</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span>🕒</span><span>24h</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-slate-200 mt-10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-slate-500">
            <p>© {{ date('Y') }} Sesanus. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
