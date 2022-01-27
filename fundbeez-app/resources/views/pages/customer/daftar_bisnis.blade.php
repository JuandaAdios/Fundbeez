@extends('layouts.customer')

@section('title', 'Fundbeez')
<link rel="icon" href="{!! asset('img/logo/icon-fundbeez.png') !!}"/>

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('css/daftarInvestasi.css') }}" />

@endsection

@section('content')


    <!-- Akhir Navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-start jumbotron-light">
        <div class="container">
            <h1 class="display-6 fw-bold" style="color: black">
                Daftar  <br>
                Usaha yang bagus <br>
                untuk Investasi <br>
                Di Indonesia</h1>
            <p class="lead" style="color: black">Cari bisnis yang potensial pilihan kami, untuk investasi tabungan masa depan anda</p>
            <a class="btn btn-lg rounded-pill" href="#" role="button" style="background-color: #ffd600">Ajukan Pendanaan</a>
            <a class="btn btn-lg rounded-pill" href="#" role="button" style="background-color: #0098ba" style="color: aliceblue">Daftar Sebagai Investor</a>

            <div class="vector">
                <img src="img/vector/vector2.png">
            </div>

        </div>

    </section>
    <!-- akhir Jumbotron -->

    <!-- Daftar Business -->
    <section id="daftarbisnis">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2>Daftar Bisnis</h2>
                    <hr class="my-3" style="background-color: #0098ba" />
                </div>
            </div>
                <div class="row row-cols-3">
                        <div class="card" style="width: 18rem;">
                            <img src="img/sample/Contoh3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Nama Perusahaan</h5>
                              <p class="card-text">Deskripsi perusahaan yang dikirim pemilik bisnis.</p>
                              <div class="card-body">
                                <a href="#" class="btn btn-primary">Beli</a>
                              </div>
                              <div class="card-stats">
                                <div class="stat">
                                  <div class="value"><sup>Rp</sup>1000.000</div>
                                  <div class="type">Harga per lot</div>
                                </div>
                                <div class="stat border">
                                  <div class="value">5123</div>
                                  <div class="type">Priode dividen</div>
                                </div>
                                <div class="stat">
                                    <div class="value">5123</div>
                                    <div class="type">Jumlah Lot</div>
                                  </div>
                              </div>
                            </div>
                            </div>
                                <div class="card" style="width: 18rem;">
                                    <img src="img/sample/Contoh3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">Nama Perusahaan</h5>
                                      <p class="card-text">Deskripsi perusahaan yang dikirim pemilik bisnis.</p>
                                      <div class="card-body">
                                        <a href="#" class="btn btn-primary">Beli</a>
                                      </div>
                                      <div class="card-stats">
                                        <div class="stat">
                                          <div class="value"><sup>Rp</sup>1000.000</div>
                                          <div class="type">Harga per lot</div>
                                        </div>
                                        <div class="stat border">
                                          <div class="value">5123</div>
                                          <div class="type">Priode dividen</div>
                                        </div>
                                        <div class="stat">
                                            <div class="value">5123</div>
                                            <div class="type">Jumlah Lot</div>
                                          </div>
                                      </div>
                                    </div>
                                        <div class="card" style="width: 18rem;">
                                            <img src="img/sample/Contoh3.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Nama Perusahaan</h5>
                                              <p class="card-text">Deskripsi perusahaan yang dikirim pemilik bisnis.</p>
                                              <div class="card-body">
                                                <a href="#" class="btn btn-primary">Beli</a>
                                              </div>
                                              <div class="card-stats">
                                                <div class="stat">
                                                  <div class="value"><sup>Rp</sup>1000.000</div>
                                                  <div class="type">Harga per lot</div>
                                                </div>
                                                <div class="stat border">
                                                  <div class="value">5123</div>
                                                  <div class="type">Priode dividen</div>
                                                </div>
                                                <div class="stat">
                                                    <div class="value">5123</div>
                                                    <div class="type">Jumlah Lot</div>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>

    </section>
    <!-- Akhir Daftar Business -->




@endsection
