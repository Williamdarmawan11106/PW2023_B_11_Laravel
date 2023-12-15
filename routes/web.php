<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BayarTagihanController;
use App\Http\Controllers\EditBukuController;
use App\Http\Controllers\HapusBukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\TambahBukuController;
use App\Http\Controllers\TambahKategoriController;
use App\Http\Controllers\TambahPengarangController;
use App\Http\Controllers\TambahPenerbitController;

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

Route::get('admin/login', [LoginAdminController::class, 'index']);
Route::post('admin/loginAdminAction', [LoginAdminController::class, 'loginAdminAction'])->name('loginAdminAction');

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

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin', [AdminDashboardController::class, 'index']);
    Route::get('/admin/edit_buku/{id}', [EditBukuController::class, 'index']);
    Route::post('actionEditBuku/{id}', [EditBukuController::class, 'actionEdit'])->name('actionEditBuku');
    Route::get('actionDeleteBuku/{id}', [HapusBukuController::class, 'destroy'])->name('actionDeleteBuku');
    Route::get('/admin/tambah_buku', [TambahBukuController::class, 'index']);
    Route::post('actionTambahBuku', [TambahBukuController::class, 'actionTambahBuku'])->name('actionTambahBuku');
    Route::get('/admin/tambah_buku/tambah_pengarang', [TambahPengarangController::class, 'index']);
    Route::post('actionTambahPengarang', [TambahPengarangController::class, 'actionTambahPengarang'])->name('actionTambahPengarang');
    Route::get('/admin/tambah_buku/tambah_penerbit', [TambahPenerbitController::class, 'index']);
    Route::post('actionTambahPenerbit', [TambahPenerbitController::class, 'actionTambahPenerbit'])->name('actionTambahPenerbit');
    Route::get('/admin/tambah_buku/tambah_kategori', [TambahKategoriController::class, 'index']);
    Route::post('actionTambahKategori', [TambahKategoriController::class, 'actionTambahKategori'])->name('actionTambahKategori');
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
