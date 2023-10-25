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
                        <form action="{{url('/user')}}" id="payment">
                            <div class="row justify-content-center">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="options-outlined" id="bank_transfer" autocomplete="off">
                                    <label class="btn btn-outline-success w-100" for="bank_transfer">Bank Transfer</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="options-outlined" id="qris" autocomplete="off">
                                    <label class="btn btn-outline-success w-100" for="qris">QRIS</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="options-outlined" id="debit-credit" autocomplete="off">
                                    <label class="btn btn-outline-success w-100" for="debit-credit">Debit/Credit Card</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="options-outlined" id="dana" autocomplete="off">
                                    <label class="btn btn-outline-success w-100" for="dana">Dana</label>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-2">
                                <div class="col-8">
                                    <input type="radio" class="btn-check" name="options-outlined" id="ovo" autocomplete="off">
                                    <label class="btn btn-outline-success w-100" for="ovo">OVO</label>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <hr class="hr">
                                <div class="col-auto">
                                    <h5>Rp. 50000</h5>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col">
                                    <button type="submit" class="btn w-100" style="background-color: #87aba1; color: #fff">
                                        Bayar
                                    </button>
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