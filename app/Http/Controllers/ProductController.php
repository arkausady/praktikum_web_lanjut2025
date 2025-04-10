<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Kaos Laravel', 'price' => 150000],
        2 => ['name' => 'Stiker Coding', 'price' => 25000],
        3 => ['name' => 'Notebook Dev', 'price' => 50000],
    ];

    // Menampilkan daftar produk
    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
    // Menampilkan detail produk berdasarkan ID
    public function show($id)
    {
        $product = $this->products[$id] ?? null;

        if (!$product) {
            abort(404);
        }

        return view('products.show', compact('product', 'id'));
    }
}
