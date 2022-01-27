@extends('layouts.auth_customer')

@section('title', 'SignIn / Signup')

@section('content')
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" action="{{ url('register') }}" class="sign-in-form">
                    @csrf
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm password" name="password_confirmation" />
                    </div>
                    <input type="submit" value="register" class="btn solid" />
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="sosial-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-apple"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel-container"></div>
    </div>
@endsection
