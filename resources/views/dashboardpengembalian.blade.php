<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboardpengembalian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.39.0/dist/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
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
            <h1 class="mt-3 mb-3">Pengembalian</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="namaPeminjam">Nama Peminjam:</label>
                        <input type="text" class="form-control" id="namaPeminjam" placeholder="Masukkan Nama Peminjam">
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary mt-2">Cari</button>
                    </div>
                </div>
                <form action="{{ url('/dashboardadmin') }}">
                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>




        <div class="container px-4 py-2">
        <h1>List Buku</h1>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Jadwal Pengembalian</th>
                    <th scope="col">Denda</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                    <th scope="row">1</th>
                    <td>Harry Potter and the Sorcerer's Stone</td>
                    <td>18/10/2023</td>
                    <td>Rp 35.000</td>
                    <td><a class="link-opacity-100-hover">Perpanjang</a> <a class="link-opacity-100-hover">Dikembalikan</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>The Great Gatsby</td>
                    <td>15/11/2023</td>
                    <td>Rp 0</td>
                    <td><a class="link-opacity-100-hover">Perpanjang</a> <a class="link-opacity-100-hover">Dikembalikan</a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Buku apa nih</td>
                    <td>15/01/2023</td>
                    <td>Rp 55.000</td>
                    <td><a class="link-opacity-100-hover">Perpanjang</a> <a class="link-opacity-100-hover">Dikembalikan</a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Gatau sih</td>
                    <td>11/11/2023</td>
                    <td>Rp 75.000</td>
                    <td><a class="link-opacity-100-hover">Perpanjang</a> <a class="link-opacity-100-hover">Dikembalikan</a></td>
                </tr>
            </tbody>
        </table>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>
</html>