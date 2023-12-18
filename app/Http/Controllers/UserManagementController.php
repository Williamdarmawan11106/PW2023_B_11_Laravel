<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.user_management', compact('users'));
    }

    public function actionDeleteUser($id)
    {
        $user = User::find($id);
        $foto = User::find($id)->getAttributes()['foto'];

        if (!$user) {
            return back()->with('error', 'Data user tidak ditemukan.');
        }

        if ($foto) {
            if (Storage::disk('public')->exists($foto)) {
                Storage::disk('public')->delete($foto);
            }
        }

        $user->delete();

        return back()->with('success', 'Data user berhasil dihapus.');
    }
}
