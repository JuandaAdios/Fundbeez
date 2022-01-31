@extends('layouts.auth_customer')

@section('title', 'Masuk')

@section('content')
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <!-- Form Masuk -->
                <form method="post" action="{{ url('login') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <input type="submit" value="Masuk" class="btn solid" />
                    @foreach ($errors->all() as $error)

                        <div>{{ $error }}</div>

                    @endforeach
                </form>
                <!-- Akhir Form-masuk -->

                <!--Form-daftar-->
                <form method="post" action="{{ url('login') }}" class="sign-up-form">
                    @csrf
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="password" name="password" />
                    </div>
                    <input type="submit" value="Daftar" class="btn solid" />
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </form>
                <!-- Akhir Form-Daftar -->

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Baru di Fundbeez ?</h3>
                    <p>
                        Daftarkan segera diri anda, dan jadi bagian dari Fundbeez !
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>
                <!--
                                          <img src="{{ url('/img/logo/logoFundbeez-sm.png') }}"/>
                                          -->
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah Daftar ?</h3>
                    <p>
                        Sign-in dengan akun yang telah anda daftarkan di fundbeez
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>
                <!--
                                          <img src="{{ url('img/logo/logoFundbeez-sm.png') }}" />
                                          -->
            </div>
        </div>
    </div>
@endsection
