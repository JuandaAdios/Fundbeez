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
          <form method="post" action="{{url('investment')}}" class="sign-in-form" enctype="multipart/form-data">
              @csrf
            <h2 class="title">Ajukan Investasi</h2>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Company Name" name="company_name" value="{{ old('company_name') }}" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="file" placeholder="Company Image" name="company_image" value="{{ old('company_image') }}" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" placeholder="Owner Name" name="owner_name" value="{{old('owner_name')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="file" placeholder="Owner Image" name="owner_image" value="{{ old('owner_image') }}" />
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <select name="category_id">
                    <option value="0" selected> Pilih Categori </option>
                    <option value="1"> Agiculture </option>
                </select>
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Profit One Year Ago" name="one_year_ago" value="{{old('one_year_ago')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Profit Two Year Ago" name="two_year_ago" value="{{old('two_year_ago')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Dividen" name="dividen" value="{{old('dividen')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Public stock" name="public_stock" value="{{old('public_stock')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Profit Prediction" name="profit_prediction" value="{{old('needed_')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Needed Fund" name="needed_fund" value="{{old('needed_fund')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Video Profile" name="video_profile" value="{{old('video_profile')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Instagram" name="instagram" value="{{old('instagram')}}" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="text" placeholder="Caption" name="caption" value="{{old('caption')}}" />
            </div>

            <input type="submit" value="Invest!" class="btn solid" />
            @foreach ($errors->all() as $error)

            <div>{{ $error }}</div>

            @endforeach
            </div>
          </form>
        </div>
      </div>

      <div class="panel-container"></div>
    </div>
  </body>
</html>
