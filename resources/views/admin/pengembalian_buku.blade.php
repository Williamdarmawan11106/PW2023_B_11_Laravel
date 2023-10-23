@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengembalian</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>PENGEMBALIAN BUKU</h3>
                </div>
                <form action="#">
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="nama">Nama peminjam</label>
                            <input type="text" id="nama" class="form-control" required>
                        </div>
                        <div class="col-auto mt-2 mt-md-0">
                            <button type="submit" class="btn btn-success w-100">Cari</button>
                        </div>
                    </div>
                </form>



                <!-- TABLE DAFTAR BUKU DIPINJAM -->
                <hr>
                <h4 class="mt-4">Daftar Buku Dipinjam</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Jadwal Pengembalian</th>
                                <th scope="col">Denda</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @forelse ($buku as $item)
                        <tbody>
                            <tr>
                                <th scope="row">{{$item['no']}}</th>
                                <td>{{$item['judul']}}</td>
                                <td>{{$item['jadwalKembali']}}</td>
                                <td>{{$item['denda']}}</td>
                                <td><a href="#">Perpanjang</a> | <a href="#">Dikembalikan</a></td>
                            </tr>
                        </tbody>
                        @empty
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada buku yang dipinjam</td>
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