<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListProdukController;

// Route::get('/', function () {
// return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/index', function () {
    return view('index');
})->name('index');

// Route::get('/contactus', function () {
    // return view('contactus');
// })->name('contactus');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.us');

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/ultahkakavril', function () {
    return view('ultah');
});

Route::get('/hondacivic', function () {
    return view('detail_produk_civic');
});

Route::get('/dashboard-penjual', function () {
    return view('dashboard_penjual');
});

Route::get('/daftar-pesanan', function () {
    return view('daftar-pesanan');
});

Route::get('/konfirmasi', function () {
    return view('konfirmasi');
});

Route::get('/diproses', function () {
    return view('diproses');
});

Route::get('/dikirim', function () {
    return view('dikirim');
});

Route::get('/selesai', function () {
    return view('selesai');
});

Route::get('/penjual/profile', function () {
    return view('penjual/profile');
});

Route::get('/dashboard-penjual', function () {
    return view('dealer.dashboard', [
        'totalMobil' => 5, // Contoh dummy data
    ]);
});

Route::get('/daftar-pesanan', function () {
    return view('dealer.daftar-pesanan');
});

Route::get('/konfirmasi', function () {
    return view('dealer.konfirmasi');
});

Route::get('/diproses', function () {
    return view('dealer.diproses');
});

Route::get('/dikirim', function () {
    return view('dealer.dikirim');
});

Route::get('/selesai', function () {
    return view('dealer.selesai');
});

Route::prefix('dealer')->group(function () {
    Route::get('/mobil', function () {
        $cars = []; // kosongin dulu biar gak error
        return view('dealer.mobil', compact('cars'));
    })->name('dealer.mobil.index');

    Route::get('/mobil/create', function () {
        return view('dealer.mobil-create');
    })->name('dealer.mobil.create');

    Route::get('/mobil/{id}/edit', function ($id) {
        $car = null; // kosongin dulu biar view gak error
        return view('dealer.mobil-edit', compact('car'));
    })->name('dealer.mobil.edit');
});

Route::get('/dealer/profile', function () {
    return view('dealer.profile');
})->name('dealer.profile');


Route::get('/listproduk', [ListProdukController::class, 'index'] );






