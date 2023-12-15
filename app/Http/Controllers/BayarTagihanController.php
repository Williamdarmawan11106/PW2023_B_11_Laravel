<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;

class BayarTagihanController extends Controller
{
    public function index()
    {
        return view('user.bayar_tagihan');
    }

    public function actionBayar(Request $request)
    {
        $data = $request->all();
        $transaksi = Transaksi::create([
            'id_anggota' => auth()->user()->id,
            'metode' => $data['metode'],
            'status' => 'Lunas'
        ]);
        $user = User::find(auth()->user()->id)->update([
            'denda' => 0
        ]);
        return redirect('user')->with('success', 'Pembayaran berhasil dilakukan.');
    }
}
