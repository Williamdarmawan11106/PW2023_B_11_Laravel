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
                        <li class="breadcrumb-item active" aria-current="page">Tambah Peminjaman</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>TAMBAH PEMINJAMAN</h3>
                </div>
                <form action="{{route('actionTambahPeminjaman')}}" method="post">
                    @csrf
                    <div class="row justify-content-start align-items-center">
                        <div class="col-auto">
                            <label for="nama">Nama peminjam</label>
                            <br>
                            <select id="peminjam" name="id_user" class="form-control w-100" tabindex="-1" aria-hidden="true" required>
                                <option selected disabled hidden>Nama Peminjam</option>
                                @foreach ($users as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <label for="pengembalian">Pengembalian</label>
                            <input type="date" name="tgl_kembali" id="pengembalian" class="form-control" min="{{Carbon\Carbon::now()->format('Y-m-d')}}" max="{{Carbon\Carbon::now()->addDays(7)->format('Y-m-d')}}" required>
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="judulBuku">Judul Buku</label>
                            <br>
                            <select id="judulBuku" name="id_buku" class="form-control w-75" tabindex="-1" aria-hidden="true" required>
                                <option selected disabled hidden>Judul Buku</option>
                                @foreach ($buku as $item)
                                <option value="{{$item['id']}}">{{$item['judul']}}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="row mt-2 justify-content-start align-items-end">
                        <div class="col-auto mt-2 mt-md-0">
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </div>
                    </div>
                </form>



                <!-- TABLE BUKU SEDANG DIPINJAM -->
                <hr>
                <h4 class="mt-4">List Buku</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        @forelse ($buku as $item => $value)
                        <tbody>
                            <tr>
                                <th scope="row">{{$item+1}}</th>
                                <td>{{$value['judul']}}</td>
                                <td>{{$value['pengarang']['nama']}}</td>
                                <td>{{$value['penerbit']['nama']}}</td>
                                <td>{{$value['stok']}}</td>
                            </tr>
                        </tbody>
                        @empty
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada data</td>
                            </tr>
                        </tbody>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection