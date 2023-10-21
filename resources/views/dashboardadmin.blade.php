<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboardadmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #987554;">
    <div class="container p-0 mb-4 mt-4 rounded-3 shadow bg-white">
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
                        <a href="{{ url('') }}" class="text-decoration-none text-dark fw-bold">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container px-4">
            <h1 class="mt-3 mb-3"> Hi, Admin </h1>
            <div class="row">
                <div class="col-1 mx-3">
                    <div class="mb-3 text-center">
                        <a href="{{ url('dashboardpeminjaman') }}" class="btn btn-primary" role="button">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('images/images.jpeg')}}" class="img-fluid" style="width: 50px; height: 50px;">
                                <span>Peminjaman</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-1 mx-4">
                    <div class="mb-3 text-center">
                        <a href="{{ url('dashboardpengembalian') }}" class="btn btn-primary" role="button">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('images/images.jpeg')}}" class="img-fluid" style="width: 50px; height: 50px;">
                                <span>Pengembalian</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-2 mx-0">
                    <div class="mb-3 text-center">
                        <a href="{{ url('dashboardtambahbuku') }}" class="btn btn-primary" role="button">
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('images/images.jpeg')}}" class="img-fluid" style="width: 50px; height: 50px;">
                                <span>Tambah Buku</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container px-4 py-2">
        <h1>List Buku</h1>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Harry Potter and the Sorcerer's Stone</td>
                    <td>Siapa yaa</td>
                    <td>Penerbit handal</td>
                    <td><a class="link-opacity-100-hover">Edit</a> <a class="link-opacity-100-hover">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>The Great Gatsby</td>
                    <td>Gatau</td>
                    <td>Penerbit hari</td>
                    <td><a class="link-opacity-100-hover">Edit</a> <a class="link-opacity-100-hover">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Buku apa nih</td>
                    <td>Uhuy</td>
                    <td>Penerbit handal</td>
                    <td><a class="link-opacity-100-hover">Edit</a> <a class="link-opacity-100-hover">Hapus</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Gatau sih</td>
                    <td>Waduh</td>
                    <td>Penerbit handal</td>
                    <td><a class="link-opacity-100-hover">Edit</a> <a class="link-opacity-100-hover">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>
</html>