<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // 1) Sélectionne tous les produits
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function filteredProducts()
    {
        // 2) Sélectionner tous les produits ayant un prix entre 50 et 200
        $products = Product::whereBetween('prix', [50, 200])
                            ->orderBy('name')
                            ->get();
        return view('products.filtered', compact('products'));
    }

    public function topTen()
    {
        // 3) Sélectionner les 10 premiers produits
        $products = Product::take(10)->get();
        return view('products.top_ten', compact('products'));
    }

    public function productsWithCategory()
    {
        // 4) Sélectionner tous les produits ayant Category_id = 3
        $products = Product::where('category_id', 3)->get();
        return view('products.with_category', compact('products'));
    }

    public function countProducts()
    {

        $count = Product::count();
        return view('products.count', compact('count'));
    }
}