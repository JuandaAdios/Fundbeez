<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- My Css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    @yield('custome-css')

</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg fixed-top" style="background-color: #ffff">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo/logoFundbeez-sm.png" alt="" width="200" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajukan Pendanaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Investasi</a>
                    </li>
                </ul>
                <div class="btn-group ms-auto" role="group" aria-label="Basic example">
                    <a href="login.html" class="btn shadow-lg ms-auto" style="background-color: #fbfbfb">Masuk</a>
                    <a href="#" class="btn text-white shadow-lg ms-auto" style="background-color: #0098ba">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <!-- konten footer -->
    <section id="kontenfooter">
        <div class="container py-4">
            <div class="row row-cols-lg-3">
                <div class="text-white">
                    <img src="img/Logo/logoFundbeez-sm.png" width="200rem" />
                    <h2></h2>
                    <h2 class="font2 fs-3">PT.Fundbeez Indonesia</h2>
                    <h4 class="font1 fs-6">jalan jend. Sudirman blok B.89</h4>
                </div>
                <div class="text-white">
                    <p class="fs-4 fw-bold"><a href="#" class="text-reset">Karir</a></p>
                    <p class="fs-4 fw-bold"><a href="#" class="text-reset">Syarat dan Ketentuan</a></p>
                    <p class="fs-4 fw-bold"><a href="#" class="text-reset">Hubungi Kami</a></p>
                    <p class="fs-4 fw-bold"><a href="#" class="text-reset">Tentang Fundbeez</a></p>
                </div>
                <div class="text-white">
                    <p class="fs-4">Telp.</p>
                    <p class="fs-5">0877-9117-4370</p>
                    <p class="fs-4">Email.</p>
                    <p class="fs-5">fundbeez@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="text-white text-center p-3" style="background-color: #333333">
        <p>Created with love by <a href="https://www.instagram.com/juandaadios/" class="text-white fw-bold">Frilyan Juanda Adios</a></p>
    </footer>
    <!-- akhir footer -->

    @yield('cutome-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>