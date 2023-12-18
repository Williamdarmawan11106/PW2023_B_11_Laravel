<?php

namespace App\Http\Controllers;

use App\Models\DetailPeminjaman;
use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Tagihan;

class UserDashboardController extends Controller
{
    public function index()
    {
        $peminjaman = DetailPeminjaman::where('id_anggota', auth()->user()->id)->whereNull('id_pengembalian')->get()->load('peminjaman', 'buku', 'pengembalian', 'anggota', 'petugas');
        $riwayatPeminjaman = DetailPeminjaman::where('id_anggota', auth()->user()->id)->whereNotNull('id_pengembalian')->get()->load('peminjaman', 'buku', 'pengembalian', 'anggota', 'petugas');
        // return $peminjaman;
        return view('user.dashboard_user', compact('peminjaman', 'riwayatPeminjaman'));
    }
}
