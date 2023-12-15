<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/buku', [\App\Http\Controllers\Api\BukuController::class, 'index']);
Route::get('/penerbit', [\App\Http\Controllers\Api\PenerbitController::class, 'index']);
Route::post('/penerbit', [\App\Http\Controllers\Api\PenerbitController::class, 'store']);

Route::get('/kategori', [\App\Http\Controllers\Api\KategoriController::class, 'index']);
Route::post('/kategori', [\App\Http\Controllers\Api\KategoriController::class, 'store']);

Route::get('/pengarang', [\App\Http\Controllers\Api\PengarangController::class, 'index']);
Route::post('/pengarang', [\App\Http\Controllers\Api\PengarangController::class, 'store']);

Route::post('/buku', [\App\Http\Controllers\Api\BukuController::class, 'store']);
Route::get('/buku/{id}', [\App\Http\Controllers\Api\BukuController::class, 'search']);
Route::post('/buku/{id}', [\App\Http\Controllers\Api\BukuController::class, 'update']);
Route::delete('/buku/{id}', [\App\Http\Controllers\Api\BukuController::class, 'destroy']);

Route::post('/register-petugas', [\App\Http\Controllers\Api\RegisterAdminController::class, 'store']);
