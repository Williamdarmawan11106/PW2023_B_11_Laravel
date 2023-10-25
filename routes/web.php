<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'buku' => [
            [
                'no' => 1,
                'judul' => 'Lorem',
                'bookCover' => 'images/book_cover.jpeg',
                'pengarang' => 'Doe',
                'kategori' => 'Technology'
            ],
            [
                'no' => 2,
                'judul' => 'Ipsum',
                'bookCover' => 'images/book_cover.jpeg',
                'pengarang' => 'Joe',
                'kategori' => 'Sains'
            ],
            [
                'no' => 1,
                'judul' => 'Lorem',
                'bookCover' => 'images/book_cover.jpeg',
                'pengarang' => 'Doe',
                'kategori' => 'Technology'
            ],
            [
                'no' => 3,
                'judul' => 'Ipsum',
                'bookCover' => 'images/book_cover.jpeg',
                'pengarang' => 'Joe',
                'kategori' => 'Sains'
            ],
            [
                'no' => 4,
                'judul' => 'Lorem',
                'bookCover' => 'images/book_cover.jpeg',
                'pengarang' => 'Doe',
                'kategori' => 'Technology'
            ],
            [
                'no' => 5,
                'judul' => 'Ipsum',
                'bookCover' => 'images/book_cover.jpeg',
                'pengarang' => 'Joe',
                'kategori' => 'Sains'
            ],
        ]
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('admin/login', function () {
    return view('admin/login_admin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/user', function () {
    return view('user/dashboard_user', [
        'user' => [
            'nama' => 'User',
            'tagihan' => 50000,
        ],
        'buku_dipinjam' => [
            [
                'no' => 1,
                'judul' => 'Kamus',
                'tgl_pinjam' => '18/10/2023',
                'sisa_durasi' => '2'
            ],
            [
                'no' => 2,
                'judul' => 'Lorem Ipsum',
                'tgl_pinjam' => '15/10/2023',
                'sisa_durasi' => '1'
            ]
        ],
        'riwayat_pinjam' => [
            [
                'no' => 1,
                'judul' => 'Lorem',
                'pengarang' => 'Doe',
                'penerbit' => 'Atma Jaya',
                'tgl_pinjam' => '18/10/2023',
                'tgl_kembali' => '20/10/2023',
                'denda' => 'Rp. 10.000'
            ],
            [
                'no' => 2,
                'judul' => 'Ipsum',
                'pengarang' => 'Joe',
                'penerbit' => 'UAJY Lib',
                'tgl_pinjam' => '15/10/2021',
                'tgl_kembali' => '20/10/2023',
                'denda' => 'Rp. 20.000'
            ]
        ]
    ]);
});

Route::get('/user/bayar_tagihan', function () {
    return view('user/bayar_tagihan');
});

Route::get('/user/profile', function () {
    return view('user/profile_user', [
        'user' => [
            'nama' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'alamat' => 'Jl. Lorem Ipsum',
            'no_telp' => '08123456789',
            'profile_picture' => '../images/person.jpg'
        ]
    ]);
});

Route::get('/user/review_buku', function () {
    return view('user/review_buku', [
        'review' => [
            'judul_buku' => 'Lorem',
            'book_cover' => '../images/book_cover.jpeg',
            'pengarang' => 'Joe',
            'penerbit' => 'UAJY Lib',
            'comment' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis fugiat sunt molestias cum. Culpa mollitia nulla reiciendis labore aliquam rem nam odit recusandae aliquid modi! Quasi voluptates accusamus ut.',
            'rating' => '2'
        ]
    ]);
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

Route::get('/admin/user_management', function () {
    return view('admin/user_management', [
        'user' => [
            [
                'id' => 1,
                'nama' => 'John',
                'alamat' => 'Babarsari',
                'no_tlp' => '0812345678',
                'foto' => '../images/person.jpg',
                'email' => 'john@gmail.com',
                'password' => '1234',
            ],
            [
                'id' => 2,
                'nama' => 'John',
                'alamat' => 'Babarsari',
                'no_tlp' => '0812345678',
                'foto' => '../images/person.jpg',
                'email' => 'john@gmail.com',
                'password' => '1234',
            ]
        ]
    ]);
});

Route::get('/admin/edit_user', function () {
    return view('admin/edit_user', [
        'user' => [
            'nama' => 'John',
            'email' => 'john@gmail.com',
            'alamat' => 'Jl. Lorem Ipsum',
            'no_telp' => '08123456789',
            'profile_picture' => '../images/person.jpg'
        ]
    ]);
});
