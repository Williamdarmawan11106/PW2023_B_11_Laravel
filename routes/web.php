<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/login', function () {
    return view('admin/login_admin');
});


Route::get('/admin', function () {
    return view('admin/dashboard_admin', [
        'petugas' => [
            'nama' => 'Admin',
        ],
        'buku' =>     [
            [
                'no' => 1,
                'book_cover' => 'images/book_cover.jpeg',
                'judul' => 'Lorem',
                'pengarang' => 'Doe',
                'penerbit' => 'Atma Jaya'
            ],
            [
                'no' => 2,
                'book_cover' => '../images/book_cover.jpeg',
                'judul' => 'Ipsum',
                'pengarang' => 'Joe',
                'penerbit' => 'UAJY Lib'
            ]
        ]
    ]);
});

Route::get('/admin/tambah_peminjaman', function () {
    return view('admin/tambah_peminjaman', [
        'buku' =>     [
            [
                'no' => 1,
                'judul' => 'Lorem',
                'pengarang' => 'Doe',
                'penerbit' => 'Atma Jaya',
                'jumlah' => 10
            ],
            [
                'no' => 2,
                'judul' => 'Ipsum',
                'pengarang' => 'Joe',
                'penerbit' => 'UAJY Lib',
                'jumlah' => 3
            ]
        ]
    ]);
});

Route::get('/admin/pengembalian', function () {
    return view('admin/pengembalian_buku', [
        'buku' =>     [
            [
                'no' => 1,
                'judul' => 'Lorem',
                'jadwalKembali' => '20/10/2023',
                'denda' => 'Rp. 10.000'
            ],
            [
                'no' => 2,
                'judul' => 'Ipsum',
                'jadwalKembali' => '18/10/2023',
                'denda' => 'Rp. 20.000'
            ]
        ]
    ]);
});

Route::get('/admin/tambah_buku', function () {
    return view('admin/tambah_buku');
});

Route::get('/admin/tambah_buku/tambah_pengarang', function () {
    return view('admin/tambah_pengarang');
});

Route::get('/admin/tambah_buku/tambah_penerbit', function () {
    return view('admin/tambah_penerbit');
});

Route::get('/admin/tambah_buku/tambah_kategori', function () {
    return view('admin/tambah_kategori');
});

Route::get('/admin/edit_buku', function () {
    return view('admin/edit_buku');
});
