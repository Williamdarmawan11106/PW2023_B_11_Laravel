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
                @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
                @endif
                <div class="row mt-4 align-items-center justify-content-sm-start justify-content-center">
                    <div class="col-auto col-sm-auto">
                        <img class="" alt="avatar1" src="{{asset('storage/' . $detail['buku']['cover_buku'])}}" style="width: 160px;" />
                    </div>
                    <div class="col-auto col-sm-6">
                        <h4>{{$detail['buku']['judul']}}</h4>
                        <p>
                            {{$detail['buku']['pengarang']['nama']}}<br>
                            {{$detail['buku']['penerbit']['nama']}}
                        </p>
                    </div>
                </div>
                <hr>
                <h5>Review</h5>
                <form action="{{route('actionReview')}}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        @csrf
                        <input type="hidden" name="id_buku" value="{{$detail['buku']['id']}}">
                        <div class="row mt-4">
                            <label for="comment">Komentar</label>
                            <textarea class="form-control" name="komentar" id="comment" cols="5" rows="5" style="resize: none;" required>{{$review['komentar'] ?? ''}}</textarea>
                        </div>
                        <div class="row mt-4">
                            <label for="rating">Rating</label>
                            <select class="form-select" name="rating" required>
                                <option value="{{$review['rating'] ?? ''}}" selected hidden>{{$review['rating'] ?? 'Rating Buku'}}</option>
                                <option value="Sangat Baik">Sangat Baik</i></option>
                                <option value="Baik">Baik</i></option>
                                <option value="Sedang">Sedang</i></option>
                                <option value="Buruk">Buruk</i></option>
                                <option value="Sangat Buruk">Sangat Buruk</i></option>
                            </select>
                        </div>
                        <div class=" row mt-4">
                            <div class="col-auto col-sm-6">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</main>

@endsection