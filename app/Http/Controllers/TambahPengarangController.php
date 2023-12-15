<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pengarang;

class TambahPengarangController extends Controller
{
    public function index()
    {
        return view('admin.tambah_pengarang');
    }

    public function actionTambahPengarang(Request $request)
    {
        $data = $request->all();

        $validate = validator::make($data, [
            'nama' => 'required|max:60',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        Pengarang::create($data);

        return redirect('admin/tambah_buku')->with('success', 'Data pengarang berhasil ditambahkan.');
    }
}
