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


    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-8 m-auto ">
                <input type="text" class="form-control p-3 shadow-lg border"
                    placeholder="Buscar comercios, productos o servicios">
                <br> <br>
            </div>

            <div class="col-lg-8 m-auto ">
                {{-- <div class="row"> --}}
                    <h1 class="display-6 m-3">Categoría: {{ isset($categoria) ? $categoria->nombre : 'Todas las Categorías' }}</h1>
                {{-- </div> --}}
            </div>

            <div class="row">
                <div class="col-lg-3">
                    
                    <h1 class="h2 pb-4">Categorías</h1>
                    @foreach ($categorias as $cat)
                    <a href="{{ route('categoria', ['id' => $cat->id_categoria]) }}" class="d-flex justify-content-between h3 text-decoration-none">
                        {{ $cat->nombre }} ({{ $cat->comercios_count }})
                    </a>
                    @endforeach
                </div>
            
                <div class="col-lg-9">
                   
            
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <h3>Comercios</h3>
                            <hr class="flex-grow-1 mx-3 line">
                        </div>
                        @if(isset($comercios) && $comercios->isNotEmpty())
                        @foreach ($comercios as $comercio)
                            <div class="col-12 col-md-4 p-3 mt-3 d-flex justify-content-center">
                                <div class="card shadow-lg move-card" style="width: 20rem;">
                                    <div class="card-img-container" style="height: 200px; overflow: hidden;">
                                        <img src="{{ asset( $comercio->imagen_destacada) }}" class="card-img-top img-fluid" alt="{{ $comercio->nombre }}" style="object-fit: contain; height: 100%; width: 100%;">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-center">{{ $comercio->nombre }}</h5>
                                        <br>
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a href="{{ route('informacion', ['id' => $comercio->id_comercio]) }}" class="btn btn-success">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="col-12 ">
                                <p class="text-center">Aún no existen comercios en esta categoría.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>


            <!-- Paginación -->
            <div div="row">
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                            tabindex="-1">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                            href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                            href="#">3</a>
                    </li>
                </ul>
            </div> <!-- Fin paginación -->
        </div>
    </div>
    </div>
    <!-- Fin de contenido -->

    <!-- Start Script -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo.js') }} "></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>
