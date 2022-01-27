@extends('layouts.customer')

@section('title', 'Investment')

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('css/customer_home.css') }}" />

@endsection


@section('content')
    <style>
        .forms-container {
            padding: 100px 0;
        }

        .input-field {
            margin: 20px 0px;
        }

        .input-field .form-control,
        .input-field .form-select {
            font-size: 24px;
        }

    </style>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="post" action="{{ url('investment') }}" class="sign-in-form" enctype="multipart/form-data">
                    @csrf
                    <h2 class="title">Ajukan Investasi</h2>
                    <div class="input-field">
                        <input class="form-control" type="text" placeholder="Company Name" name="company_name" value="{{ old('company_name') }}" required />
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="file" placeholder="Company Image" name="company_image" value="{{ old('company_image') }}" required />
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="text" placeholder="Owner Name" name="owner_name" value="{{ old('owner_name') }}" required />
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="file" placeholder="Owner Image" name="owner_image" value="{{ old('owner_image') }}" required />
                    </div>
                    <div class="input-field">
                        <select class="form-select" aria-label="Default select example" name="category_id" required>
                            <option value="0" selected> Pilih Kategori </option>
                            <option value="1"> Agiculture </option>
                        </select>
                    </div>
                    <div class="input-field input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" placeholder="Profit One Year Ago" name="one_year_ago" value="{{ old('one_year_ago') }}" required />
                    </div>
                    <div class="input-field input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" placeholder="Profit Two Year Ago" name="two_year_ago" value="{{ old('two_year_ago') }}" required />
                    </div>
                    <div class="input-field input-group">
                        <input class="form-control" type="number" placeholder="Dividen" name="dividen" value="{{ old('dividen') }}" max="100" min="0" required />
                        <span class="input-group-text">%</span>
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="number" placeholder="Public stock" name="public_stock" value="{{ old('public_stock') }}" required />
                    </div>
                    <div class="input-field input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" placeholder="Profit Prediction" name="profit_prediction" value="{{ old('needed_') }}" required />
                    </div>
                    <div class="input-field input-group">
                        <span class="input-group-text">Rp</span>
                        <input class="form-control" type="number" placeholder="Needed Fund" name="needed_fund" value="{{ old('needed_fund') }}" required />
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="text" placeholder="Video Profile" name="video_profile" value="{{ old('video_profile') }}" required />
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="text" placeholder="Instagram" name="instagram" value="{{ old('instagram') }}" required />
                    </div>
                    <div class="input-field">
                        <input class="form-control" type="text" placeholder="Caption" name="caption" value="{{ old('caption') }}" required />
                    </div>
                    <input type="submit" value="Invest!" class="btn btn-primary " />
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
@endsection
