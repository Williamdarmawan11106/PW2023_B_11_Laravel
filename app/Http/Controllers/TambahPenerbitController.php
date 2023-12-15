<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Penerbit;

class TambahPenerbitController extends Controller
{
    public function index()
    {
        return view('admin.tambah_penerbit');
    }

    public function actionTambahPenerbit(Request $request)
    {
        $data = $request->all();

        $validate = validator::make($data, [
            'nama' => 'required|max:60',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        Penerbit::create($data);

        return redirect('admin/tambah_buku')->with('success', 'Data penerbit berhasil ditambahkan.');
    }
}
