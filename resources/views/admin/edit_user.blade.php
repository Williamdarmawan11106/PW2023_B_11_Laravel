@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="row"></div>
        <div class="card px-4">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/admin/user_management')}}">User Management</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                    </ol>
                </nav>
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        <img class="rounded-circle" alt="avatar1" src="{{$user['profile_picture']}}" style="width: 160px;" />
                    </div>
                    <div class="col-auto col-sm-6">
                        <h4>{{$user['nama']}}</h4>
                    </div>
                </div>
                <hr>
                <h5>Edit Data</h5>

                <form action="{{url('/user')}}">
                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{$user['nama']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{$user['email']}}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" value="{{$user['alamat']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="telp" class="form-label">No Telp</label>
                                <input type="tel" class="form-control" value="{{$user['no_telp']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="fotoProfil" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>

@endsection