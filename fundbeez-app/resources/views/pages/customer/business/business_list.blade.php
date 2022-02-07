@extends('layouts.customer')

@section('title', 'Fundbeez')
<link rel="icon" href="{!! asset('img/logo/icon-fundbeez.png') !!}" />

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('css/daftarInvestasi.css') }}" />

@endsection

@section('content')
    <!-- jumbotron -->
    <section class="jumbotron text-start jumbotron-light">
        <div class="container">
            <h1 class="display-6 fw-bold">
                Daftar <br>
                Usaha yang bagus <br>
                untuk Investasi <br>
                Di Indonesia</h1>
            <p class="lead" style="color: black">Cari bisnis yang potensial pilihan kami, untuk investasi tabungan masa depan anda</p>
            <a class="btn btn-lg rounded-pill" href="/investment" style="background-color: #ffd600">Ajukan Pendanaan</a>
            <button class="btn btn-lg rounded-pill text-white" style="background-color: #0098ba" style="color: aliceblue">Daftar Sebagai Investor</button>

            <div class="vector">
                <img src="img/vector/vector2.png">
            </div>

        </div>

    </section>
    <!-- akhir Jumbotron -->

    <!-- Daftar Business -->
    <section id="daftarbisnis">
        <div class="container">
            <div class="text-center">
                <h2>Daftar Bisnis</h2>
            </div>
            <hr class="section-devider" />
            <div class="row row-cols-3">
                @foreach ($data as $value)
                    <div class="col">
                        <div class="card">
                            <img src="{{ $value->company_image }}" alt="...">
                            <div class="card-body">
                                <span class="chip">{{ $value->investment_category->name }}</span>
                                <div class="my-3">
                                    <h3 class="card-title">{{ $value->company_name }}</h3>
                                    <p>{{ Illuminate\Support\Str::limit($value->caption, 80, '...') }}</p>
                                </div>

                                <a href="{{ url('/business/' . $value->id) }}">
                                    <button class="btn w-100">
                                        View Detail
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Akhir Daftar Business -->




@endsection
