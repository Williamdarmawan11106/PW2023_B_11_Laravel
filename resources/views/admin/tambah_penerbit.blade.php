@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <b>Oops!</b> {{$errors->first()}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/tambah_buku')}}">Tambah Buku</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Penerbit</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>TAMBAH PENERBIT</h3>
                </div>
                <form action="{{route('actionTambahPenerbit')}}" method="post">
                    <div class="row justify-content-start align-items-end">
                        @csrf
                        <div class="col-auto">
                            <label for="nama">Nama Penerbit</label>
                            <input type="text" name="nama" id="namaPenerbit" class="form-control" required>
                        </div>
                    </div>
                    <div class="row justify-content-end align-items-end mt-2">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection