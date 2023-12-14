<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $loginData = $request->all();

        $validate = Validator::make($loginData, [
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            Session::flash('error', $validate->errors());
            return back();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->active) {
                return redirect('user');
            } else {
                Auth::logout();
                Session::flash('error', 'Akun anda belum diverifikasi, silahkan cek email anda.');
                return back();
            }
        }

        Session::flash('error', 'Email atau password salah.');
        return back();
    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
