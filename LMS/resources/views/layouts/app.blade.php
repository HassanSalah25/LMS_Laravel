<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>ADMIN: Management Data Table</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- !-->

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');*{margin: 0;padding: 0;box-sizing: border-box;list-style: none;font-family: 'Montserrat', sans-serif}body{padding: 10px}.topnav{background-color: #ffff;overflow: hidden}.far.fa-user-circle{font-size: 29px;color: #726f6f;padding-top: 10px}.input-10{width: 40px;color: #4c4c96;font-weight: 600}.fas.fa-search{display: flex;flex-direction: column;align-items: center;justify-content: center;background-color: lightsalmon;height: 100%}.topnav a{float: left;display: block;color: #8d8b8b;font-weight: 800;font-size: 14px;text-transform: uppercase;padding: 14px 16px;text-decoration: none;border-bottom: 3px solid transparent}.topnav a:hover{color: black;border-bottom: 3px solid red}.topnav .active{color: black;border-bottom: 3px solid red}form.example input[type=text]{padding: 10px;font-size: 17px;border: 1px solid grey;float: left;width: 90%;height: 36px;background: #fff}form.example input[type=text]:focus{outline: none}form.example button{float: left;width: 10%;height: 36px;padding: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;background: #4c4c96;color: white;font-size: 14px;border: 1px solid grey;border-left: none;cursor: pointer}.navbar-toggler:focus{box-shadow: none;outline: none;border: none}::placeholder{font-size: 10px}form.example button:hover{background: #0b7dda}form.example::after{content: "";clear: both;display: table}.container .table-responsive{margin: 20px auto;overflow-x: auto}.container .table-responsive::-webkit-scrollbar{height: 5px}.container .table-responsive::-webkit-scrollbar-thumb{border-radius: 5px;background-image: linear-gradient(to right, #5D7ECD, #0C91E6)}.table thead tr th{font-size: 11px;color: #868585;padding: 10px 10px}.table tbody tr td{font-size: 13.5px;padding: 10px 10px}#navbar{width: 20%;background-color: #21214e !important;height: 50px;border: none}.bg-blight{color: #7f7fee;font-weight: 600}.bg-bdark{color: #4c4c96;font-weight: 600}#navbar a{color: white}.fas.fa-bars{color: white}#navbar2{width: 80%}#navbar-items{width: 20%;height: 500px;background-color: #4f4f8a}ul#navbar-items li{color: #b6b5b5;padding: 15px 25px;font-weight: 600;text-transform: uppercase;font-size: 10px;display: flex;align-items: center}ul li .fas{font-size: 16px}ul#navbar-items li:hover{background-color: #21214e;color: white}ul li:hover .fas{color: #f7910c}#topnavbar{width: 80%}.fs13{font-size: 13px}.fs14{font-size: 18px;color: white}.fas.fa-times{color: red}.fas.fa-check{color: greenyellow}.example{width: 50%}@media(max-width:780px){#navbar{width: 20%}#topnavbar{width: 80%}.text-decoration-none.fs14{font-size: 10px}.text-decoration-none .fs13{font-size: 9px}}@media(max-width:430px){#navbar-items, #topnavbar{width: 100%;height: 100%}#navbar-items{padding: 20px;margin-bottom: 30px}.topnav a{font-size: 12px;padding: 12px}#navbar{width: 100%;background-color: blue}.example{width: 100%}.text-decoration-none.fs14{font-size: 14px}.text-decoration-none .fs13{font-size: 13px}}@media(max-width:376px){#navbar-items{padding: 20px;margin-bottom: 30px}.topnav a{font-size: 12px;padding: 7px}}@media(max-width:320px){.topnav a{font-size: 10px;padding: 4px}}

    </style>

    </head>
    <dev class="error">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </dev>


    <dev class="nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admins/">admins <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/students/">Students <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/staffs/">Staffs <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/courses/">Courses <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/contact-us/">Contact-US  <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/user/">Profile  <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="/market/">Market  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/order/">Order  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/posts/">POSTS  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/main/">Dashboard  <span class="sr-only">(current)</span></a>
                    </li>


{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Dropdown--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="#">Action</a>--}}
{{--                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

    </dev>
    @yield('content')

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
             @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                </div>
            </header>
            <!-- Page Content -->

            <main>
            </main>
        </div>


    </body>
</html>
