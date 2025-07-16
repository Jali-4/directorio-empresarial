<!DOCTYPE html>
<html lang="en">

<head>
    <title>Comercios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }} ">
    <link rel="shortcut icon" type=" image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }} ">
    <link rel="stylesheet" href= "{{ asset('assets/css/custom.css') }} ">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset(' assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            {{-- Logo y colapso del navbar --}}
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between ">
                        <li class="nav-item contenedor-logo">
                            <a class="nav-link p logi" href="{{ route('inicio') }}"></a>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Botón del navbar --}}
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Enlaces del navbar --}}
            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link p" href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Comercios') }}">Comercios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Main Content -->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto ">
                    <br> <br>
                </div>
                <a class="navbar-brand text-success logo h1 align-self-center">
                    {{ $comercio->nombre }}
                </a>

                @yield('breadcrumb')

                <div class="container shadow">
                    {{-- <div --}}
                        {{-- style="width: 100%; height: 300px; display: flex;  overflow: hidden;"> --}}
                        <img src="{{  asset($comercio->imagen_destacada) }}" alt="Imagen Destacada"
                            style="width: 100%; height: 350px;">
                    {{-- </div> --}}
                </div>
                <section class="buttons">
                    <div class="containerr">

                        <a class="btnfos btnfos-1" href="{{ route('informacion', ['id' => $comercio->id_comercio]) }}">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%" />
                            </svg>
                            Información
                        </a>

                        <a class="btnfos btnfos-1 " href="{{ route('productos', ['id' => $comercio->id_comercio]) }}">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%" />
                            </svg>
                            Productos
                        </a>

                        <a class="btnfos btnfos-1 " href="{{ route('galeria', ['id' => $comercio->id_comercio]) }}">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%" />
                            </svg>
                            Galería
                        </a>

                        <a class="btnfos btnfos-1 " href="{{ route('contacto', ['id' => $comercio->id_comercio]) }}">
                            <svg>
                                <rect x="0" y="0" fill="none" width="100%" height="100%" />
                            </svg>
                            Contacto
                        </a>

                    </div>

                </section>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                @yield('cuerpo')
            </div>
        </div>

    </div>


    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/js/templatemo.js') }} "></script>

    <script src="{{ asset('assets/js/galeria.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }} "></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- End Script -->
</body>

</html>
