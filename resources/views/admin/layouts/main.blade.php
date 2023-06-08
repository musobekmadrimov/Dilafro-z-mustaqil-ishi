<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="{{ asset('assets/vendor/choices.js/public/assets/styles/choices.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.default.css') }}" id="theme-stylesheet">
    {{-- Bootstrap 5.1 --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
    {{-- AOS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div class="page" data-aos="fade-down" data-aos-delay="50" data-aos-duration="500">
        <!-- Main Navbar-->
        <header class="header z-index-50">
            <nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
                <!-- Search Box-->
                <div class="search-box shadow-sm">
                    <button class="dismiss d-flex align-items-center">
                        <svg class="svg-icon svg-icon-heavy">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>
                    <form id="searchForm" action="#" role="search">
                        <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
                    </form>
                </div>
                <div class="container-fluid w-100">
                    <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand --><a class="navbar-brand d-none d-sm-inline-block"
                                href="{{ route('mainPage') }}">
                                <div class="brand-text d-none d-lg-inline-block"><strong>Issiqxonalarni
                                        avtomatlashtirish
                                    </strong><span>tizimi</span></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>S H</strong></div>
                            </a>
                            <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn"
                                href="#"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center"><a id="search" href="#">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#find-1"> </use>
                                    </svg></a></li>
                            <!-- Logout    -->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <span class="d-none d-sm-inline">Chiqish</span>
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#security-1"> </use>
                                    </svg>
                                </a>
                            </li>
                            <form action="#" method="post" id="logout-form">
                                @csrf
                            </form>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar z-index-40">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex flex-column align-items-center py-4 px-3">
                    <div class="ms-3 title text-center">
                        <h1 class="h4 mb-2">Jo'rabekova Dilafruz Zafar qizi</h1>
                        <p class="text-sm text-gray-500 fw-light mb-0 lh-1">TATU Urganch filiali talabasi</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus-->
                <span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Asosiy</span>
                <ul class="list-unstyled py-4">
                    {{-- {{ dd(Request::segment(2)) }} --}}
                    <li class="sidebar-item {{ Request::segment(2) === 'greenhouses' ? 'active' : null }}"><a
                            class="sidebar-link" href="{{ route('greenhouses.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-house me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                            </svg>
                            Issiqxonalar </a>
                    </li>
                </ul>

            </nav>
            <div class="content-inner w-100" style="position: relative">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Boshqaruv paneli</h2>
                    </div>
                </header>
                <!-- Dashboard Counts Section-->
                <section class="pb-0">
                    <div class="container-fluid pl-0" style="padding-left: 0">
                        @yield('content')
                        <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs"
                            id="footer">
                            {{-- <div class="container-fluid"> --}}
                            <div class="row w-100 px-3">
                                <div class="col-sm-6 text-sm-start">
                                    <p class="mb-0">A1TechGroup &copy; 2022-2022</p>
                                </div>
                                <div class="col-sm-6 text-sm-end">
                                    <p class="mb-0"><a href="https://a1tech.uz"
                                            class="text-white text-decoration-none">A1TechGroup professional jamoasi
                                            tomonidan ishlab chiqilgan.</a></p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    {{-- Font Awesome CDN --}}

    <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/just-validate/js/just-validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/choices.js/public/assets/scripts/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/charts-home.js') }}"></script> --}}
    <!-- Main File-->
    <script src="{{ asset('assets/js/front.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite - 
        //   see more here 
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot 
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <script>
        AOS.init();
    </script>

</body>

</html>
