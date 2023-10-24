@extends('admin/index_admin')
@section('content')

<main>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Hi, {{ $petugas['nama'] }} 👋</h3>
                </div>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <!-- Tambah Peminjaman -->
                    <div class="col-auto">
                        <a href="{{url('admin/tambah_peminjaman')}}" class="btn btn-primary mt-2 mt-md-0"><i class="fa-solid fa-book-open"></i> Tambah Peminjaman</a>
                    </div>
                    <!-- Pengembalian -->
                    <div class="col-auto">
                        <a href="{{url('admin/pengembalian')}}" class="btn btn-primary mt-2 mt-md-0"><i class="fa-solid fa-book"></i> Pengembalian</a>
                    </div>
                    <!-- Tambah Buku -->
                    <div class="col-auto">
                        <a href="{{url('admin/tambah_buku')}}" class="btn btn-success mt-2 mt-md-0"><i class="fa-solid fa-plus"></i> Tambah Buku</a>
                    </div>
                </div>

                <!-- TABLE BUKU SEDANG DIPINJAM -->
                <hr>
                <h4 class="mt-4">List Buku</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Cover Buku</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @forelse ($buku as $item)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $item['no'] }}</th>
                                <td><img src="{{ $item['book_cover'] }}" alt="book_cover" style="width: 100px"></td>
                                <td>{{ $item['judul'] }}</td>
                                <td>{{ $item['pengarang'] }}</td>
                                <td>{{ $item['penerbit'] }}</td>
                                <td><a href="{{url('admin/edit_buku')}}">Edit</a> | <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal">Hapus</a></td>
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

                <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Buku</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Apakah anda ingin menghapus buku ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <a href="{{url('admin')}}" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection