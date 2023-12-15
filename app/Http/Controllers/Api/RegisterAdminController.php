<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Validator;

class RegisterAdminController extends Controller
{
    public function store(Request $request)
    {
        $registrationData = $request->all();

        $validate = validator::make($registrationData, [
            'nama' => 'required|max:60',
            'email' => 'required',
            'no_telp' => 'required|regex:/^08[0-9]{9,11}$/',
            'foto' => 'required|mimes:jpg,jpeg,png|max:2048',
            'password' => 'required',
            'alamat' => 'required|max:255',
        ]);
        if ($validate->fails()) {
            return response(['message' => $validate->errors()], 400);
        }

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('profile', 'public');

            $registrationData['foto'] = $imagePath;
        }

        $registrationData['password'] = bcrypt($request->password);
        $petugas = Petugas::create($registrationData);
        return response([
            'message' => 'Register Success',
            'petugas' => $petugas
        ], 200);
    }
}
