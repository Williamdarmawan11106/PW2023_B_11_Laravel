<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use PHPUnit\Event\TestSuite\Loaded;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        // return auth()->user();
        return view('admin.dashboard_admin', compact('buku'));
    }
}
