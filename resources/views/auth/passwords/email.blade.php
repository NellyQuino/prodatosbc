<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PRODATOSBC</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <script>
 <-- Fontawesome icons-->
 <script src="https://kit.fontawesome.com/4d9cd3b44e.js" crossorigin="anonymous"></script>
</head>

<body style="background:#F3F3F3;">
<!-- <div class="alert alert-danger" role="alert">
  <h1> CIERRA LAS PESTAÑAS PUERCO</h1>A simple danger alert—check it out!
</div> -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 row justify-content-center">
                 <img src="{{ asset('/images/logo_PRODATOS.fw.png') }}" width="350" loading="lazy" />
                <div class="card" style="height: 40rem;">
                    <div class="card-header" style="color: #BE3286;font-size:250%;font-family:inter;text-align:center"><b>{{ __('Restablecer contraseña') }}</b></div>

                    <div class="card-body row justify-content-center mt-4 mx-auto">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="input-group mt-4 text-center" >
                            <label for="email">{{ __('Favor de ingresar el correo electronico del oficial a cargo') }}</label>
                            <div class="input-group mt-4">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary btn-lg" style="background-color:#029395; width:100%;">
                                    {{ __('Enviar enlace para restablecer contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
</body>
