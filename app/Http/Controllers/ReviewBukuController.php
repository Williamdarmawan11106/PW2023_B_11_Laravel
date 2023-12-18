<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Buku;
use Illuminate\Http\Request;

class ReviewBukuController extends Controller
{
    public function index($id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return redirect('/');
        }
        $buku = Buku::find($id)->load('kategori', 'pengarang', 'penerbit');
        $review = Review::where('id_buku', $id)->get()->load('buku', 'anggota');
        return view('review', compact('buku', 'review'));
    }
}
