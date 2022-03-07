<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>

    <!-- Vendor -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- My Css -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/customer.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    @yield('custom-css')

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo/logoFundbeez-sm.png') }}" alt="" width="150px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Auth::check())
                        <li class="nav-item pt-4 d-lg-none">
                            <p class="fw-bold" style="color:#525252"><i class="fas fa-user"></i> {{ Auth::guard('web')->user()->name }}</p>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link @if (request()->is(['/', 'home'])) active @endif" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->is('business-list')) active @endif" href="/business-list">Daftar Bisnis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->is('investment')) active @endif" href="/investment">Ajukan Pendanaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Investasi</a>
                    </li>
                    @if (Auth::check())
                        <hr class="d-lg-none">
                        <li class="nav-item d-lg-none">
                            <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    @endif
                </ul>
                @if (Auth::check())
                    <div class="btn-group ms-auto d-none d-lg-block">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>
                        </button>
                        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <p class="px-3 fw-bold" style="color:#525252"> {{ Auth::guard('web')->user()->name }}</p>
                            </li>
                            @if (Auth::guard('web')->user()->role->name == 'admin')
                                <li><a class="dropdown-item" href="/admin/dashboard"><i class="fas fa-fw fa-cogs"></i> Dashboard</a></li>
                            @endif
                            <hr>
                            <li><a class="dropdown-item" href="/logout"><i class="fas fa-fw fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                @else
                    <div class="btn-auth btn-group ms-auto ">
                        <a href="/login" class="btn btn-light shadow-sm">Masuk</a>
                        <a href="/register" class="btn text-white shadow-sm bg-fb-primary">Daftar</a>
                    </div>
                @endif

            </div>
        </div>
    </nav>
    @yield('content')

    <!-- Footer -->
    <footer>
        <div>
            <div class="container py-4">
                <div class="row row-cols-lg-3">
                    <div class="text-white">
                        <img src="{{ asset('img/Logo/logo-white.png') }}" width="200px" />
                        <h2 class="fs-5">PT.Fundbeez Finansial Indonesia</h2>
                        <p>Jl. Jend. Sudirman blok B.89</p>
                    </div>
                    <div class="text-white">
                        <p class="fs-6 "><a href="#" class="text-reset">Karir</a></p>
                        <p class="fs-6 "><a href="#" class="text-reset">Syarat dan Ketentuan</a></p>
                        <p class="fs-6 "><a href="#" class="text-reset">Hubungi Kami</a></p>
                        <p class="fs-6 "><a href="#" class="text-reset">Tentang Fundbeez</a></p>
                    </div>
                    <div class="text-white">
                        <p class="fs-6"><i class="fas fa-phone-alt"></i> 0877-9117-4370</p>
                        <p class="fs-6"><i class="fas fa-envelope"></i> fundbeez@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white text-center pt-3">
            <p style="font-size: 14px">© Copyright, all right reserved @<a href="https://www.instagram.com/fundbeez/" class="text-white fw-bold">Fundbeez.com</a></p>
        </div>
    </footer>

    @if ($errors->all())
        <div class="toast-container">
            @foreach ($errors->all() as $error)
                <div class="toast show align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            {{ $error }}
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @yield('custom-script')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const navbar = document.querySelector('.navbar');
        window.onscroll = () => {
            if (window.scrollY > 0) {
                navbar.classList.add('nav-scrolled');
            } else {
                navbar.classList.remove('nav-scrolled');
            }
        };
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>

</html>
