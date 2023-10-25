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
                <form action="{{url('admin')}}">
                    <div class="row justify-content-start align-items-end">

                        <div class="col-auto">
                            <label for="nama">Judul Buku</label>
                            <input type="text" id="judul" class="form-control" required>
                        </div>
                        <div class="col-auto col-md-2">
                            <label for="pengarang">Pengarang</label>
                            <select class="form-select">
                                <option selected>Pengarang Buku</option>
                                <option value="1">John</option>
                                <option value="2">Doe</option>
                                <option value="3">El</option>
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="stok">Stok</label>
                            <input type="number" id="stok" class="form-control" required>
                        </div>
                        <div class="col-auto col-md-2">
                            <label for="penerbit">Penerbit</label>
                            <select class="form-select">
                                <option selected>Penerbit Buku</option>
                                <option value="1">Atma Jaya</option>
                                <option value="2">Uajy</option>
                                <option value="3">Jaya Library</option>
                            </select>
                        </div>
                    </div>

                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto col-lg-3">
                            <label for="bookCover">Cover Buku</label>
                            <input type="file" id="bookCover" class="form-control" required>
                        </div>
                        <div class="col-auto">
                            <label for="kategori">Kategori</label>
                            <select class="form-select">
                                <option selected>Kategori Buku</option>
                                <option value="1">Technology</option>
                                <option value="2">Sains</option>
                                <option value="3">Education</option>
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