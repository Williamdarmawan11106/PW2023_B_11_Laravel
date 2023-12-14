<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Review;
use App\Models\DetailPeminjaman;
use Illuminate\Support\Facades\Validator;

class ReviewController extends Controller
{
    public function index($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return redirect('user')->withErrors('Buku tidak ditemukan.');
        }

        $detail = DetailPeminjaman::where('id_anggota', auth()->user()->id)->where('id_buku', $id)->whereNotNull('id_pengembalian')->first()->load('peminjaman', 'buku', 'pengembalian', 'anggota', 'petugas');

        if (!$detail) {
            return redirect('user')->withErrors('Harap Kembalikan Buku Terlebih Dahulu.');
        }

        $review = Review::where('id_anggota', auth()->user()->id)->where('id_buku', $id)->first();
        // return $review;
        return view('user.review_buku', compact('detail', 'review'));
    }

    public function actionReview(Request $request)
    {
        $data = $request->all();

        $validate = validator::make($data, [
            'id_buku' => 'required',
            'rating' => 'required',
            'komentar' => 'required|max:255',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $data['id_anggota'] = auth()->user()->id;

        $review = Review::create($data);

        return redirect('user')->with('success', 'Review berhasil ditambahkan.');
    }
}
