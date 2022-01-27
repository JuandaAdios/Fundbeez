@extends('layouts.customer')

@section('title', 'Investment')

@section('custome-css')
    <link rel="stylesheet" href="{{ asset('css/customer_home.css') }}" />

@endsection


@section('content')
    <style>
        main.container {
            padding: 100px 0;
        }

        .forms-container {
            padding: 100px 0;
        }

        .input-field {
            margin: 20px 0px;
        }

        .input-field .form-control,
        .input-field .form-select {
            font-size: 20px;
            border-radius: 22px;
            padding: 15px 30px;
        }

        .input-group-text {
            border-radius: 22px;
        }

        .company-detail {
            position: relative;
        }

        .company-detail .card {
            background-color: #0098BA;
            border-radius: 17px;
            padding: 32px 37px;
            transition: 2s
        }

        .image-placeholder {
            font-size: 20px;
            padding: 70px 70px;
            display: flex;
            border-radius: 15px;
            background-color: white
        }

        .image-placeholder p {
            margin: auto auto;
            margin-left: 20px
        }

        .btn-warning {
            padding: 13px 89px;
            font-size: 30px;
            border-radius: 31px;
        }

        #companyOmzet {
            position: absolute;
            top: 0;
            right: -100vw;
            width: 100%;
        }

        /* width */
        #companyOmzet ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        #companyOmzet ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        #companyOmzet ::-webkit-scrollbar-thumb {
            background: #ffc400;
        }

        /* Handle on hover */
        #companyOmzet ::-webkit-scrollbar-thumb:hover {
            background: #ffa600;
        }

    </style>
    <main class="container" style="overflow-x: hidden">
        <h1>Ajukan Pendanaan</h1>
        <form method="post" action="{{ url('investment') }}" enctype="multipart/form-data" class="forms-container">
            @csrf
            <div class="company-detail">
                <div class="card" id="companyDetail">

                    <h2 class="text-white">Detail Perusahaan</h2>
                    <div class="row row-cols-2">
                        <div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="Nama Perusahaan" name="company_name" value="{{ old('company_name') }}" required />
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="Owner Name" name="owner_name" value="{{ old('owner_name') }}" required />
                            </div>
                            <div class="input-field">
                                <select class="form-select" aria-label="Default select example" name="category_id" required>
                                    <option value="0" @if (!old('category_id'))
                                        selected
                                        @endif disabled> Pilih Kategori </option>
                                    @foreach (App\Models\InvestmentCategory::all() as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected> {{ $category->name }} </option>
                                        @else
                                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="Alamat" name="company_address" value="{{ old('company_address') }}" required />
                            </div>
                            <button class="btn btn-warning" onclick="changeForm()">Lanjutkan</button>
                        </div>
                        <div>
                            <label class="image-placeholder mb-4" for="companyImage">
                                <div class="d-flex">
                                    <i class="fas fa-image" style="font-size: 50px"></i>
                                    <p>Masukkan gambar perusahaan</p>
                                </div>
                            </label>
                            <label class="image-placeholder" for="ownerImage">
                                <div class="d-flex">
                                    <i class="fas fa-image" style="font-size: 50px"></i>
                                    <p>Masukkan photo owner</p>
                                </div>
                            </label>
                            <div class="input-field">
                                <input id="companyImage" class="form-control d-none" type="file" placeholder="Company Image" name="company_image" value="{{ old('company_image') }}" required onchange="changeImageLabel(event)" />
                            </div>
                            <div class="input-field">
                                <input id="ownerImage" class="form-control d-none" type="file" placeholder="Owner Image" name="owner_image" value="{{ old('owner_image') }}" required onchange="changeImageLabel(event)" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="companyOmzet">
                    <h2 class="text-white">Omzet Perusahaan</h2>
                    <div class="row row-cols-2">
                        <div>
                            <div class="input-field input-group">
                                <span class="input-group-text">Rp</span>
                                <input class="form-control" type="number" placeholder="Omzet tahun lalu" name="one_year_ago" value="{{ old('one_year_ago') }}" required />
                            </div>
                            <div class="input-field input-group">
                                <span class="input-group-text">Rp</span>
                                <input class="form-control" type="number" placeholder="omzet 2 tahun lalu" name="two_year_ago" value="{{ old('two_year_ago') }}" required />
                            </div>
                            <div class="input-field input-group">
                                <span class="input-group-text">Rp</span>
                                <input class="form-control" type="number" placeholder="Perkiraan dana yang dibutuhkan" name="needed_fund" value="{{ old('needed_fund') }}" required />
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="number" placeholder="Perkiraan saham yang dilepas ke umum" name="public_stock" value="{{ old('public_stock') }}" required />
                            </div>
                            <div class="input-field input-group">
                                <span class="input-group-text">Rp</span>
                                <input class="form-control" type="number" placeholder="Omzet setelah jadi penerbit" name="profit_prediction" value="{{ old('profit_prediction') }}" required />
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn btn-warning">Selesai</button>
                                <p class="text-white m-auto" style="font-size: 30px;cursor: pointer;" onclick="resetForm()"><i class="fas fa-arrow-left"></i> Sebelumnya</p>
                            </div>
                        </div>
                        <div style="height: 500px;overflow-y:scroll">
                            <div class="input-field input-group">
                                <input class="form-control" type="number" placeholder="Perkiraan dividen tahunan" name="dividen" value="{{ old('dividen') }}" max="100" min="0" required />
                                <span class="input-group-text">%</span>
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="Video Profile (opsional)" name="video_profile" value="{{ old('video_profile') }}" />
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="link facebook perusahaan (opsional)" name="facebook" value="{{ old('facebook') }}" />
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="link linkedin perusahaan (opsional)" name="linkedin" value="{{ old('linkedin') }}" />
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="link website perusahaan (opsional)" name="company_website" value="{{ old('company_website') }}" />
                            </div>
                            <div class="input-field">
                                <input class="form-control" type="text" placeholder="Link instagram perusahaan (opsional)" name="instagram" value="{{ old('instagram') }}" />
                            </div>
                            <div class="input-field">
                                <textarea class="form-control" name="caption" placeholder="Deskripsi singkat perusahaan anda" rows="3" required>{{ old('caption') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function changeImageLabel(e) {
                        console.log(e)
                        document.querySelector("[for=" + e.target.id + "]")
                            .querySelector('p').innerHTML = e.target.files[0].name;
                    }

                    function changeForm() {
                        document.getElementById('companyDetail').style.transform = "translateX(-100vw)"
                        document.getElementById('companyOmzet').style.right = "0"
                    }

                    function resetForm() {
                        document.getElementById('companyDetail').style.transform = "translateX(0)"
                        document.getElementById('companyOmzet').style.right = "-100vw"
                    }
                </script>



                {{-- <form method="post" action="{{ url('investment') }}" class="sign-in-form" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title">Ajukan Investasi</h1>


                    <input type="submit" value="Invest!" class="btn btn-primary " />
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </form> --}}
            </div>
        </form>
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </main>
@endsection
