@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
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
                <form action="#">
                    <div class="row justify-content-start align-items-center">

                        <div class="col-auto">
                            <label for="nama">Nama peminjam</label>
                            <input type="text" id="nama" class="form-control" required>
                        </div>
                        <div class="col-auto">
                            <label for="pengembalian">Pengembalian</label>
                            <input type="date" id="pengembalian" class="form-control" required>
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="judulBuku">Judul Buku</label>
                            <input type="text" id="judulBuku" class="form-control" required>
                        </div>
                        <div class="col-auto mt-2 mt-md-0">
                            <button type="submit" class="btn btn-success w-100">Cari</button>
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
                        @forelse ($buku as $item)
                        <tbody>
                            <tr>
                                <th scope="row">{{$item['no']}}</th>
                                <td>{{$item['judul']}}</td>
                                <td>{{$item['pengarang']}}</td>
                                <td>{{$item['penerbit']}}</td>
                                <td>{{$item['jumlah']}}</td>
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
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <form action="{{url('/admin')}}">
                            <input type="hidden" name="nama" id="nama" value="*idPeminjam*">
                            <input type="hidden" name="pengembalian" id="pengembalian" value="*tglKembali*">
                            <input type="hidden" name="buku" id="buku" value="*idBuku*">
                            <button type="submit" class="btn btn-primary w-100">Simpan</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection