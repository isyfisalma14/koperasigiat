<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // Dummy data to fix undefined variable error in view
    $categories = [
        (object)['id' => 1, 'name' => 'Makanan'],
        (object)['id' => 2, 'name' => 'Minuman'],
        (object)['id' => 3, 'name' => 'Cemilan'],
    ];

    $products = [
        (object)[
            'id' => 1,
            'name' => 'Nasi Goreng',
            'thumbnail' => 'https://via.placeholder.com/150?text=Nasi+Goreng',
            'price' => 15000,
            'category' => (object)['name' => 'Makanan']
        ],
        (object)[
            'id' => 2,
            'name' => 'Es Teh Manis',
            'thumbnail' => 'https://via.placeholder.com/150?text=Es+Teh',
            'price' => 5000,
            'category' => (object)['name' => 'Minuman']
        ],
        (object)[
            'id' => 3,
            'name' => 'Keripik Singkong',
            'thumbnail' => 'https://via.placeholder.com/150?text=Keripik',
            'price' => 3000,
            'category' => (object)['name' => 'Cemilan']
        ],
    ];

    return view('Dashboard', compact('categories', 'products'));
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/detailproduk', function () {
    return view('detailproduk');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/statuspesanan', function () {
    return view('statuspesanan');
});

Route::get('/riwayatpesanan', function () {
    return view('riwayatpesanan');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/daftarmenu', function () {
    return view('daftarmenu');
});
