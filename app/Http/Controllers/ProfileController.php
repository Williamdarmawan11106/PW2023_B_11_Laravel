<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

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

        $user = User::find(auth()->user()->id);

        if ($user->foto) {
            Storage::disk('public')->delete($user->foto);
        }

        $imagePath = $request->file('foto')->store('profile', 'public');

        $user = User::find(auth()->user()->id)->update([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'no_telp' => $data['no_telp'],
            'alamat' => $data['alamat'],
            'foto' => $imagePath,
            'password' => $data['password'],
        ]);
        return redirect('user')->with('success', 'Update data diri berhasil.');
    }
}
