@extends('layouts.customer')

@section('title', 'Fundbeez')
<link rel="icon" href="{!! asset('img/logo/icon-fundbeez.png') !!}" />

@section('custom-css')
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
            <a class="btn btn-fb-warning rounded-pill" href="/investment" role="button">Ajukan Pendanaan</a>
            <a class="btn btn-fb-primary rounded-pill" href="/investor/add">Daftar Sebagai Investor</a>
        </div>

        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,256L34.3,245.3C68.6,235,137,213,206,218.7C274.3,224,343,256,411,256C480,256,549,224,617,224C685.7,224,754,256,823,256C891.4,256,960,224,1029,208C1097.1,192,1166,192,1234,186.7C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </section>
    <!-- akhir Jumbotron -->

    <!-- About Fundbeez -->
    <section id="about">
        <div class="container rounded-pill border shadow-sm py-4 my-4">
            <div class="row text-center">
                <div class="col">
                    <h2 class="fs-1">{{ App\Models\User::count() }}</h2>
                </div>
                <div class="col">
                    <h2 class="fs-1">{{ App\Models\Investment::count() }}</h2>
                </div>
                <div class="col">
                    <h2 class="fs-1">{{ App\Models\Investment::where('status', App\Models\Enums\InvestmentStatus::ACCEPT)->count() }}</h2>
                </div>
                <div class="col">
                    <h2 class="fs-1">0</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <h3 class="fs-5">Investor Terdaftar</h3>
                </div>
                <div class="col">
                    <h3 class="fs-5">Bisnis Terdaftar</h3>
                </div>
                <div class="col">
                    <h3 class="fs-5">Bisnis Terdanai</h3>
                </div>
                <div class="col">
                    <h3 class="fs-5">Total Investasi</h3>
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
        <div class="container py-4">
            <h2 class="fs-3 mb-4 fw-bold text-center">Mengapa Memilih Fundbeez?</h2>
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
    <section id="businessList" style="padding: 0 0 100px 0">
        <div class="container text-center">
            <h2 class="text-center">Daftar Bisnis</h2>
            <hr class="section-devider" />
            <img src="{{ asset('/img/vector/creative-writing-pana.svg') }}" alt="" width="300px">
            <h3 class="fs-5">Segera Hadir</h3>
            {{-- <div class="row" style="margin:50px 0">
                <?php $business = App\Models\Investment::orderBy('created_at', 'desc')
                    ->limit(3)
                    ->get(); ?>
                @foreach ($business as $business)
                    <div class="business col-md-4 mb-3">
                        <div>
                            <img class="w-100" src="{{ asset($business->company_image) }}" class=" card-img-top" alt="..." />
                            <div class="py-4">
                                <h3 class="card-title">{{ $business->company_name }}</h3>
                                <p class="card-text">{{ Illuminate\Support\Str::limit($business->caption, 150, '...') }}</p>
                                <a href="">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a class="btn btn-fb-primary btn-lg rounded-pill text-white" href="/business-list" role="button">Tampilkan Bisnis Lainnya</a>
            </div> --}}
        </div>
    </section>
    <!-- Akhir Daftar Business -->
    <!-- Review -->
    <style>
        .swiper {
            height: 300px;
        }

        .swiper-slide {
            cursor: pointer;
            position: relative;
        }

        .testimonial {
            padding: 50px 200px;
        }

        .swiper-pagination-bullet-active {
            background-color: #34aeff
        }

    </style>
    <section id="Review" style="padding: 0 0 100px 0">
        <div class="container text-center">
            <h2 class="text-center">Testimoni</h2>
            <hr class="section-devider" />
            <div class="swiper mySwiper">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <q class="fs-4">Develop relevant, sought-after skills and earn invaluable recognition from an international selection of universities, entirely online</q>
                            <p class="fw-bold mt-4 fs-6">B. J. Habibie <br><span class="fw-normal" style="font-size:12px;">Mantan Presiden Indonesia</span></p>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="testimonial">
                            <q class="fs-4">When something is important enough, you do it even if the odds are not in your favor</q>
                            <p class="fw-bold mt-4 fs-6">Elon Musk <br><span class="fw-normal" style="font-size:12px;">CEO Tesla, Inc.</span></p>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="testimonial">
                            <q class="fs-4">You've got to start with the customer experience and work backwards to the technology. You can't start with the technology and try to figure out where can I sell it.</q>
                            <p class="fw-bold mt-4 fs-6">Steve Jobs <br><span class="fw-normal" style="font-size:12px;">CEO Tesla, Inc.</span></p>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

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
