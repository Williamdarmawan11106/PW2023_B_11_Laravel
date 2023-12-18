@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Buku</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>EDIT BUKU</h3>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <b>Oops!</b> {{$errors->first()}}
                </div>
                @endif
                <form action="{{route('actionEditBuku', $buku['id'])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-start align-items-end">

                        <div class="col-auto">
                            <label for="nama">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required value="{{$buku['judul']}}">
                        </div>
                        <div class="col-auto col-md-2">
                            <label for="pengarang">Pengarang</label>
                            <select class="form-select" name="id_pengarang">
                                <option selected hidden value="{{$buku['pengarang']['id']}}">{{$buku['pengarang']['nama'] ?? "Pengarang Buku"}}</option>
                                @foreach ($pengarang as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" class="form-control" required value="{{$buku['stok']}}">
                        </div>
                        <div class="col-auto col-md-2">
                            <label for="penerbit">Penerbit</label>
                            <select class="form-select" name="id_penerbit">
                                <option selected hidden value="{{$buku['penerbit']['id']}}">{{$buku['penerbit']['nama'] ?? "Penerbit Buku"}}</option>
                                @foreach ($penerbit as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-3">
                            <label for="bookCover">Cover Buku</label>
                            <input type="file" name="cover_buku" class="form-control" accept="image/*" required>
                        </div>
                        <div class="col-auto">
                            <label for="kategori">Kategori</label>
                            <select class="form-select" name="id_kategori">
                                <option selected hidden value="{{$buku['kategori']['id']}}">{{$buku['kategori']['nama'] ?? "Kategori Buku"}}</option>
                                @foreach ($kategori as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
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