<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class HomeController extends Controller
{
    public function index()
    {
        $buku = Buku::all()->load('pengarang', 'kategori', 'penerbit');
        // return $buku;
        return view('home', compact('buku'));
    }
}
