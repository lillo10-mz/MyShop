<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    /**
     * Show the welcome page with featured content
     */
    public function index(): View
    {
        // Productos destacados: primeros 3 con oferta
        $featuredProducts = Product::with(['category', 'offer'])
            ->whereNotNull('offer_id')
            ->take(3)
            ->get();

        // Categorías destacadas: primeras 4
        $featuredCategories = Category::take(4)->get();

        return view('welcome', compact('featuredProducts', 'featuredCategories'));
    }
}


