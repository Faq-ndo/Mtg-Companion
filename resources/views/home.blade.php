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

<body class="page-top bg-gradient-dark">

<div class="wrapper">

    <div class="home-container">
        <div class="home-content">
            <h1>Search for a magic card...</h1>
            <form method="POST" action="{{ route('card.find.name') }}"
                  class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="MTG Companion"
                           aria-label="Search" aria-describedby="basic-addon2" name="name">
                </div>
            </form>
        </div>
    </div>


    @include('partials.footer')

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
