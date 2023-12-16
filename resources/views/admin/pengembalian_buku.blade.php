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
                        <li class="breadcrumb-item active" aria-current="page">Pengembalian</li>
                    </ol>
                </nav>
                <div class="card-title">
                    <h3>PENGEMBALIAN BUKU</h3>
                </div>
                <form action="{{url('actionCari')}}" method="post">
                    @csrf
                    <div class="row justify-content-start align-items-end">
                        <div class="col-auto">
                            <label for="nama">Nama peminjam</label>
                            <br>
                            <select id="user" name="id_user" class="form-control w-100" tabindex="-1" aria-hidden="true" required>
                                <option selected disabled hidden>Nama Peminjam</option>
                                @foreach ($user as $item)
                                <option value="{{$item['id']}}">{{$item['nama']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-start align-items-end mt-2">
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
                        @forelse ($detailPeminjaman as $item => $value)
                        <tbody>
                            <tr>

                                <th scope="row">{{$item+1}}</th>
                                <td>{{$value['buku']['judul']}}</td>
                                <td>{{$value['peminjaman']['tgl_kembali']}}</td>
                                <td>Rp. {{\Carbon\Carbon::parse($value['peminjaman']['tgl_kembali'])->gt(\Carbon\Carbon::now()) ? $denda = 0 : $denda = \Carbon\Carbon::parse($value['peminjaman']['tgl_kembali'])->diffInDays(\Carbon\Carbon::now()) * 10000}}</td>
                                <td><a href="{{url('actionPerpanjang', $value['peminjaman']['id'])}}">Perpanjang</a> | <a href="{{url('actionKembaliBuku', $value['peminjaman']['id'])}}">Dikembalikan</a></td>
                            </tr>
                        </tbody>
                        @empty
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-center">{{$null}}</td>
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