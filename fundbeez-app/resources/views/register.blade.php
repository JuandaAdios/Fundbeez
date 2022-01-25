<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>SignIn / Signup</title>
    <link rel="stylesheet" href="{{url('css/login.css');}}" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="{{url('register')}}" class="sign-in-form">
              @csrf
            <h2 class="title">Sign Up</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
              </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="email" value="{{ old('email') }}" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="password" name="password" />
            </div>

            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="confirm password" name="password_confirmation" />
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
  </body>
</html>
