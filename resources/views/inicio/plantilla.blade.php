<!DOCTYPE html>
<html lang="en">

<head>
    <title>Comercios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }} ">
    <link rel="shortcut icon" type=" image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }} ">
    <link rel="stylesheet" href= "{{ asset('assets/css/custom.css') }} ">

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

    <!-- Start Banner Hero -->
    <div id="carouselExampleCaptions" class="carousel slide n" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($data as $index => $item)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}"
                        aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}">
                </button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($data as $index => $item)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $item->imagen}}" class="d-block w-100 carousel-image" alt="...">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                        <h1 class="text-center">{{ $item->titulo }}</h1>
                        <p class="text-center">{{ $item->descripcion }}</p>
                        <div class="d-grid gap-2 col-2 mx-auto">
                            <a href="{{ $item->enlace }}" class="btn btn-outline-success text-white">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- End Banner Hero -->


    @yield('cuerpoDos')

    <!-- Start Footer -->
    <!-- <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">

                    <ul class="list-unstyled text-light footer-link-list">
                        <h2 class="h2 text-light border-bottom pb-3 border-light">Contactanos</h2>

                        <li>

                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">27654040</a>
                        </li>

                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">83091260</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none"
                                href="mailto:info@company.com">serbisiosdigitales@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Sobre Len</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Quiénes Somos</a></li>
                        <li><a class="text-decoration-none" href="#">Aviso de Privacidad</a></li>
                        <li><a class="text-decoration-none" href="#">Términos y Condiciones</a></li>
                        <li><a class="text-decoration-none" href="#">Políticas de privacidad</a></li>

                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Ayuda</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Preguntas frecuentes</a></li>
                        <li><a class="text-decoration-none" href="#">Políticas de Garantías</a></li>
                        <h2 class="h2 text-light border-bottom pb-3 border-light mt-3"> Servicio al Cliente</h2>
                        <ul class="list-unstyled text-light footer-link-list ">

                            <li>
                                <i class="bi bi-whatsapp fa-fw"></i>
                                <a class="text-decoration-none" href="#">8382-1515</a>
                            </li>

                            <li>

                            <li>
                                <i class="fa fa-phone fa-fw"></i>
                                <a class="text-decoration-none" href="#">4100-7616</a>
                            </li>

                            <li>

                                <i class="fa fa-envelope fa-fw"></i>
                                <a class="text-decoration-none" href="#">servisiocliente@unimart.com</a>
                            </li>

                        </ul>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Redes sociales</h2>
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">

                </div>
            </div>
        </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class=" text-left text-light">Derechos de autor &copy; 2024 LEN | Diseñado por el equipo de
                            LEN</p>


                    </div>
                </div>
            </div>
        </div>
    </footer> -->


    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/js/templatemo.js') }} "></script>
    <script src="{{ asset('assets/js/custom.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- End Script -->

</body>

</html>
