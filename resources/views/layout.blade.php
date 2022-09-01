<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <title>Kecamatan Gondangrejo</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('/css/sweetalert2.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/sweetalert2.min.js')}}"></script>
    <style>

        html {
            scroll-behavior: smooth;
        }

        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .brand-text{
                display: none;
            }
        }
    </style>
    @yield('css')
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-transparent" style="height: 4em">
    <div class="givebgmobile">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand text-xl text-primary" href="/" style=" font-weight: bold"><img
                    style="height: 2em" src="{{ asset('/assets/images/Logo-karanganyar.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="brand-text">
                <span style="font-size: 16px; color: #541690;" class="font-weight-bold">SIAPMASGON</span>
            </div>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="text-sm ml-5  f08 navitem" href="/">BERANDA<span
                            class="sr-only">(current)</span></a>
                    <a class=" text-sm ml-5  f08 navitem" href="/pengaduan">PENGADUAN</a>
                    <a class=" text-sm ml-5  f08 navitem" href="/kontak">KONTAK</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div style="min-height: 500px;">
    @yield('content')
</div>
<section class="footer">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div>
                    <p class="font-weight-bold f20">Pemerintah Kabupaten Karanganyar</p>
                    <p class="text-justify">
                        Jl. Lawu No. 385, Komplek Perkantoran Cangaan, Karanganyar, 57712
                        Telp. 0271 - 495039
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12">
                <p class="f16">
                    <i class="fa fa-phone-square mr-2"></i>
                    Telepon Penting
                </p>
                <p class="mb-1">
                    Rumah Sakit Umum
                </p>
                <p>(0271) 495025, 495118</p>
                <p class="mb-1">
                    Penanggulangan Bencana
                </p>
                <p>
                    (0271) 495997
                    Hotline 085 2296 14 151
                </p>
                <p class="mb-1">
                    Pemadam Kebakaran
                </p>
                <p>
                    (0271) 495113
                </p>
                <p class="mb-1">
                    POLRES
                </p>
                <p>
                    (0271) 495110
                </p>
                <p class="mb-1">
                    PDAM
                </p>
                <p>
                    (0271) 495211
                </p>
                <p class="mb-1">
                    PLN
                </p>
                <p>
                    (0271) 495056
                </p>
                <p class="mb-1">
                    TELKOM
                </p>
                <p>
                    (0271) 495091
                </p>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-12">
                <p class="f16">
                    <i class="fa fa-map-marker mr-2"></i>
                    Peta Kec. Gondangrejo
                </p>
                <img src="{{ asset('/assets/images/gondangrejo-peta.jpg') }}" class="w-100">
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar.fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > 70);
        });
    });
</script>
@yield('js')
</body>
</html>
