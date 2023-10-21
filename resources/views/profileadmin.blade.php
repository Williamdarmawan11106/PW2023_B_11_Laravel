<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Anggota</title>
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
                        <a href="{{ url('profileanggota') }}" class="text-decoration-none text-dark fw-bold">User</a>
                    </li>
                    <li class="list-inline-item mx-md-3">
                        <a href="{{ url('dashboardadmin') }}" class="text-decoration-none text-dark fw-bold">Back</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
                <h1><img src="{{ asset('images/images.jpeg')}}" class="img-fluid rounded-circle m-4" style="width:150px;">Hi, John Doe</h1>     
                <div class="mb-3 px-4">
                        <label for="inputNama" class="form-label">Nama Admin</label>
                        <input type="text" class="form-control" value="John Doe">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputAlamat" class="form-label">Alamat Admin</label>
                        <input type="text" class="form-control" value="Babarsari">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputNoTelp" class="form-label">Nomor Telepon Admin</label>
                        <input type="text" class="form-control" value="08123456789">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputEmail" class="form-label">Email Admin</label>
                        <input type="text" class="form-control" value="JohnDoe@gmail.com">
                    </div>
                    <div class="mb-3 px-4 pb-4">
                        <label for="inputPassword" class="form-label">Password Admin</label>
                        <input type="text" class="form-control" value="JohnDoe123">
                    </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/main.js"></script>
</body>
</html>