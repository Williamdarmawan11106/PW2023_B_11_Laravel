<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TambahBukuController extends Controller
{
    public function index()
    {
        $pengarang = Pengarang::all();
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('admin.tambah_buku', compact('pengarang', 'penerbit', 'kategori'));
    }

    public function actionTambahBuku(Request $request)
    {
        $data = $request->all();

        $validate = validator::make($data, [
            'judul' => 'required|max:60',
            'id_pengarang' => 'required',
            'id_kategori' => 'required',
            'id_penerbit' => 'required',
            'stok' => 'required|numeric',
            'cover_buku' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $coverBuku = $request->file('cover_buku');
        $coverBukuName = time() . '_' . $coverBuku->getClientOriginalName();
        $coverBuku->move(public_path('storage/buku'), $coverBukuName);

        $data['cover_buku'] = 'buku/' . $coverBukuName;

        Buku::create($data);

        return redirect('admin')->with('success', 'Data buku berhasil ditambahkan.');
    }
}
