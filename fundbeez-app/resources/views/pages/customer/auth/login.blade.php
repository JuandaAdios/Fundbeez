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

    <title>Login</title>
  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="img/logo/allwhite.png" class="logo" alt="">
                    <h1 class="fw-bold pt-5" style="color: white">Selamat Datang Kembali</h1>
                    <h4 class="fw-light" style="color: white">Investasi dan kembangkan Bisnis mu sekarang dengan Fundbeez</h4>
                    <img src="img/login/vector1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 p-5">
                    <h1 class="fw-bolder py-3 pt-5"> Masuk </h1>
                    <form method="post" action="{{ url('login') }}" class="sign-in-form">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email Andrees" name="email" class="form-control my-3 p-4" value="{{ old('email') }}" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Masukkan Password anda" class="form-control my-3 p-4" name="password" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">Masuk</button>
                                @foreach ($errors->all() as $error)

                        <div>{{ $error }}</div>

                    @endforeach
                            </div>
                        </div>

                        <a href="#">Lupa Password?</a>
                        <p>Tidak memiliki akun? <a href="register2">Daftar disini</p>
                    </form>
                </div>
            </div>
        </div>

  </body>
</html>
