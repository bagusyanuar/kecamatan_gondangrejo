@extends('layout')

@section('content')

@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".navbar.fixed-top").toggleClass('scrolled');
        });
    </script>
@endsection
