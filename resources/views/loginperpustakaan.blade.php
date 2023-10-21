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
                <form action="{{ url('dashboardanggota') }}">
                    <div class="mb-3 px-4">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 px-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 px-4 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-primary" href="{{ url('dashboardanggota') }}">Login</button>
                    </div>
                </form>
                <form action="{{ url('registerperpustakaan') }}">
                    <div class="d-grid gap-2 mt-2 col-5 mx-auto">
                        <button type="submit" class="btn btn-link" style="font-size:18px;">Belum punya akun? daftar</button>
                    </div>
                </form>
                <form action="{{ url('adminlogin') }}">
                    <div class="d-grid col-4 mx-auto">
                        <button type="submit" class="btn btn-link" style="font-size:14px">Admin Login</button>
                    </div> 
                </form>

            </div>
        <script src="javascript/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>