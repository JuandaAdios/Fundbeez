<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- my Css -->
    <link rel="stylesheet" href="{{ asset('/css/login2.css') }}" />

    <title>Register</title>
  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <a href="home"><img src="img/logo/allwhite.png" class="logo" alt=""></a>
                    <h1 class="fw-bold pt-5" style="color: white">Selamat Datang</h1>
                    <h4 class="fw-light" style="color: white">Investasi dan kembangkan Bisnis mu sekarang dengan Fundbeez</h4>
                    <img src="img/login/vector1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 p-5">
                    <h1 class="fw-bolder py-3 pt-5"> Daftar </h1>
                    <form method="post" action="{{ url('register') }}" class="sign-in-form">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="name" placeholder="Nama Anda" class="form-control my-4 p-3" value="{{ old('name') }}"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email Andrees" class="form-control my-4 p-3" value="{{ old('email') }}"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Masukkan Password anda" class="form-control my-4 p-3" name="password"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Konfirmasi Password anda" class="form-control my-4 p-3" name="password_confirmation"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">Daftar</button>
                                @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                                @endforeach

                            </div>
                        </div>
                        <p>Sudah memiliki akun? <a href="login2">Masuk disini</p>
                    </form>
                </div>
            </div>
        </div>

  </body>
</html>
