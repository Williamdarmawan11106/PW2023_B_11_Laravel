@extends('user/index_user')
@section('content')

<main>
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h3>Hi, {{auth()->user()->nama}}👋</h3>
                </div>
                <div class="row justify-content-center justify-content-md-start align-items-center">
                    <!-- CARD TAGIHAN SAAT INI -->
                    <div class="col-auto">
                        <div class="card mt-2 w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-subtitle">TAGIHAN SAAT INI</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <p class="card-subtitle text-center">Rp. {{ number_format(auth()->user()->denda ?? 0) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CARD BUKU SEDANG DIPINJAM -->
                    <div class="col-auto">
                        <div class="card mt-2 w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="card-subtitle">BUKU SEDANG DIPINJAM</h6>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col">
                                        <p class="card-subtitle text-center">{{count($peminjaman)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-auto">
                        <a href="{{url('/user/bayar_tagihan')}}" class="btn btn-primary mt-2 mt-md-0"><i class="fa-regular fa-credit-card"></i> Bayar Tagihan</a>
                    </div>
                </div>

                <!-- TABLE BUKU SEDANG DIPINJAM -->
                <h4 class="mt-4">Buku Sedang Dipinjam</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Sisa Durasi</th>
                            </tr>
                        </thead>
                        @forelse ($peminjaman as $item => $value)
                        <tbody>
                            <tr>
                                <th scope="row">{{$item+1}}</th>
                                <td>{{$value['buku']['judul']}}</td>
                                <td>{{$value['peminjaman']['tgl_pinjam']}}</td>
                                <td>{{ \Carbon\Carbon::parse($value['peminjaman']['tgl_pinjam'])->diffInDays($value['peminjaman']['tgl_kembali']) }} hari</td>
                            </tr>
                        </tbody>
                        @empty
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada buku yang sedang dipinjam</td>
                            </tr>
                        </tbody>
                        @endforelse
                    </table>
                </div>

                <!-- TABLE RIWAYAT PEMINJAMAN BUKU -->
                <h4 class="mt-4">Riwayat Peminjaman Buku</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @forelse ($riwayatPeminjaman as $item => $value)
                        <tbody>
                            <tr>
                                <th scope="row">{{$item+1}}</th>
                                <td>{{$value['buku']['judul']}}</td>
                                <td>{{$value['peminjaman']['tgl_pinjam']}}</td>
                                <td>{{$value['pengembalian']['tgl_pengembalian']}}</td>
                                <td><a href="{{url('user/review_buku').'/'.$value['buku']['id']}}">Review</a></td>
                            </tr>
                        </tbody>
                        @empty
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center">Tidak ada riwayat peminjaman</td>
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