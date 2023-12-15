<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function registerAction(Request $request)
    {
        $registrationData = $request->all();

        $validate = validator::make($registrationData, [
            'nama' => 'required|max:60',
            'email' => 'required|email:rfc,dns|unique:users',
            'no_telp' => 'required|regex:/^08[0-9]{9,11}$/',
            'foto' => 'required|mimes:jpg,jpeg,png',
            'password' => 'required|min:8',
            'alamat' => 'required|max:255',
        ]);

        // return $registrationData['foto'];
        if ($validate->fails()) {
            Session::flash('error', $validate->errors()->first());
            return back();
        }
        $registrationData['password'] = bcrypt($request->password);
        $str = Str::random(100);
        $registrationData['verify_key'] = $str;

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('profile', 'public');

            $registrationData['foto'] = $imagePath;
        }

        $details = [
            'nama' => $registrationData['nama'],
            'website' => 'Libraria',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];
        Mail::to($request->email)->send(new MailSend($details));
        $user = User::create($registrationData);

        return redirect('login');
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                ]);

            return "Verifikasi Berhasil. Akun anda sudah aktif";
        } else {
            return "Keys Tidak Valid.";
        }
    }
}
