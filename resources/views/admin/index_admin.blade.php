<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $("select").select2();
        });
    </script>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="mb-3">
        <nav class="navbar justify-content-between py-2" style="background-color: #87aba1;">
            <div class="container py-2">
                <a class="navbar-brand text-light" href="{{url('admin')}}">LIBRARIA</a>
                <div class="row justify-content-center align-items-center">
                    <div class="col-auto">
                        <div class="card" style="background-color: inherit; border: none; color: white;">
                            <a href="#" class="btn btn-sm" style="color: white; text-align:center;">
                                Admin
                                <img class="rounded-circle" alt="avatar1" src="{{'http://127.0.0.1:8000/storage/' . auth()->user()->foto ?? 'profile/blank-profile-picture-973460_1280.png'}}" style="width: 40px;" />
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <a class="text-light" href="{{url('')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="mt-auto">
        <nav class="navbar justify-content-between mt-4" style="background-color: #dba058;">
            <div class="container" style="height: 40px;">
                <p class="text-light">©️Pemrograman Web B - Kelompok 11</p>
            </div>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>