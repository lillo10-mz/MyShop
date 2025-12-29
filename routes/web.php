<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Aquí definimos las rutas públicas de la tienda Sesanus usando mock data.
|
*/

// Ruta principal: página de inicio
Route::get('/', [WelcomeController::class, 'index'])->name('home');

// Lista de productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Productos en oferta
Route::get('/products-on-sale', [ProductController::class, 'onSale'])->name('products.onSale');

// Detalle de producto
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Lista de categorias
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// Detalle de categoria
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

// Lista de ofertas
Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');

// Detalle de oferta
Route::get('/offers/{id}', [OfferController::class, 'show'])->name('offers.show');

// Carrito de la compra
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Página de contacto (aun sin controlador, puede ser una vista simple)
// Route::view('/contact', 'contact')->name('contact');
// Contact page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
