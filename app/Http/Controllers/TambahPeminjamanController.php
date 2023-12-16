<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use App\Models\DetailPeminjaman;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class TambahPeminjamanController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $users = User::all();
        return view('admin.tambah_peminjaman', compact('buku', 'users'));
    }

    public function actionTambahPeminjaman(Request $request)
    {
        $data = $request->all();
        $validate = validator::make($data, [
            'id_user' => 'required',
            'tgl_kembali' => 'required',
            'id_buku' => 'required',
        ]);
        // return $validate;

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $data['tgl_pinjam'] = Carbon::now()->format('Y-m-d');

        $buku = Buku::find($data['id_buku']);
        $user = User::find($data['id_user']);


        if (!$buku) {
            return back()->with('error', 'Data buku tidak ditemukan.');
        }

        if (!$user) {
            return back()->with('error', 'Data user tidak ditemukan.');
        }

        $buku->stok = $buku->stok - 1;
        $buku->save();

        $peminjamanValue = [
            'id_user' => $data['id_user'],
            'tgl_pinjam' => $data['tgl_pinjam'],
            'tgl_kembali' => $data['tgl_kembali'],
        ];

        $peminjaman = Peminjaman::create($peminjamanValue);

        $details = [
            'id_buku' => $data['id_buku'],
            'id_pengembalian' => null,
            'id_peminjaman' => $peminjaman->id,
            'id_petugas' => auth()->user()->id,
            'id_anggota' => $data['id_user'],
        ];

        $detailPeminjaman = DetailPeminjaman::create($details);
        return redirect('admin')->with('success', 'Data peminjaman berhasil ditambahkan.');
    }
}
