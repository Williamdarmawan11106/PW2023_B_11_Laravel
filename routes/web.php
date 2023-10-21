<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('perpustakaan');
});

Route::get('/loginperpustakaan', function () {
    return view('loginperpustakaan');
});

Route::get('/registerperpustakaan', function () {
    return view('registerperpustakaan');
});

Route::get('/dashboardpeminjaman', function () {
    return view('dashboardpeminjaman');
});

Route::get('/dashboardpengembalian', function () {
    return view('dashboardpengembalian');
});

Route::get('/dashboardtambahbuku', function () {
    return view('dashboardtambahbuku');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/dashboardanggota', function () {
    return view('dashboardanggota');
});

Route::get('/profileanggota', function () {
    return view('profileanggota');
});

Route::get('/profileadmin', function () {
    return view('profileadmin');
});

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
});

Route::get('/tambahpenerbit', function () {
    return view('tambahpenerbit');
});

Route::get('/tambahpengarang', function () {
    return view('tambahpengarang');
});

Route::get('/tambahkategori', function () {
    return view('tambahkategori');
});

Route::get('/dashboardbayar', function () {
    return view('dashboardbayar');
});

Route::get('/qrispayment', function () {
    return view('qrispayment');
});

Route::get('/banktransfer', function () {
    return view('banktransfer');
});

Route::get('/minimarketpayment', function () {
    return view('minimarketpayment');
});

