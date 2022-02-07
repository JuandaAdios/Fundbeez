<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Fundbeez</title>
</head>

<body>

    <style>
        section {
            min-height: 100vh;
            overflow: hidden;
        }

        section .card {
            z-index: 1;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%)
        }

        section .card .card-body {
            padding: 50px 150px;
        }

        svg {
            position: absolute;
            bottom: 0;
        }

    </style>
    <section>
        <div class="card text-center">
            <div class="card-header">
                <img src="{{ asset('img/logo/logoFundbeez-sm.png') }}" alt="" width="200" />
            </div>
            <div class="card-body">
                <h1 class="card-title">Email anda belum terverifikasi!</h1>
                <p class="card-text">Kami telah mengirimkan anda verifikasi email! silahkan cek email anda dan klik url yang kami kirimkan!</p>
                <p class="card-text">tidak terkirim?</p>
                <a href="/email/verification-notification" class="btn btn-primary">Kirim ulang</a>
            </div>
            <div class="card-footer text-muted">
                Fundbeez Investasi | Fundbeez bisnis
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#128DA8" fill-opacity="1" d="M0,256L40,229.3C80,203,160,149,240,144C320,139,400,181,480,213.3C560,245,640,267,720,266.7C800,267,880,245,960,245.3C1040,245,1120,267,1200,256C1280,245,1360,203,1400,181.3L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
