@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/tambah_buku')}}">Tambah Buku</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Pengarang</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>TAMBAH PENGARANG</h3>
                </div>
                <form action="{{url('admin/tambah_buku')}}">
                    <div class="row justify-content-start align-items-end">

                        <div class="col-auto">
                            <label for="nama">Nama Pengarang</label>
                            <input type="text" id="namaPengarang" class="form-control" required>
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