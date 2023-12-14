@extends('user/index_user')
@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-md-5">
                <div class="card">
                    <div class="card-body" style="padding: 10px 30px">
                        <div class="card-title text-center mb-4">
                            <h3>Bayar Tagihan</h3>
                        </div>
                        <form action="{{url('actionBayar')}}" id="payment" method="post">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="metode" id="bank_transfer" autocomplete="off" value="Bank Transfer">
                                    <label class="btn btn-outline-success w-100" for="bank_transfer">Bank Transfer</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="metode" id="qris" autocomplete="off" value="QRIS">
                                    <label class="btn btn-outline-success w-100" for="qris">QRIS</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="metode" id="debit-credit" autocomplete="off" value="Debit/Credit Card">
                                    <label class="btn btn-outline-success w-100" for="debit-credit">Debit/Credit Card</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="metode" id="dana" autocomplete="off" value="Dana">
                                    <label class="btn btn-outline-success w-100" for="dana">Dana</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="metode" id="ovo" autocomplete="off" value="OVO">
                                    <label class="btn btn-outline-success w-100" for="ovo">OVO</label>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <hr class="hr">
                                <div class="col-auto">
                                    <h5>Rp. {{ number_format(auth()->user()->denda ?? 0) }}</h5>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    @if (auth()->user()->denda > 0)
                                    <button type="submit" class="btn w-100" style="background-color: #87aba1; color: #fff">
                                        Bayar
                                    </button>
                                    @else
                                    <button type="submit" class="btn w-100" style="background-color: #87aba1; color: #fff" disabled>
                                        Bayar
                                    </button>
                                    @endif
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

@endsection