<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/userStyle.css') }}"
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('css/bootstrap/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('css/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
    <title>Meloncia</title>
</head>
<body class="d-flex flex-column h-100">

    @include('partials.header')
    @include('partials.navbar')
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">

      <div class="container-fluid">
      <div class="row justify-content-between">
            <div class="col-lg-2 col-sm-12 border border-danger px-3 m-3 align-content-around">
                @include('partials.asideLF')
            </div>
                <div class="col-lg-7 col-sm-12 text-center my-5 border border border-primary">
                    @yield('content')
                </div>
            <div class="col-lg-2 col-sm-12 border border-danger p-5 m-3">
                @include('partials.asideRG')
            </div>
      </div>
      </div>
    </main>

    @include('partials.footer')
    
</body>
</html>