<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kategori;

class TambahKategoriController extends Controller
{
    public function index()
    {
        return view('admin.tambah_kategori');
    }

    public function actionTambahKategori(Request $request)
    {
        $data = $request->all();

        $validate = validator::make($data, [
            'nama' => 'required|max:60',
            'warna' => 'required'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        Kategori::create($data);

        return redirect('admin/tambah_buku')->with('success', 'Data kategori berhasil ditambahkan.');
    }
}
