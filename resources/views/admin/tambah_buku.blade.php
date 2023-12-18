@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <b>Oops!</b> {{$errors->first()}}
        </div>
        @endif
        @if (Session::has('success'))
        <div class="alert alert-success">
            <b>Success!</b> {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>TAMBAH BUKU</h3>
                </div>
                <form action="{{route('actionTambahBuku')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-start align-items-end">

                        <div class="col-auto col-lg-3">
                            <label for="nama">Judul Buku</label>
                            <input type="text" id="judul" class="form-control" name="judul" required>
                        </div>
                        <div class="col-auto col-lg-2">
                            <label for="pengarang">Pengarang</label>
                            <select class="form-select" name="id_pengarang">
                                <option selected hidden>Pengarang Buku</option>
                                @foreach ($pengarang as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/admin/tambah_buku/tambah_pengarang')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-3">
                            <label for="stok">Stok</label>
                            <input type="number" id="stok" name="stok" class="form-control" required>
                        </div>
                        <div class="col-auto col-lg-2">
                            <label for="penerbit">Penerbit</label>
                            <select class="form-select" name="id_penerbit">
                                <option selected hidden>Penerbit Buku</option>
                                @foreach ($penerbit as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/admin/tambah_buku/tambah_penerbit')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        </div>

                    </div>
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-3">
                            <label for="bookCover">Cover Buku</label>
                            <input type="file" id="bookCover" class="form-control" name="cover_buku" required accept="image/*">
                        </div>
                        <div class="col-auto col-lg-2">
                            <label for="kategori">Kategori</label>
                            <select class="form-select" name="id_kategori">
                                <option selected hidden>Kategori Buku</option>
                                @foreach ($kategori as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <a href="{{url('/admin/tambah_buku/tambah_kategori')}}" type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                        </div>
                    </div>

                    <div class="row justify-contentstart justify-content-lg-end align-items-end">
                        <div class="col-auto mt-2 mt-lg-0">
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>

@endsection