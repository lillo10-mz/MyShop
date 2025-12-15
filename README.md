<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesanus | Tienda de Suplementos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            500: '#6997ca',
                            600: '#4b7db2',
                            700: '#316298',
                        },
                        secondary: {
                            500: '#63d1c1',
                            600: '#41b8a5',
                        }
                    }
                }
            }
        }
    </script>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    <!-- Header con navegación -->
    <header class="bg-white dark:bg-gray-800 shadow-lg relative">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                  <div class="flex items-center space-x-4">
                    <a href="/" class="text-2xl font-bold text-primary-600 hover:text-primary-700 transition">Sesanus</a>
                </div>

                <!-- Navegación desktop -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Inicio</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Suplementos</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Vitaminas</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Packs Ahorro</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Contacto</a>
                </nav>

                 <!-- Botones desktop -->
                 <div class="hidden lg:flex items-center space-x-4">
                     <button class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">
                         🛒 Carrito (0)
                     </button>
                     <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition">
                         Iniciar Sesión
                     </button>
                     <button class="border-2 border-primary-600 text-primary-600 px-4 py-2 rounded-lg hover:bg-primary-600 hover:text-white transition">
                         Registrarse
                     </button>
                     <!-- Botón de modo oscuro desktop -->
                     <button id="darkModeToggleDesktop" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition p-2 rounded-full">
                         🌙
                     </button>
                 </div>

                <!-- Botones móvil/tablet -->
                <div class="flex items-center space-x-2 lg:hidden">
                    <!-- Botón de modo oscuro -->
                    <button id="darkModeToggle" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition p-2 rounded-full dark-mode-toggle">
                        🌙
                    </button>
                    <!-- Botón menú móvil -->
                    <button id="mobileMenuToggle" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

                <!-- Menú móvil -->
                <div id="mobileMenu" class="lg:hidden hidden mt-4 pb-4 border-t border-gray-200 dark:border-gray-700 mobile-menu">
                <nav class="flex flex-col space-y-4 pt-4">
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Inicio</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Suplementos</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Vitaminas</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Packs Ahorro</a>
                    <a href="#" class="text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">Contacto</a>
                    <div class="flex flex-col space-y-2 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <button class="text-left text-gray-700 dark:text-gray-300 hover:text-primary-600 transition">
                            🛒 Carrito (0)
                        </button>
                        <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition text-left">
                            Iniciar Sesión
                        </button>
                        <button class="border-2 border-primary-600 text-primary-600 px-4 py-2 rounded-lg hover:bg-primary-600 hover:text-white transition text-left">
                            Registrarse
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-gradient text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                Bienvenido a Sesanus
            </h2>
            <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                Tu tienda online de suplementos, vitaminas y productos para el bienestar diario.
                Cuida tu salud con fórmulas de calidad al mejor precio.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <button class="bg-white text-primary-600 font-bold py-4 px-8 rounded-full hover:bg-gray-100 transition duration-300 ease-in-out transform hover:scale-105">
                    Ver Suplementos
                </button>
                <button class="border-2 border-white text-white font-bold py-4 px-8 rounded-full hover:bg-white hover:text-primary-600 transition duration-300 ease-in-out">
                    Ver Packs Ahorro
                </button>
            </div>
        </div>
    </section>

    <!-- Categorías de Productos -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center text-gray-900 dark:text-white">
                Nuestras Categorías
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 product-card cursor-pointer">
                    <div class="text-4xl text-primary-500 mb-4">💊</div>
                    <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Vitaminas</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Complejos vitamínicos para reforzar tu energía y tus defensas.
                    </p>
                    <button class="text-primary-600 font-semibold hover:text-primary-700 transition">
                        Ver Vitaminas →
                    </button>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 product-card cursor-pointer">
                    <div class="text-4xl text-primary-500 mb-4">🧬</div>
                    <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Minerales</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Magnesio, zinc y otros minerales esenciales para tu día a día.
                    </p>
                    <button class="text-primary-600 font-semibold hover:text-primary-700 transition">
                        Ver Minerales →
                    </button>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 product-card cursor-pointer">
                    <div class="text-4xl text-primary-500 mb-4">🏋️‍♂️</div>
                    <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Deportivos</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Suplementos para rendimiento deportivo, fuerza y recuperación.
                    </p>
                    <button class="text-primary-600 font-semibold hover:text-primary-700 transition">
                        Ver Deportivos →
                    </button>
                </div>

                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 product-card cursor-pointer">
                    <div class="text-4xl text-primary-500 mb-4">🌿</div>
                    <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Bienestar</h4>
                    <p class="text-gray-600 dark:text-gray-300 mb-4">
                        Productos pensados para el descanso, la relajación y el equilibrio.
                    </p>
                    <button class="text-primary-600 font-semibold hover:text-primary-700 transition">
                        Ver Bienestar →
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- Productos Destacados -->
    <section class="py-16 bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <h3 class="text-3xl font-bold mb-12 text-center text-gray-900 dark:text-white">
                Suplementos Destacados
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden product-card">
                    <div class="h-48 bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                        <span class="text-4xl">💊</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Magnesio 400 mg</h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Apoya la función muscular y reduce el cansancio.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-primary-600">€14,95</span>
                            <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition">
                                Añadir al Carrito
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden product-card">
                    <div class="h-48 bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                        <span class="text-4xl">🧡</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Vitamina C 1000 mg</h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Refuerza el sistema inmunitario durante todo el año.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-primary-600">€11,90</span>
                            <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition">
                                Añadir al Carrito
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-700 rounded-lg shadow-lg overflow-hidden product-card">
                    <div class="h-48 bg-gray-200 dark:bg-gray-600 flex items-center justify-center">
                        <span class="text-4xl">🛡️</span>
                    </div>
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">Pack Defensas Sesanus</h4>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Combo de vitaminas y minerales para protegerte a diario.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-primary-600">€29,90</span>
                            <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition">
                                Añadir al Carrito
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h5 class="text-xl font-bold mb-4">💊 Sesanus</h5>
                    <p class="text-gray-400">
                        Tu tienda online de suplementos y bienestar, con productos seleccionados para tu salud.
                    </p>
                </div>
                <div>
                    <h6 class="font-bold mb-4">Enlaces Rápidos</h6>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Sobre Sesanus</a></li>
                        <li><a href="#" class="hover:text-white transition">Política de Privacidad</a></li>
                        <li><a href="#" class="hover:text-white transition">Términos y Condiciones</a></li>
                        <li><a href="#" class="hover:text-white transition">Envíos y Devoluciones</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="font-bold mb-4">Atención al Cliente</h6>
                    <ul class="space-y-2 text-gray-400">
                        <li>📞 +34 600 123 456</li>
                        <li>📧 soporte@sesanus.com</li>
                        <li>💬 Chat en vivo</li>
                        <li>🕒 L–V: 9:00–18:00</li>
                    </ul>
                </div>
                <div>
                    <h6 class="font-bold mb-4">Síguenos</h6>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">📘 Facebook</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">📷 Instagram</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">🐦 Twitter</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Sesanus. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

     <script>
         // Toggle dark mode functionality
         function toggleDarkMode() {
             document.documentElement.classList.toggle('dark');
             localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));

             // Cambiar el icono según el modo para ambos botones
             const toggleButton = document.getElementById('darkModeToggle');
             const toggleButtonDesktop = document.getElementById('darkModeToggleDesktop');

             if (document.documentElement.classList.contains('dark')) {
                 if (toggleButton) toggleButton.innerHTML = '☀️';
                 if (toggleButtonDesktop) toggleButtonDesktop.innerHTML = '☀️';
             } else {
                 if (toggleButton) toggleButton.innerHTML = '🌙';
                 if (toggleButtonDesktop) toggleButtonDesktop.innerHTML = '🌙';
             }
         }

        // Toggle mobile menu functionality
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuToggle = document.getElementById('mobileMenuToggle');

            mobileMenu.classList.toggle('hidden');

            // Cambiar el icono del botón
            if (mobileMenu.classList.contains('hidden')) {
                menuToggle.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                `;
            } else {
                menuToggle.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                `;
            }
        }

         // Check for saved dark mode preference
         document.addEventListener('DOMContentLoaded', function() {
             if (localStorage.getItem('darkMode') === 'true') {
                 document.documentElement.classList.add('dark');
                 const toggleButton = document.getElementById('darkModeToggle');
                 const toggleButtonDesktop = document.getElementById('darkModeToggleDesktop');
                 if (toggleButton) toggleButton.innerHTML = '☀️';
                 if (toggleButtonDesktop) toggleButtonDesktop.innerHTML = '☀️';
             }

             // Configurar los botones
             const toggleButton = document.getElementById('darkModeToggle');
             const toggleButtonDesktop = document.getElementById('darkModeToggleDesktop');
             if (toggleButton) toggleButton.onclick = toggleDarkMode;
             if (toggleButtonDesktop) toggleButtonDesktop.onclick = toggleDarkMode;
             document.getElementById('mobileMenuToggle').onclick = toggleMobileMenu;
         });
    </script>
</body>
</html>
