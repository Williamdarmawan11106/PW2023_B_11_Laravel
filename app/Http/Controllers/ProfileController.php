<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('user.profile_user', compact('user'));
    }

    public function actionUpdateProfile(Request $request)
    {
        $data = $request->all();
        $str = Str::random(100);
        $id = auth()->user()->id;

        $validate = validator::make($data, [
            'nama' => 'required|max:60',
            'email' => 'required|email:rfc,dns',
            'no_telp' => 'required|regex:/^08[0-9]{9,11}$/',
            // 'foto' => 'required|mimes:jpg,jpeg,png',
            // 'password' => 'min:8',
            'alamat' => 'required|max:255',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'Data user tidak ditemukan.');
        }

        if ($request->file('foto') == null) {
            unset($data['foto']);
        } else {
            if ($user->foto) {
                Storage::disk('public')->delete($user->foto);
            }
            $imagePath = $request->file('foto')->store('profile', 'public');
            $data['foto'] = $imagePath;
        }

        if ($data['email'] != $user->email) {
            $validate = validator::make($data, [
                'email' => 'unique:users'
            ]);

            if ($validate->fails()) {
                return back()->withErrors($validate);
            }

            $details = [
                'nama' => $data['nama'],
                'website' => 'Libraria',
                'datetime' => date('Y-m-d H:i:s'),
                'url' => request()->getHttpHost() . '/register/verify/' . $str
            ];
            $data['active'] = null;
            Mail::to($request->email)->send(new MailSend($details));
            $user = User::find($id)->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'no_telp' => $data['no_telp'],
                'alamat' => $data['alamat'],
                'foto' => $imagePath,
                'password' => $data['password'],
                'verify_key' => $str,
                'active' => $data['active']
            ]);
        } else {
            if ($data['password'] == null) {
                unset($data['password']);
            }

            $user = User::find($id)->update($data);
        }

        return redirect('user')->with('success', 'Update data diri berhasil.');
    }
}
