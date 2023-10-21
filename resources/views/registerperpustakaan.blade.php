<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan UAJY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #987554">
    <div class="container col-6 p-4 mb-4 mt-4 rounded-3 shadow bg-white">
        <nav class="d-md-flex p-4">
            <div>
                <h1>
                    Perpustakaan UAJY
                </h1>
            </div>
        </nav>
            <div class="mt-2">
                <form action="{{ url('/') }}">
                    <div class="mb-3 px-4">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="namaHelp">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputNoTelp" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto" style="padding-top:10px;">
                        <button type="submit" class="btn btn-primary" href="{{ url('perpustakaan') }}">Register</button>
                    </div>
                </form>
            </div>
        <script src="javascript/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>