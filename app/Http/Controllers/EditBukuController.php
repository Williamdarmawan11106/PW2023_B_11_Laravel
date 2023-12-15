<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EditBukuController extends Controller
{
    public function index($id)
    {
        $buku = Buku::find($id)->load('kategori', 'penerbit', 'pengarang');
        $pengarang = Pengarang::all();
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('admin.edit_buku', compact('buku', 'pengarang', 'penerbit', 'kategori'));
    }

    public function actionEdit(Request $request, $id)
    {
        $data = $request->all();

        $oldCoverPath = Buku::find($id)->getAttributes()['cover_buku'];

        $validate = validator::make($data, [
            'judul' => 'required|max:60',
            'id_pengarang' => 'required',
            'id_kategori' => 'required',
            'id_penerbit' => 'required',
            'stok' => 'required|numeric',
            'cover_buku' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        if ($oldCoverPath) {
            if (Storage::disk('public')->exists($oldCoverPath)) {
                Storage::disk('public')->delete($oldCoverPath);
            }
        }

        $coverBuku = $request->file('cover_buku');
        $coverBukuName = time() . '_' . $coverBuku->getClientOriginalName();
        $coverBuku->move(public_path('storage/buku'), $coverBukuName);

        $data['cover_buku'] = 'buku/' . $coverBukuName;

        $buku = Buku::find($id)->update([
            'judul' => $data['judul'],
            'id_kategori' => $data['id_kategori'],
            'id_penerbit' => $data['id_penerbit'],
            'id_pengarang' => $data['id_pengarang'],
            'stok' => $data['stok'],
            'cover_buku' => $data['cover_buku'],
        ]);
        return redirect('admin')->with('success', 'Data buku berhasil diubah.');
    }
}
