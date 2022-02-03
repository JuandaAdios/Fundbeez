@extends('layouts.customer')

@section('title', 'Fundbeez')
<link rel="icon" href="{!! asset('img/logo/icon-fundbeez.png') !!}"/>

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('css/customer_home.css') }}" />

@endsection

@section('content')

  <body>
   <!--Detail Perusahaan-->
   <div class="container">
       <div class="row text-center">
       </div>
       <div class="row fs-5 pt-5">
           <div class="col pt-5">
            <img src="img/sample/Contoh1.jpg" alt="nama perusahaan" width="500">
               </div>
           <div class="col pt-5">
               <h1>Nama perusahaan</h1>
               <button type="button" class="btn btn-outline-secondary">Category</button>
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
                        <p>1.000.000</p>

                        <h5>Periode Deviden</h5>
                        <p>6 Bulan</p>
                        <button type="button" class="btn btn-primary">Beli</button>
                    </div>
                    <div class="col">
                        <h5>Jumlah Lot</h5>
                        <p>8000</p>

                        <h5>Estimasi Deviden</h5>
                        <p>1 Tahun</p>
                        <button type="button" class="btn btn-warning">Pay Later</button>
                    </div>
                  </div>
           </div>
       </div>
   </div>
</section>
<!--akhir dari detail Perusahaan -->

<hr class="my-3" style="background-color: #0098ba" />
<!-- About perusahaan -->
<section id="About perusahaan">
<div class="container">
    <div class="row">
        <div class="col-9">
            <h2>Detail Perusahaan</h2>
        <div class="row pt-2">
            <div class="col">
                <p class="h6">Dana Yang dibutuhkan</p>
                <p class="h6">Omzet 2021</p>
                <p class="h6">Omzet 2020</p>
                <p class="h6">Jumlah Saham Untuk Umum</p>

            </div>
            <div class="col">
                <p class="h6">Rp.1.000.000</p>
                <p class="h6">Rp.500.000.000</p>
                <p class="h6">Rp.650.000.000</p>
                <p class="h6">8000 Lots</p>
            </div>
        </div>
        </div>
        <div class="col text-center">
            <img src="img/sample/Avatar1.png" alt="nama perusahaan" width="200" class="rounded-circle">
            <h4>Nama Owner</h4>
            <p>Pemilik Bisnis</p>
        </div>
    </div>
    <div class="row-9 pt-5">
        <h2>Tentang Perusahaan</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab architecto repellat alias, voluptatum nihil ad sed corrupti veniam id ipsa a quo, accusantium in vel dolorem? Tenetur optio ipsam recusandae!</p>
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

  </body>

  @endsection





