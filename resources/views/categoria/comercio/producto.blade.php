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


    <link rel="stylesheet" href="{{ asset('assets/css/producto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styleDos.css') }}">

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

    <style>
        /* .dropdown-toggle::after {
        display: none;
    } */
    </style>

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
                            <a class="nav-link p logi" href=""></a>
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
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 m-auto ">

                    <input type="text" class="form-control p-3 shadow-lg border"
                        placeholder="Buscar comercios, productos o servicios">
                    <br> <br>

                </div>



                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <a href="{{ route('productos', ['id' => $comercio->id_comercio]) }}"
                                class="btn btn-success mt pl-5 pr-5">
                                <i class="bi bi-box-arrow-left"></i>
                                < Regresar </a>
                        </div>
                        <div class="col">
                            <a class="navbar-brand text-success logo h1" href="#">
                                {{ $producto->nombre }}
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Inicio breadcrumb -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb custom-breadcrumb">
                        <li class="breadcrumb-item"><a href="">Categorías</a>
                        </li>
                        <li class="breadcrumb-item"><a href="
                    
                    ">Hoteles</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="">{{ $producto->nombre }}</a></li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('productos', ['id' => $comercio->id_comercio]) }}">Productos</a></li>
                        <li class="breadcrumb-item active"><a>{{ $producto->nombre }}</a></li>
                    </ol>
                </nav>

                <script src="{{ asset('assets/js/producto.js') }}"></script>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                            <div class="product-container">
                                <div class="main-image-container shadow">
                                    <img src="{{ asset('storage/' . $producto->imagen_destacada) }}" id="mainImage"
                                        alt="Imagen Principal" class="img-fluid">
                                </div>

                                <div class="thumbnail-gallery">
                                    <div class="thumbnails">
                                        <img src="{{ asset('storage/' . $producto->imagen_destacada) }}"
                                            onclick="changeMainImage(this.src)" class="img-fluid thumbnail-img">
                                        @foreach ($producto->imagenes as $imagen)
                                            <img src="{{ asset('storage/' . $imagen->ruta_imagen) }}"
                                                onclick="changeMainImage(this.src)" alt=""
                                                class="img-fluid thumbnail-img">
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <script>
                                function changeMainImage(src) {
                                    document.getElementById('mainImage').src = src;
                                }
                            </script>
                        </div>

                        <div class="col-12 col-lg-6 textoo mt-3">
                            <div class="mt-3 mt-lg-0">
                                <h1 class="text-startH1">Descripción</h1>
                                <p class="loren text-wrap"><br>
                                    <label>{{ $producto->descripcion }}</label>
                                </p> <br>
                                <h5><b>Precio:</b> <span class="d-inline">{{ $producto->precio }}</span></h5>
                                <h5><b>Comercio:</b> <span class="d-inline">{{ $comercio->nombre }}</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>

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
                <!-- End Script -->
</body>

</html>
