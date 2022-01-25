<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Masuk</title>
    <link rel="stylesheet" href="{{url('css/login.css');}}" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" action="{{url('login')}}" class="sign-in-form">
              @csrf
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="email" value="{{ old('email') }}" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            @foreach ($errors->all() as $error)

            <div>{{ $error }}</div>

            @endforeach

           
          </form>
        </div>
      </div>

      <div class="panel-container"></div>
    </div>
  </body>
</html>
