@extends('index')
@section('content')
<main>
    <div class="container mt-4">
        <div class="card p-3">
            <div class="card-body">
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        <img src="http://127.0.0.1:8000/storage/{{$buku['cover_buku']}}" class="card-img-top" alt="..." style="height: 200px; aspect-ratio:1/1.5; object-fit: cover;" />
                    </div>
                    <div class="col-auto col-sm-6">
                        <div class="row">
                            <div class="col">
                                <h5>{{$buku['judul']}}</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>{{$buku['pengarang']['nama']}}</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h6>{{$buku['penerbit']['nama']}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-4">
                <h3>Review</h3>
                <div class=" mt-4">
                    <div class="row">
                        @forelse ($review as $item)
                        <div class="col-sm-6 my-2 mx-8">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto col-sm-auto">
                                            <img class="rounded-circle" alt="avatar1" src="http://127.0.0.1:8000/storage/{{$item['anggota']['foto']}}" style="width: 130px; aspect-ratio:1/1" />
                                        </div>
                                        <div class="col mt-2">
                                            <div class="row">
                                                <div class="col">
                                                    <h4>{{$item['anggota']['nama']}}</h4>
                                                </div>
                                                <div class="col-auto">
                                                    @if ($item['rating'] == "Sangat Baik" || $item['rating'] == "Baik")
                                                    <span class="badge bg-success">{{$item['rating']}}</span>
                                                    @elseif ($item['rating'] == "Sedang")
                                                    <span class="badge bg-primary">{{$item['rating']}}</span>
                                                    @else
                                                    <span class="badge bg-danger">{{$item['rating']}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <p>
                                                        {{$item['komentar']}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        <div class="text-center">Belum ada review</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection