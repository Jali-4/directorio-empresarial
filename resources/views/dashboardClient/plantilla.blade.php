<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('TituloArriba')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/dasb/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .scrollable {
            max-height: 237px;
            overflow-y: auto;
        }

        .button-separator {
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">


                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('usuario') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-tachometer-alt"></i>
                            </span><span class="pcoded-mtext">Administrar Comercio</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="{{ route('edit') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-edit"></i>
                            </span><span class="pcoded-mtext">Modificar
                                comercio</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="layout-vertical.html" target="_blank">Información</a></li>
                            <li><a href="layout-horizontal.html" target="_blank">Galería</a></li>
                            <li><a href="layout-horizontal.html" target="_blank">Productos</a></li>

                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Usuario</label>
                    </li>

                    <li class="nav-item pcoded-hasmenu">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <ul class="pro-body">
                                <li><a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="dropdown-item"><i class=""></i>
                                        Cerrar
                                        sesión <i class="fas fa-sign-out-alt"></i></a></li>
                            </ul>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">

        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a class="b-brand">
                {{ $comercio->nombre }}
            </a>
            <a href="#!" class="mob-toggler">
            </a>
        </div>
        <div class="container d-flex justify-content-end">

            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right: 70px">
                    <i class="fas fa-user"></i> Cerrar sesión
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <div class="pro-head">

                        <span>Sesión</span>
                        <a href="auth-signin.html" class="dud-logout" title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <ul class="pro-body">
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                    class="dropdown-item"><i class=""></i>
                                    Cerrar
                                    sesión <i class="fas fa-sign-out-alt"></i></a></li>
                        </ul>
                    </form>
                </div>
            </div>
        
        </div>

    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">@yield('titulo')</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard </a></li>
                                <li class="breadcrumb-item"><a href="#!">@yield('tituloDos') </a></li>
                                <li class="breadcrumb-item"><a href="#!">@yield('tituloTres') </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="">

                @yield('contenido')

            
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>


    <!-- custom-chart js -->
    <script src="{{ asset('assets/js/pages/dashboard-main.js') }}"></script>
</body>

</html>
