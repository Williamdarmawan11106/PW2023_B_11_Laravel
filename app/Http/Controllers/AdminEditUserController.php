<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class AdminEditUserController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        return view('admin.edit_user', compact('user'));
    }

    public function actionUpdateProfile(Request $request, $id)
    {
        $data = $request->all();
        $str = Str::random(100);

        $validate = validator::make($data, [
            'nama' => 'required|max:60',
            'email' => 'required|email:rfc,dns',
            'no_telp' => 'required|regex:/^08[0-9]{9,11}$/',
            'foto' => 'required|mimes:jpg,jpeg,png',
            'password' => 'required|min:8',
            'alamat' => 'required|max:255',
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate);
        }

        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'Data user tidak ditemukan.');
        }

        if ($user->foto) {
            Storage::disk('public')->delete($user->foto);
        }

        $imagePath = $request->file('foto')->store('profile', 'public');

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
            $user = User::find($id)->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'no_telp' => $data['no_telp'],
                'alamat' => $data['alamat'],
                'foto' => $imagePath,
                'password' => $data['password']
            ]);
        }
        return redirect('admin/user_management')->with('success', 'Update data diri berhasil.');
    }
}
