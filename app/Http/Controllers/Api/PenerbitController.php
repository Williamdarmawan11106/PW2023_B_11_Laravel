<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenerbitController extends Controller
{
    public function index()
    {
        $penerbit = Penerbit::all();

        return response([
            'message' => 'All Penerbit Retrieved',
            'data' => $penerbit
        ], 200);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|unique:penerbit'
        ]);

        if ($validate->fails()) {
            return response(['message' => $validate->errors()], 400);
        }

        $penerbit = Penerbit::create($request->all());

        return response([
            'message' => 'Penerbit Added',
            'data' => $penerbit
        ], 200);
    }
}
