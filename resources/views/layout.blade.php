<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" type="text/css">
    <title>Kecamatan Gondangrejo</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <style >
        html { scroll-behavior: smooth; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-transparent" style="height: 4em">
    <div class="givebgmobile">
        <div class="container d-flex align-items-center">
            <a class="navbar-brand text-xl text-primary" href="#" style=" font-weight: bold"><img
                    style="height: 2em" src="{{ asset('/assets/images/Logo-karanganyar.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span style="font-size: 16px;" class="font-weight-bold">KEC. <span style="color: var(--accentColor);">GONDANGREJO</span></span>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="text-sm ml-5  f08 navitem" href="/">BERANDA<span
                            class="sr-only">(current)</span></a>
                    <a class=" text-sm ml-5  f08 navitem" href="/gallery">PENGADUAN</a>
                    <a class=" text-sm ml-5  f08 navitem" href="/contact">KONTAK</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="gambar-depan">
        <p class="w-100"
           style="position: absolute; bottom: 250px; z-index: 100; text-align: center; font-size: 2rem; color: white">
            SELAMAT DATANG DI KECAMATAN GONDANGREJO
        </p>
        <p class="w-100"
           style="position: absolute; bottom: 220px; z-index: 100; text-align: center; font-size: 1rem; color: white">
            Kami Siap Melayani Pengaduan Masyarakat Secara Online
        </p>
{{--        <div class="w-100" style=" z-index: 100; position: absolute; bottom: 180px; text-align: center">--}}
{{--            <a class="ml-auto mr-auto" href="#paket-honeymoon">Ajukan Pengaduan</a>--}}
{{--        </div>--}}
        <div class="imagesContainer">
            <img class="image-as-bg" src="{{ asset('/assets/images/kec-gondangrejo.jpg') }}">
            <img class="image-as-bg fadeInClass" src="{{ asset('/assets/images/krendhowahono.jpg') }}">
        </div>
        <div class="gradien-putih"></div>
        <div class="transparent-hitam"></div>

        <div class="d-flex justify-content-center align-items-center h-100 flex-column">
        </div>
    </div>
</section>

<section class="container-fluid" id="desa-gondangrejo" style="margin-top: 6rem">
    <p style="font-weight: 300; color: #636363;" class="text-center f14 container">
        Jumlah Penduduk Se – Kecamatan Gondangrejo adalah 69.897 Jiwa Yang Terbagi Menjadi 13 Desa.
    </p>
</section>
<section class="container">
    <div class="text-center mt-5 mb-5">
        <a class="sukmatrip" style="color: black">DESA DI GONDANGREJO</a>
        <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/bulurejo.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">BULUREJO</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/dayu.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">DAYU</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/jatikuwung.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">JATIKUWUNG</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/jeruksawit.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">JERUKSAWIT</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/karangturi.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">KARANGTURI</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/kragan.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">KRAGAN</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/krendowahono-kantor.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f14 mb-0">KRENDOWAHONO</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/plesungan.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">PLESUNGAN</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/rejosari.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">REJOSARI</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/selokaton.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">SELOKATON</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/tuban.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">TUBAN</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/wonorejo.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">WONOREJO</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12">
            <a class="gen-card-produk" href="#">
                <img src="{{ asset('/assets/images/wonosari.jpg') }}">
                <div class="cover-black-bottom"></div>
                <div class="content" style="justify-content: center">
                    <p class="text-white f18 mb-0">WONOSARI</p>
                    <hr style="width: 3em; border-color: white;" class="mb-2">
                </div>
            </a>
        </div>
    </div>
</section>
<hr style="border-color: var(--accentColor); margin-top: 7em;" class="container">
<section class="container mt-5 text-center">
    <div class="text-center mb-4" style="margin-top: 6rem">
        <a class="sukmatrip" style="color: black">Aduan Masyarakat</a>
        <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
    </div>
    <p class="text-center f26 mb-3">Aduan Dari Masyarakat Gondangrejo</p>
</section>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(function () {
        $(document).scroll(function () {
            var $nav = $(".navbar.fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > 70);
        });
    });
</script>
</body>
</html>
