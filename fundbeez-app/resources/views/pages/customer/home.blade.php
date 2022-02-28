@extends('layouts.customer')

@section('title', 'Fundbeez')
<link rel="icon" href="{!! asset('img/logo/icon-fundbeez.png') !!}" />

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('css/customer_home.css') }}" />

@endsection

@section('content')


    <!-- Akhir Navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-start jumbotron-light">
        <div class="container">
            <h1 class="display-6 fw-bold" style="color: aliceblue">
                Platform <br>
                Securities <br>
                Crowdfunding <br>
                Di Indonesia</h1>
            <p class="lead" style="color: aliceblue">Investasi dan kembangkan bisnismu sekarang dengan Fundbeez</p>
            <a class="btn btn-lg rounded-pill" href="/investment" role="button" style="background-color: #ffd600">Ajukan Pendanaan</a>
            <a class="btn btn-lg rounded-pill text-white" href="/investor/add" style="background-color: #0098ba">Daftar Sebagai Investor</a>
        </div>

        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,256L34.3,245.3C68.6,235,137,213,206,218.7C274.3,224,343,256,411,256C480,256,549,224,617,224C685.7,224,754,256,823,256C891.4,256,960,224,1029,208C1097.1,192,1166,192,1234,186.7C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir Jumbotron -->

    <!-- About Fundbeez -->
    <section id="about">
        <div class="container rounded-pill shadow-lg" style="background-color: #ffff">
            <div class="row text-center">
                <div class="col">
                    <h2>{{ App\Models\User::count() }}</h2>
                </div>
                <div class="col">
                    <h2>{{ App\Models\Investment::where('status', App\Models\Enums\InvestmentStatus::ACCEPT)->count() }}</h2>
                </div>
                <div class="col">
                    <h2>0</h2>

                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h3>Investor Terdaftar</h3>
                </div>
                <div class="col">
                    <h3>Bisnis Terdaftar</h3>
                </div>
                <div class="col">
                    <h3>Total Investasi</h3>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#B3E1EB" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,128C384,139,480,149,576,138.7C672,128,768,96,864,74.7C960,53,1056,43,1152,37.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir About Fundbeez -->

    <!-- Reason -->
    <section id="reason">
        <div class="container" style="margin-bottom: 50px">
            <h2 class="display-6 mb-4 fw-bold text-center">Mengapa Memilih Fundbeez?</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/Aman.png" class="card-img-top" alt="aman" />
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/Profitable.png" class="card-img-top" alt="Profitable" />
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/Paylater.png" class="card-img-top" alt="paylater" />
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,101.3C96,107,192,117,288,128C384,139,480,149,576,138.7C672,128,768,96,864,74.7C960,53,1056,43,1152,37.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>
    <!-- Akhir Reason -->

    <!-- Daftar Business -->
    <section id="daftarbisnis" style="padding: 0 0 100px 0">
        <div class="container">
            <h2 class="text-center">Daftar Bisnis</h2>
            <hr class="section-devider" />
            <div class="row" style="margin:50px 0">
                <?php $business = App\Models\Investment::orderBy('created_at', 'desc')->limit(3)->get(); ?>
                @foreach ($business as $business)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset($business->company_image) }}" class=" card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text">{{$business->caption}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="btn btn-lg rounded-pill text-white" href="/business-list" role="button" style="background-color: #86cddd">Tampilkan Bisnis Lainnya</a>
            </div>
        </div>
    </section>
    <!-- Akhir Daftar Business -->

    <!-- Diawasi oleh -->
    <section id="diawasi" style="padding: 100px 0">
        <div class="container">
            <h2 class="text-center">Diawasi Oleh</h2>
            <hr class="section-devider" />
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <img src="img/support/OJK.png" class="card-img-top" alt="contoh1" />
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <!-- akhir diawasi oleh -->

    <!-- Didukung -->
    <section id="didukung" style="padding: 100px 0">
        <div class="container">
            <h2 class="text-center">Di Dukung Oleh</h2>
            <hr class="section-devider" />
            <div class="row"><img src="img/support/Sponsor.png" /></div>
        </div>
    </section>
    <!-- akhir didukung -->



@endsection
