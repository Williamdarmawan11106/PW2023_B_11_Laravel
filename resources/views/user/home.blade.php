@extends('index')
@section('content')

<div class="content">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-center my-auto p-5 align-items-center">

            <div class="flex-shrink-0">
                <img src="{{'images/3d_books.png'}}" alt="" style="width: 200px; margin-left: 25px;">
            </div>
            <div class="flex-grow-1 ms-3">
                <h1 class="mt-3">Selamat Datang di Perpustakaan</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur alias, fugiat suscipit ipsum quis aut adipisci quaerat. Odio odit sunt nisi! Voluptatem voluptates corrupti voluptas, aperiam ab alias culpa omnis.</p>
            </div>

        </div>
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>Collection of Books</h4>
                </div>
                <div class="row">
                    @forelse ($buku as $item)
                    <div class="col-sm-3 mt-4">
                        <div class="card h-100">
                            <img src="{{$item['bookCover']}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title">{{$item['judul']}}</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">{{$item['pengarang']}}</h6>
                                    </div>
                                    <div class="col-auto text-end">
                                        @if ($item['kategori'] == 'Technology')
                                        <span class="badge bg-primary">{{$item['kategori']}}</span>
                                        @elseif ($item['kategori'] == 'Sains')
                                        <span class="badge bg-success">{{$item['kategori']}}</span>
                                        @else
                                        <span class="badge bg-secondary">{{$item['kategori']}}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="text-center">Tidak ada data</div>
                    @endforelse

                </div>


            </div>
        </div>

    </div>
</div>

@endsection