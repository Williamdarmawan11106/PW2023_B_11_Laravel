<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #987554;">
    <div class="container p-0 mb-4 mt-4 rounded-3 shadow bg-white">
        <nav class="d-md-flex p-4 rounded-3" style="background-color: #E5D3B3">
            <div>
                <h1 style="font-size:20px; font-weight:bold;"><img src="{{ asset('images/images.jpeg')}}" style="width: 25px; height: 25px;" class="rounded-3">
                    Perpustakaan UAJY
                </h1>
            </div>
            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-md-3" >
                        <a href="{{ url('loginperpustakaan') }}" class="text-decoration-none text-dark fw-bold">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
            <img src="{{ asset('images/images.jpeg')}}" class="card-img-left"/>
            <div class="card-body col mb-5">
                <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nemo dolore saepe. Maxime aut sapiente quo asperiores quis nemo, eum quae vel et, deserunt facilis harum illo, sunt recusandae similique ab obcaecati odit numquam tempora porro fugiat. In, dolorum cupiditate!
                </p>
            </div>
        </div>

        <h3 class="text-center fw-bold" style="font-size:40px; padding-top:50px;"  id="cookies">BOOK LIST</h3>

        <div class="row row-cols-md-3 row-cols-2 gx-5 p-5">
            <div class="col mb-5">
                <div class="card shadow">
                    <img src="{{ asset('images/images.jpeg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <p class="card-text fw-bold">
                            Buku Sejarah
                        </p>
                    </div>
                    <div class="d-none deskripsi">
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut nemo dolore saepe. Maxime aut sapiente quo asperiores quis nemo, eum quae vel et, deserunt facilis harum illo, sunt recusandae similique ab obcaecati odit numquam tempora porro fugiat. In, dolorum cupiditate!
                        </p>
                    </div>
                    <div class="card-footer d-md-flex">
                        <a class="btn btn-sm d-block btnDetail" style="background-color: #E5D3B3;">Detail</a>
                        <span class="ms-auto fw-bold d-block text-center harga" style="font-color:black">
                            Stok: 7
                        </span>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <img src="{{ asset('images/images.jpeg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <p class="card-text fw-bold">
                            Buku Ekonomi
                        </p>
                    </div>
                    <div class="card-footer d-md-flex">
                        <a class="btn btn-sm d-block btnDetail" style="background-color: #E5D3B3;">Detail</a>
                        <span class="ms-auto fw-bold d-block text-center harga" style="font-color:black">
                            Stok: 0
                        </span>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <img src="{{ asset('images/images.jpeg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <p class="card-text fw-bold">
                            Buku Filsafat
                        </p>
                    </div>
                    <div class="card-footer d-md-flex">
                        <a class="btn btn-sm d-block btnDetail" style="background-color: #E5D3B3;">Detail</a>
                        <span class="ms-auto fw-bold d-block text-center harga" style="font-color:black">
                            Stok: 1
                        </span>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <img src="{{ asset('images/images.jpeg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <p class="card-text fw-bold">
                            Buku Bahasa
                        </p>
                    </div>
                    <div class="card-footer d-md-flex">
                        <a class="btn btn-sm d-block btnDetail" style="background-color: #E5D3B3;">Detail</a>
                        <span class="ms-auto fw-bold d-block text-center harga" style="font-color:black">
                            Stok: 5
                        </span>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <img src="{{ asset('images/images.jpeg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <p class="card-text fw-bold">
                            Buku Informatika
                        </p>
                    </div>
                    <div class="card-footer d-md-flex">
                        <a class="btn btn-sm d-block btnDetail" style="background-color: #E5D3B3;">Detail</a>
                        <span class="ms-auto fw-bold d-block text-center harga" style="font-color:black">
                            Stok: 2
                        </span>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card shadow">
                    <img src="{{ asset('images/images.jpeg')}}" class="card-img-top"/>
                    <div class="card-body">
                        <p class="card-text fw-bold">
                            Buku Motivasi
                        </p>
                    </div>
                    <div class="card-footer d-md-flex">
                        <a class="btn btn-sm d-block btnDetail" style="background-color: #E5D3B3;">Detail</a>
                        <span class="ms-auto fw-bold d-block text-center harga" style="font-color:black">
                            Stok: 9
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div id="tentang" class="px-4 py-4 text-center" style="background-color: #E5D3B3;">
            <div class="mx-auto w-75">
                <h3 class="text-white">
                    Perpustakaan UAJY
                </h3>
                <p class="text-white" style="text-align: center;">
                    Semua buku yang kamu cari ada disini
                </p>
            </div>
        </div>
        <div class="text-center p-4 border-top">&copy; 2023 PerpustakaanUAJY</div>
    </div>

    <button type="button" class="btn btn-primary d-none btnModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
  
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5 modalTitle" id="exampleModalLabel"></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body row">
                <div class="modalImage col-md-6 col-12"></div>
                <div class="col-md-6 col-12">
                    <div class="modalDeskripsi"></div>
                    <div class="d-md-flex">
                        <a href="" target="_blank" class="btn btn-sm btn-warning d-block btnBeli">Buy this Product</a>
                        <span class="ms-auto text-danger fw-bold d-block text-center modalHarga">
                        </span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>
</html>