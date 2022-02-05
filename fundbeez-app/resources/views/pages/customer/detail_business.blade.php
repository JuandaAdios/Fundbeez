@extends('layouts.customer')

@section('title', 'Fundbeez')
<link rel="icon" href="{{ asset('/img/logo/icon-fundbeez.png') }}" />

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('/css/customer_home.css') }}" />

@endsection

@section('content')
    <style>
        h6 {
            color: #505050
        }

        section {
            padding: 100px 0;
        }

        #aboutPerusahaan {
            background-color: #f7f7f7
        }

    </style>
    <main>
        <!--Detail Perusahaan-->
        <section>
            <div class="container">
                <div class="row fs-5 pt-5">
                    <div class="col pt-5">
                        <img src="{{ asset($data['company_image']) }}" style="object-fit: cover; object-position:right" alt="nama perusahaan" width="500" height="500">
                    </div>
                    <div class="col pt-5">
                        <h1>{{ $data['company_name'] }}</h1>
                        <button type="button" class="btn btn-outline-secondary">{{ $data->investment_category()->value('name') }}</button>
                        <h3>Fundbeez Paylater</h3>
                        <p>Rp.1000.000 - Rp.3000.000.000</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Rp.1000.000 - Rp.3000.000.000</p>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="row fs-5">
                            <div class="col">
                                <h5>Harga perlot</h5>
                                <p>@if ($data['amount_per_lot'] > 0){{ $data['amount_per_lot'] }} @else Coming Soon @endif</p>

                                <h5>Periode Deviden</h5>
                                @if ($data['dividen_period'] > 0)
                                    <p>{{ floor($data['dividen_period'] / 12) }} tahun @if ($data['dividen_period'] % 12 > 0) {{ $data['dividen_period'] % 12 }} bulan @endif</p>
                                @else
                                    <p> Coming Soon </p>
                                @endif
                                <button type="button" class="btn btn-primary">Beli</button>
                            </div>
                            <div class="col">
                                <h5>Jumlah Lot</h5>
                                <p>{{ $data['public_stock'] }}</p>

                                <h5>Estimasi Deviden</h5>
                                <p>{{ $data['dividen'] }}%</p>
                                <button type="button" class="btn btn-warning">Pay Later</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--akhir dari detail Perusahaan -->
        <!-- About perusahaan -->
        <section id="aboutPerusahaan">
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <h2>Detail Perusahaan</h2>
                        <div class="row pt-2">
                            <div class="col">
                                <h6 class="fs-5">Dana Yang dibutuhkan</h6>
                                <h6 class="fs-5">Omzet {{ date('Y', strtotime($data['created_at'])) - 1 }}</h6>
                                <h6 class="fs-5">Omzet {{ date('Y', strtotime($data['created_at'])) - 2 }}</h6>
                                <h6 class="fs-5">Jumlah Saham Untuk Umum</h6>

                            </div>
                            <div class="col">
                                <h6 class="fs-5">: Rp.{{ number_format($data['needed_fund'], '2', ',', '.') }}</h6>
                                <h6 class="fs-5">: Rp.{{ number_format($data['two_year_ago'], '2', ',', '.') }}</h6>
                                <h6 class="fs-5">: Rp.{{ number_format($data['one_year_ago'], '2', ',', '.') }}</h6>
                                <h6 class="fs-5">: {{ number_format($data['public_stock']) }} Lots</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <img src="{{ asset($data['owner_image']) }}" alt="nama perusahaan" style="object-fit: cover" width="200" height="200" class="rounded-circle">
                        <h4>Nama Owner</h4>
                        <p>{{ $data['owner_name'] }}</p>
                    </div>
                </div>
                <div class="row-9 pt-5">
                    <h2>Tentang Perusahaan</h2>
                    <p class="fs-5">{{ $data['caption'] }}</p>
                </div>
                <div class="row-9 pt-5 pb-5">
                    <h2>Sosial Media Perusahaan</h2>
                    <a class="btn btn-primary" style="background-color: #0042a5;" href="#!" role="button">
                        <i class="fab fa-facebook me-2"></i>Facebook</a>
                    <a class="btn btn-primary" style="background-color: #ac2bac;" href="#!" role="button">
                        <i class="fab fa-instagram me-2"></i>Instagram</a>
                    <a class="btn btn-primary" style="background-color: #078bf7;" href="#!" role="button">
                        <i class="fab fa-linkedin me-2"></i>Linkedin</a>

                </div>
            </div>

        </section>
    </main>


@endsection
