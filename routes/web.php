<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEditUserController;
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
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\TambahPeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\ReviewBukuController;

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
Route::get('/review/{id}', [ReviewBukuController::class, 'index']);

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
    Route::get('/admin/user_management', [UserManagementController::class, 'index']);
    Route::get('/admin/user_management/edit_user/{id}', [AdminEditUserController::class, 'index']);
    Route::post('actionAdminUpdateProfile/{id}', [AdminEditUserController::class, 'actionUpdateProfile'])->name('actionAdminUpdateProfile');
    Route::get('actionAdminDeleteUser/{id}', [UserManagementController::class, 'actionDeleteUser'])->name('actionAdminDeleteUser');
    Route::get('/admin/tambah_peminjaman', [TambahPeminjamanController::class, 'index']);
    Route::post('actionTambahPeminjaman', [TambahPeminjamanController::class, 'actionTambahPeminjaman'])->name('actionTambahPeminjaman');
    Route::get('/admin/pengembalian', [PengembalianController::class, 'index']);
    Route::get('actionPerpanjang/{id}', [PengembalianController::class, 'actionPerpanjang'])->name('actionPerpanjang');
    Route::get('actionKembaliBuku/{id}', [PengembalianController::class, 'actionKembaliBuku'])->name('actionKembaliBuku');
    Route::post('actionCari', [PengembalianController::class, 'actionCari'])->name('actionCari');
});
