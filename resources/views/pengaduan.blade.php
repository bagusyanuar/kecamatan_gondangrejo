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
        <a class="sukmatrip font-weight-bold" style="color: black;">ADUAN MASYARAKAT</a>
        <hr class="mb-5" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor)">
        <div class="row justify-content-center">
            @foreach($data as $v)
                <div class="col-lg-8 col-md-8 col-sm-12 mb-3">
                    <div class="comment-box d-flex align-items-start">
                        <div class="comment-avatar mr-3">
                            <img src="{{ asset('/assets/images/avatar.png') }}" width="70" style="object-fit: contain">
                        </div>
                        <div class="flex-grow-1 justify-content-start w-100">
                            <p class="font-weight-bold mb-0 text-left">{{ $v->nama }} <span style="font-weight: normal; color: gray; font-size: 12px">({{ date('j F Y', strtotime($v->tanggal)) }})<span></span></p>
                            <p class="mb-0 text-justify" style="color: gray">{{ $v->pengaduan }}</p>
                            <hr class="w-100">
                            <div class="d-flex align-items-start">
                                <p class="font-weight-bold mb-0 mr-1" style="color: gray">Tanggapan</p>
                                <p class="font-italic text-justify"> : {{ $v->tanggapan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".navbar.fixed-top").addClass('scrolled');
            $(".navbar.fixed-top").addClass('scrolled');
        });
    </script>
@endsection
