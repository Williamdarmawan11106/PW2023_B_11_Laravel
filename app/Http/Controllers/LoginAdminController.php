<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('admin.login_admin');
    }

    public function loginAdminAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $validate = Validator::make($credentials, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors());
            return back();
        }

        if (auth()->guard('admin')->attempt($credentials)) {
            return redirect('admin');
        }

        return redirect()->back()->with('error', 'email atau password petugas salah');
    }
}
