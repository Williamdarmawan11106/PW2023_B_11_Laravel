<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboardtambahbuku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #987554;">
    <div class="container col-4 p-0 mb-4 mt-4 rounded-3 shadow bg-white">
        <nav class="d-md-flex p-4 rounded-3" style="background-color: #E5D3B3">
            <div>
                <h1 style="font-size:20px;"><img src="{{ asset('images/images.jpeg')}}" style="width: 25px; height: 25px;" class="rounded-3">
                    Perpustakaan UAJY
                </h1>
            </div>
            <div class="ms-auto my-auto">
                <ul class="list-inline m-0">
                    <li class="list-inline-item mx-md-3" >
                        <a href="{{ url('profileadmin') }}" class="text-decoration-none text-dark fw-bold">Profile</a>
                    </li>
                    <li class="list-inline-item mx-md-3">
                        <a href="{{ url('/') }}" class="text-decoration-none text-dark fw-bold">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">    
                <div class="mb-3 px-4 mt-2">
                <h1>Tambah Buku</h1> 
                        <label for="inputNama" class="form-label">Judul</label>
                        <input type="text" class="form-control" value="John Doe">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputAlamat" class="form-label">Stok</label>
                        <input type="text" class="form-control" value="Babarsari">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputKategori" class="form-label">Kategori</label>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Kategori
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Fiksi</a></li>
                                <li><a class="dropdown-item" href="#">Bahasa</a></li>
                                <li><a class="dropdown-item" href="{{ url('/tambahkategori') }}">Tambah Kategori Baru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputKategori" class="form-label">Pengarang</label>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Pengarang
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Siapa yaa</a></li>
                                <li><a class="dropdown-item" href="#">Gatau</a></li>
                                <li><a class="dropdown-item" href="#">Uhuy</a></li>
                                <li><a class="dropdown-item" href="#">Waduh</a></li>
                                <li><a class="dropdown-item" href="{{ url('/tambahpengarang') }}">Tambah Pengarang Baru</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputKategori" class="form-label">Penerbit</label>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih Penerbit
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Penerbit handal</a></li>
                                <li><a class="dropdown-item" href="#">Penerbit hari</a></li>
                                <li><a class="dropdown-item" href="{{ url('/tambahpenerbit') }}">Tambah Penerbit Baru</a></li>
                            </ul>
                        </div>
                    </div>
                    <form action="{{ url('/dashboardadmin') }}">
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                        </div>
                    </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>
</html>