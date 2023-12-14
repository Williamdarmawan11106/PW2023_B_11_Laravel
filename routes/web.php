<?php

use App\Http\Controllers\BayarTagihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ReviewController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('loginAction', [LoginController::class, 'loginAction'])->name('loginAction');

Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');

Route::get('admin/login', function () {
    return view('admin/login_admin');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('registerAction', [RegisterController::class, 'registerAction'])->name('registerAction');

Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify']);

Route::middleware(['auth'])->group(function () {
    Route::get('/user', [UserDashboardController::class, 'index']);
    Route::get('/user/bayar_tagihan', [BayarTagihanController::class, 'index']);
    Route::post('actionBayar', [BayarTagihanController::class, 'actionBayar'])->name('actionBayar');
    Route::get('/user/profile', [ProfileController::class, 'index']);
    Route::post('actionUpdateProfile', [ProfileController::class, 'actionUpdateProfile'])->name('actionUpdateProfile');
    Route::get('/user/review_buku/{id}', [ReviewController::class, 'index']);
    Route::post('actionReview', [ReviewController::class, 'actionReview'])->name('actionReview');
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
