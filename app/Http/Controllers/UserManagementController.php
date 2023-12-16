<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return $users;
        return view('admin.user_management', compact('users'));
    }

    public function actionDeleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'Data user tidak ditemukan.');
        }

        $user->delete();

        return back()->with('success', 'Data user berhasil dihapus.');
    }
}
