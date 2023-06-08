<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
    {{-- AOS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/client/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>
</head>

<body class="position-relative min-vh-100">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Issiqxonalar faoliyati tizimi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="offcanvas"
                        aria-label="Close">&times;</button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 menu mt-5">
                        <li>
                            <a href="/greenhouses"
                                class="{{ Request::segment(1) === 'greenhouses' ? 'active' : null }}">Issiqxonalar</a>
                        </li>
                        
                        <li>
                            <a href="/author" class="{{ Request::segment(1) === 'author' ? 'active' : null }}">Muallif
                                haqida</a>
                        </li>
                    </ul>
                    <div class="row position-absolute bottom-0 createdBy" style="right: 15px">
                        <div class="col-md-12">
                            <a href="http://musobekmadrimov.netlify.app">
                                <p class="lead">created by Dilafro'z Jo'rabekova</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </nav>
    @yield('content')


    <section id="footer" class="bg-dark text-light position-absolute">
        <div class="container-fluid">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <p class="lead m-0">Jo'rabekova Dilafro'z Zafar qizi</p>
                    <p class="lead m-0">2022- <span id="this-year"></span></p>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="http://musobekmadrimov.netlify.app">
                        <p class="lead">created by Jo'rabekova Dilafruz</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.getElementById('this-year').innerText = new Date().getFullYear()
    </script>
</body>

</html>
