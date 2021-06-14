<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MTG Companion</title>

    <!-- Custom fonts -->
    <link rel="stylesheet" href="{{ asset('js/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/auth-logo.png') }}"/>

    <!-- Custom styles-->
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
</head>
<body id="page-top">

<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('partials.navbars.top-bar')
            <div class="container-fluid">
                @yield('page-content')
            </div>
        </div>

        @include('partials.footer')
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
<script src="{{ asset('js/vendor/jquery-easing/jquery.easing.min.js') }}" ></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/template.js') }}"></script>

</body>
</html>
