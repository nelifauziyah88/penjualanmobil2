<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::orderBy('id', 'desc')->limit(10)->get();
        return view('list_produk', compact('produk'));
    }
}
