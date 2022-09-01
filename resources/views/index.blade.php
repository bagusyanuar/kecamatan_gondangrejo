@extends('layout')

@section('css')
    <style>
        @media only screen and (max-width: 768px) {
            /* For mobile phones: */
            .sub-greeting-1 {
                bottom: 200px !important;
            }
            .sub-greeting-2 {
                bottom: 150px !important;
            }
        }
    </style>
@endsection
@section('content')
    @if (\Illuminate\Support\Facades\Session::has('failed'))
        <script>
            Swal.fire("Gagal", '{{\Illuminate\Support\Facades\Session::get('failed')}}', "error")
        </script>
    @endif

    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire("Berhasil", '{{\Illuminate\Support\Facades\Session::get('success')}}', "success")
        </script>
    @endif
    <section>
        <div class="gambar-depan">
            <p class="w-100"
               style="position: absolute; bottom: 250px; z-index: 100; text-align: center; font-size: 2rem; color: white; font-weight: bold">
                SELAMAT DATANG DI APLIKASI <span style="color: #EB5353">SIAPMASGON</span>
            </p>
            <p class="w-100 sub-greeting-1"
               style="position: absolute; bottom: 220px; z-index: 100; text-align: center; font-size: 1rem; color: white">
                Sistem Informasi Pengaduan Masyarakat Gondangrejo
            </p>
            <p class="w-100 sub-greeting-2"
               style="position: absolute; bottom: 200px; z-index: 100; text-align: center; font-size: 1rem; color: white">
                Kami Siap Melayani Pengaduan Masyarakat Secara Online
            </p>
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

    <section class="container-fluid" id="desa-gondangrejo" style="margin-top: 3rem">
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">
            Jumlah Penduduk Se – Kecamatan Gondangrejo adalah 69.897 Jiwa Yang Terbagi Menjadi 13 Desa.
        </p>
    </section>
    <section class="container-fluid mt-5 text-center pt-5 pb-5"
             style="position: relative; background-image: url('../assets/images/aduan.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <div class="pl-5 pr-5">
                <a class="sukmatrip font-weight-bold" style="color: var(--accentColor);">ADUAN MASYARAKAT</a>
                <hr class="mb-5" style="z-index: 3; width: 5rem; border-top: 1px solid whitesmoke">
            </div>
            <div class="row justify-content-center w-100">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="font-weight-bold f16">
                                Form Pengaduan
                            </p>
                            <hr>
                            <form method="post" action="/pengaduan/create">
                                @csrf
                                <div class="form-group">
                                    <label for="nama" class="text-left w-100">Nama</label>
                                    <input type="text" class="form-control form-data-input" id="nama"
                                           aria-describedby="namaHelp" placeholder="Nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp" class="text-left w-100">No. Handphone / Whatsapp</label>
                                    <input type="number" class="form-control form-data-input" id="no_hp"
                                           aria-describedby="namaHelp" placeholder="Nama" name="no_hp" required>
                                </div>
                                <div class="form-group">
                                    <label for="pengaduan" class="text-left w-100">Aduan</label>
                                    <textarea rows="3" class="form-control form-data-input" id="pengaduan"
                                              aria-describedby="aduan" placeholder="Isi Pengaduan" name="pengaduan"
                                              required></textarea>
                                </div>
                                <hr>
                                <div class="text-right w-100">
                                    <button type="submit" class="btn bt-booknow">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="container">
        <hr style="border-color: var(--accentColor); margin-top: 7em;" class="">
    </div>
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
    <div class="container">
        <hr style="border-color: var(--accentColor); margin-top: 3em; margin-bottom: 3em" class="">
    </div>
@endsection
