<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function index(): View
    {
        $user = auth()->user();

        // Wishlist (robusto: intenta varias tablas típicas)
        $wishlistCount = $this->getWishlistCountForUser($user->id);

        // "Compras fake" (por ahora): usamos el carrito (pivot product_user)
        $fakePurchasesLines = DB::table('product_user')->where('user_id', $user->id)->count();
        $fakePurchasesQty   = (int) DB::table('product_user')->where('user_id', $user->id)->sum('quantity');

        // Admin stats
        $adminStats = null;
        if ($user->role === 'admin') {
            $adminStats = [
                'products' => Product::count(),
                'users'    => User::count(),
                'wishlist' => $this->getWishlistCountGlobal(),
            ];
        }

        return view('dashboard', [
            'wishlistCount'      => $wishlistCount,
            'fakePurchasesLines' => $fakePurchasesLines,
            'fakePurchasesQty'   => $fakePurchasesQty,
            'adminStats'         => $adminStats,
        ]);
    }

    private function getWishlistCountForUser(int $userId): int
    {
        $tablesToTry = [
            ['table' => 'wishlists',        'user_col' => 'user_id'],
            ['table' => 'product_wishlist', 'user_col' => 'user_id'],
            ['table' => 'wishlist_product', 'user_col' => 'user_id'],
            ['table' => 'wishlist_user',    'user_col' => 'user_id'],
        ];

        foreach ($tablesToTry as $t) {
            if (Schema::hasTable($t['table'])) {
                return (int) DB::table($t['table'])->where($t['user_col'], $userId)->count();
            }
        }

        return 0;
    }

    private function getWishlistCountGlobal(): int
    {
        $tablesToTry = ['wishlists', 'product_wishlist', 'wishlist_product', 'wishlist_user'];

        foreach ($tablesToTry as $table) {
            if (Schema::hasTable($table)) {
                return (int) DB::table($table)->count();
            }
        }

        return 0;
    }
}


