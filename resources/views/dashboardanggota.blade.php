<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboardanggota</title>
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
                        <a href="{{ url('profileanggota') }}" class="text-decoration-none text-dark fw-bold">User</a>
                    </li>
                    <li class="list-inline-item mx-md-3">
                        <a href="{{ url('loginperpustakaan') }}" class="text-decoration-none text-dark fw-bold">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container px-4">
            <h1 class="mt-3 mb-2"> Hi, John Doe </h1>
            <div class="row">
            <div class="mt-2 col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tagihan Saat Ini</h5>
                        <p class="card-text">Rp 500.000</p>
                    </div>
                </div>
            </div>
            <div class="mt-2 col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Buku Dipinjam</h5>
                        <p class="card-text">4</p>
                    </div>
                </div>
            </div>
            <form action="dashboardbayar">
            <div class="mt-2 col-4">
                <button type="submit" class="btn btn-primary">
                    Bayar Tagihan
                </button>
            </div>
            </form>
        </div>


        <div class="container px-4">
        <h1 class="mt-4">Buku Sedang Dipinjam</h1>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Sisa Durasi Peminjaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Harry Potter and the Sorcerer's Stone</td>
                    <td>2023-10-15</td>
                    <td>7 hari</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>The Great Gatsby</td>
                    <td>2023-10-18</td>
                    <td>4 hari</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Buku apa nih</td>
                    <td>2023-10-18</td>
                    <td>2 hari</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Gatau sih</td>
                    <td>2023-10-18</td>
                    <td>1 hari</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container px-4 py-4">
        <h1 class="mt-4">Riwayat Peminjaman Buku</h1>
        <table class="table table-warning">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Sisa Durasi Peminjaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Harry Potter and the Sorcerer's Stone</td>
                    <td>2023-10-15</td>
                    <td>7 hari</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>The Great Gatsby</td>
                    <td>2023-10-18</td>
                    <td>4 hari</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Buku apa nih</td>
                    <td>2023-10-18</td>
                    <td>2 hari</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Gatau sih</td>
                    <td>2023-10-18</td>
                    <td>1 hari</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>
</html>