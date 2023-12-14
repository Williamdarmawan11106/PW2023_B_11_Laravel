<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #87aba1">
    <header>
        <nav class="navbar" style="background-color: #87aba1">
            <div class="container">
                <a class="navbar-brand text-light" href="{{url('')}}">LIBRARIA</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container my-4">
            <div class="row justify-content-center mt-1">
                <div class="col-10 col-md-5">
                    <div class="card mt-4">
                        <div class="card-body" style="padding: 20px 30px">
                            <div class="card-title text-center">
                                <h3>REGISTER</h3>
                            </div>
                            @if (Session::has('error'))
                            <div class="alert alert-danger">
                                <b>Oops!</b> {{session('error')}}
                            </div>
                            @endif
                            <form action="{{ route('registerAction') }}" method="post" id="loginForm" enctype="multipart/form-data">
                                @csrf
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control mb-2 py-2" required />

                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" class="form-control mb-2 py-2" required />

                                <label for="no_telp">No Telp</label>
                                <input type="tel" name="no_telp" class="form-control mb-2 py-2" required />

                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control mb-2 py-2" required />

                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control mb-2 py-2" required />

                                <label for="foto" class="form-label">Foto Profil</label>
                                <input class="form-control" type="file" name="foto" accept="image/*" required>

                                <hr class="hr" />

                                <p class="text-center">Sudah punya akun? <a href="{{url('login')}}">Login</a></p>

                                <div class="row g-2 mt-2">
                                    <div class="col">
                                        <button type="submit" class="btn w-100" style="background-color: #dba058; color: #fff">
                                            Daftar
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

    <script src="https://kit.fontawesome.com/098cbe1db3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>