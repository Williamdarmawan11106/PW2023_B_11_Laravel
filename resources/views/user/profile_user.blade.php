@extends('user/index_user')
@section('content')

<main>
    <div class="container">
        <div class="row"></div>
        <div class="card px-4">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/user')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        <img class="rounded-circle" alt="avatar1" src="{{'http://127.0.0.1:8000/storage/' . auth()->user()->foto}}" style="width: 160px; aspect-ratio:1/1;" />
                    </div>
                    <div class="col-auto col-sm-6">
                        <h4>{{$user['nama']}}</h4>
                    </div>
                </div>
                <hr>
                <h5>Edit Data</h5>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <b>Oops!</b> {{$errors->first()}}
                </div>
                @endif

                <form action="{{route('actionUpdateProfile')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$user['nama']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$user['email']}}">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{$user['alamat']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-auto col-sm-6">
                                <label for="telp" class="form-label">No Telp</label>
                                <input type="tel" name="no_telp" class="form-control" value="{{$user['no_telp']}}">
                            </div>
                            <div class="col-auto col-sm-6 mt-sm-0 mt-3">
                                <label for="fotoProfil" class="form-label">Foto Profil</label>
                                <input type="file" name="foto" class="form-control" accept="image/*">
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