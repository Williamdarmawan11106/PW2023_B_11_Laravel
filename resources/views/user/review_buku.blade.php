@extends('user/index_user')
@section('content')

<main>
    <div class="container">
        <div class="row"></div>
        <div class="card px-4">
            <div class="card-body">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/user')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Review Buku</li>
                    </ol>
                </nav>
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        <img class="" alt="avatar1" src="{{$review['book_cover']}}" style="width: 160px;" />
                    </div>
                    <div class="col-auto col-sm-6">
                        <h4>{{$review['judul_buku']}}</h4>
                        <p>
                            {{$review['pengarang']}}<br>
                            {{$review['penerbit']}}
                        </p>
                    </div>
                </div>
                <hr>
                <h5>Review</h5>

                <form action="{{url('/user')}}">
                    <div class="form-group">
                        <div class="row mt-4">
                            <label for="comment">Komentar</label>
                            <textarea class="form-control" name="comment" id="comment" cols="5" rows="5" style="resize: none;">{{$review['comment']}}</textarea>
                        </div>
                        <div class="row mt-4">
                            <label for="rating">Rating</label>
                            <select class="form-select">
                                <option selected>Rating Buku</option>
                                <option value="1">Sangat Buruk</i></option>
                                <option value="2">Buruk</i></option>
                                <option value="3">Sedang</i></option>
                                <option value="4">Baik</i></option>
                                <option value="5">Sangat Baik</i></option>
                            </select>
                        </div>
                        <div class=" row mt-4">
                            <div class="col-auto col-sm-6">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>

@endsection