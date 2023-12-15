<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Storage;

class HapusBukuController extends Controller
{
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $coverPath = Buku::find($id)->getAttributes()['cover_buku'];
        if ($coverPath) {
            if (Storage::disk('public')->exists($coverPath)) {
                Storage::disk('public')->delete($coverPath);
            }
        }
        $buku->delete();

        return redirect('admin')->with('success', 'Data buku berhasil dihapus.');
    }
}
