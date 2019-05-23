<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <!-- <script src="{{ asset('css/bootstrap/js/jquery-3.3.1.js') }}"></script>-->
  
    <script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>

    <link href="{{ asset('img/melonaIco.ico') }}" rel='shortcut icon' type='image/x-icon'>
    <title>SocialTX</title>
</head>
<body class="d-flex flex-column h-100" >


    @include('partials.navbar')
    <!-- Begin page content -->
    <main role="main" id="main" class="flex-shrink-0">

      <div class="container">
      <div class="row justify-content-between">
            <div class="col-lg-2 col-sm-12 my-5 align-content-around">
        @if (Auth::check())
                @include('partials.asideLF')
        @endif
            </div>
            <div class="col-lg-8 col-sm-12 text-center my-5">
                @yield('content')
            </div>
            <div class="col-lg-2 col-sm-12 my-5">
        @if (Auth::check())
                @include('partials.asideRG')
        @endif
            </div>
      </div>
      </div>
    </main>

  
    

</body>
</html>