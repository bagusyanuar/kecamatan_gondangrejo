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
    <title>Form Login Admin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('/css/sweetalert2.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/sweetalert2.min.js')}}"></script>
    <style>
        .login-body {
            height: 100vh;
            background-color: #FDD100;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-icon {
            width: 100%;
            height: 70px;
            object-fit: contain;
        }

        .login-title {
            font-weight: bold;
            letter-spacing: 0.5em;
            font-size: 20px;
        }
    </style>
</head>
<body>
@if (\Illuminate\Support\Facades\Session::has('failed'))
    <script>
        Swal.fire("Gagal", '{{\Illuminate\Support\Facades\Session::get('failed')}}', "error")
    </script>
@endif
<div class="w-100 login-body">
    <div class="row w-100 justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-11">
            <div class="card">
                <div class="card-body">
                    <img src="{{ asset('/assets/images/Logo-karanganyar.png') }}" class="w-100 login-icon mb-3"/>
                    <p class="login-title w-100 text-center mb-0"><span style="color: #FDD100">SIAP</span>MASGON</p>
                    <p class="w-100 text-center" style="letter-spacing: 0.2em;">Sistem informasi pengaduan
                        masyarakat gondangrejo</p>
                    <hr>
                    <form method="post">
                        @csrf
                        <div class="w-100 mb-1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Username"
                                   name="username">
                        </div>
                        <div class="w-100 mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password"
                                   name="password">
                        </div>
                        <hr>
                        <div class="w-100 mb-2 mt-3">
                            <button type="submit" class="btn btn-primary w-100 p-3">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
