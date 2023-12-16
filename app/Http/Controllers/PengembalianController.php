<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\User;
use Carbon\Carbon;

class PengembalianController extends Controller
{
    public function index()
    {
        $detailPeminjaman = DetailPeminjaman::where('id', null)->get()->load('anggota');
        $nama = null;
        $null = "Silahkan masukkan data peminjam terlebih dahulu";
        $user = User::all();

        // return $detailPeminjaman;
        return view('admin.pengembalian_buku', compact('detailPeminjaman', 'null', 'user', 'nama'));
    }

    public function actionCari(Request $request)
    {
        $data = $request->all();
        $detailPeminjaman = DetailPeminjaman::where('id', null);
        $nama = null;
        $null = "Silahkan masukkan data peminjam terlebih dahulu";
        $user = User::all();

        if ($data['id_user'] == null) {
            return view('admin.pengembalian_buku', compact('detailPeminjaman', 'null', 'user', 'nama'));
        }

        $detailPeminjaman = DetailPeminjaman::where('id_anggota', $data['id_user'])->where('id_pengembalian', null)->get()->load('anggota');
        if ($detailPeminjaman->isEmpty()) {
            $nama = User::find($data['id_user'])->nama;
            $null = "User belum meminjam buku";
            return view('admin.pengembalian_buku', compact('detailPeminjaman', 'null', 'user', 'nama'));
        }
        $nama = $detailPeminjaman[0]->anggota->nama;
        return view('admin.pengembalian_buku', compact('detailPeminjaman', 'null', 'user', 'nama'));
    }

    public function actionPerpanjang($id)
    {
        $peminjaman = Peminjaman::find($id);
        if ($peminjaman->tgl_kembali < date('Y-m-d')) {
            return redirect('admin/pengembalian')->withErrors('Tidak dapat memperpanjang peminjaman buku yang sudah lewat tanggal kembali.');
        }
        $peminjaman->tgl_kembali = date('Y-m-d', strtotime('+3 days', strtotime($peminjaman->tgl_kembali)));
        $peminjaman->save();

        return redirect('admin/pengembalian')->with('success', 'Berhasil memperpanjang peminjaman buku.');
    }

    public function actionKembaliBuku($id)
    {
        $detailPeminjaman = DetailPeminjaman::find($id)->load('peminjaman');
        if ($detailPeminjaman->tgl_kembali < date('Y-m-d')) {
            $denda = Carbon::parse($detailPeminjaman->peminjaman->tgl_kembali)->diffInDays(date('Y-m-d')) * 10000;
        } else {
            $denda = 0;
        }

        $pengembalian = Pengembalian::create([
            'id_petugas' => auth()->guard('admin')->user()->id,
            'tgl_pengembalian' => date('Y-m-d'),
            'denda' => $denda
        ]);
        $detailPeminjaman->id_pengembalian = $pengembalian->id;
        $detailPeminjaman->save();

        $buku = Buku::find($detailPeminjaman->id_buku);
        $buku->stok = $buku->stok + 1;
        $buku->save();

        $user = User::find($detailPeminjaman->id_anggota);
        $user->denda = $user->denda + $denda;
        $user->save();

        return redirect('admin/pengembalian')->with('success', 'Berhasil mengembalikan buku.');
    }
}
