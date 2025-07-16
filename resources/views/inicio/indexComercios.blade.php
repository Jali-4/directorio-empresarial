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
    <!-- Final Header -->

    <!-- Inicio contenido-->
    <section class="bg-light py-5">
        <div class="container">

            <!-- Formulario de busqueda -->
            <form action="{{ route('buscar') }}" method="GET">
              <div class="col-lg-8 m-auto">
                    <div class="input-group">
                          <input type="text" name="query" class="form-control p-3 shadow-lg border" placeholder="Buscar comercios, productos o servicios">
                            <button class="btn btn-outline-success" type="submit" id="btn_buscar">Buscar</button>
                           </div>
                        </div>
                    </form>
                    <br><br>
                    <!-- Fin del formulario -->
            <div class="row">
                {{-- <div class="col"> --}}
                    @if(isset($query) && !empty($query))
                        <h2>Estás buscando: <strong>{{ $query }}</strong></h2> <br> <br>
                    @endif
                    <div class="d-flex align-items-center">
                        <h3>Comercios</h3>
                        <hr class="flex-grow-1 mx-3 line">
                    </div>
                    {{-- <div class="row"> --}}
                        <div class="col-12">
                            <div class="row">
                                @forelse ($comercios as $comercio)
                                <div class="col-12 col-md-3 p-3 mt-3 d-flex justify-content-center">
                                    <div class="card shadow-lg move-card" style="width: 20rem;">
                                        <div class="card-img-container" style="height: 200px; overflow: hidden;">
                                            <img src="{{ $comercio->imagen_destacada }}" class="card-img-top img-fluid" alt="{{ $comercio->nombre }}" style="object-fit: contain; height: 100%; width: 100%;">
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
                                @empty
                                <p>No se encontraron comercios.</p>
                                @endforelse
                            </div>
                        </div>
                        
                    {{-- </div> --}}
                {{-- </div> --}}
                <div class="col-12">
                    <br><br><br>
                    <div class="d-flex align-items-center">
                        <h3>Productos</h3>
                        <hr class="flex-grow-1 mx-3 line">
                    </div>
                    <div class="row">
                        @forelse ($productos as $producto)
                        <div class="col-12 col-md-6 col-lg-3 p-3 mt-3 d-flex justify-content-center">
                            <div class="card shadow-lg move-card" style="width: 17rem;">
                                <div class="card-img-container" style="height: 200px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $producto->imagen_destacada) }}" class="card-img-top img-fluid" alt="Imagen destacada" style="object-fit: contain; height: 100%; width: 100%;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $producto->nombre }}</h5>
                                    <br>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <a href="{{ route('informacion', ['id' => $producto->id_producto]) }}" class="btn btn-primary" style="background-color: #59ab6e; border: none;">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>No se encontraron productos.</p>
                        @endforelse
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Final contenido -->

    <!-- JS -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }} "></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('assets/js/templatemo.js') }} "></script>
    <script src="{{ asset('assets/js/custom.js') }} "></script>
    <!-- JS -->

</body>

</html>
