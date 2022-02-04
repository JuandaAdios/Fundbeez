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
            <img src="{{$data['company_image']}}" alt="nama perusahaan" width="500">
               </div>
           <div class="col pt-5">
               <h1>{{$data['company_name']}}</h1>
               <button type="button" class="btn btn-outline-secondary">{{$data->investment_category()->value('name')}}</button>
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
                        <p>@if($data['amount_per_lot'] > 0){{$data['amount_per_lot']}} @else Coming Soon @endif</p>

                        <h5>Periode Deviden</h5>
                        @if($data['dividen_period'] > 0)
                            <p>{{floor($data['dividen_period']/12)}} tahun @if($data['dividen_period'] % 12 > 0) {{$data['dividen_period'] % 12}} bulan @endif</p>
                        @else
                            <p> Coming Soon </p>
                        @endif
                        <button type="button" class="btn btn-primary">Beli</button>
                    </div>
                    <div class="col">
                        <h5>Jumlah Lot</h5>
                        <p>{{$data['public_stock']}}</p>

                        <h5>Estimasi Deviden</h5>
                        <p>{{$data['dividen']}}%</p>
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
                <p class="h6">Omzet {{date('Y', strtotime($data['created_at'])) - 1}}</p>
                <p class="h6">Omzet {{date('Y', strtotime($data['created_at'])) - 2}}</p>
                <p class="h6">Jumlah Saham Untuk Umum</p>

            </div>
            <div class="col">
                <p class="h6">Rp.{{ number_format($data['needed_fund'], '2',',', '.') }}</p>
                <p class="h6">Rp.{{ number_format($data['two_year_ago'], '2',',', '.') }}</p>
                <p class="h6">Rp.{{ number_format($data['one_year_ago'], '2',',', '.') }}</p>
                <p class="h6">{{ number_format($data['public_stock']) }} Lots</p>
            </div>
        </div>
        </div>
        <div class="col text-center">
            <img src="{{$data['owner_image']}}" alt="nama perusahaan" width="200" class="rounded-circle">
            <h4>Nama Owner</h4>
            <p>{{$data['owner_name']}}</p>
        </div>
    </div>
    <div class="row-9 pt-5">
        <h2>Tentang Perusahaan</h2>
        <p>{{$data['caption']}}</p>
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





