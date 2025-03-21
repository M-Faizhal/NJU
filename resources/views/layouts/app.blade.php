<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title', 'Nusa Jaya Unggul')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('temp_front/startbootstrap-agency-gh-pages/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('temp_front/startbootstrap-agency-gh-pages/css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('temp_front/startbootstrap-agency-gh-pages/js/scripts.js') }}"></script>
</body>
</html>
