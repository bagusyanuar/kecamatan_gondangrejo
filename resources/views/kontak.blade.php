@extends('layout')

@section('css')
    <style>
        .comment-box {
            width: 100%;
            border: solid 1px #1c2529;
            border-radius: 5px;
            padding: 10px 10px;
        }

        .comment-avatar {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }
    </style>
@endsection

@section('content')
    <section class="container-fluid mt-5 text-center pt-5">
        <a class="sukmatrip font-weight-bold" style="color: black;">KECAMATAN GONDANGREJO</a>
        <hr class="mb-5" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor)">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-lg-6 col-md-6">
                    <p class="font-weight-bold text-justify">Hubungi Kami di : (0271) 853221</p>
                    <p class="text-left" style="color: gray">Atau</p>
                    <p class="font-weight-bold text-justify">Alamat : Tuban Kulon, Tuban, Kec. Gondangrejo, Kabupaten Karanganyar, Jawa Tengah 57188</p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4842.327039339246!2d110.80452185096576!3d-7.467844626789753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a118aa0c253a9%3A0x5f1c8687f6b1592b!2sKantor%20Kecamatan%20Gondangrejo!5e0!3m2!1sid!2sid!4v1661964647457!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
        });
    </script>
@endsection
