@extends('inicio.plantilla')

@section('cuerpoDos')
    <!-- Start Categories of The Month -->
    <section class="container pt-3">
        <div class="row text-start pt-3">
        <form action="{{ route('buscar') }}" method="GET">
              <div class="col-lg-8 m-auto p-3">
                    <div class="input-group">
                          <input type="text" name="query" class="form-control p-3 shadow-lg border" placeholder="Buscar comercios, productos o servicios">
                            <button class="btn btn-outline-success" type="submit" id="btn_buscar">Buscar</button>
                           </div> 
                        </div> <br> <br>
                    </form>
                    <br><br>
            <div class="col-sm-12 m-auto">
                <div class="d-flex align-items-center">
                    <h3>Comercios recientes</h3>
                    <hr class="flex-grow-1 mx-3 line">
                </div>
            </div>
        </div> 
        <div class="row">
            @foreach ($comercios as $comercio)
                <div class="col-12 col-md-4 p-3 mt-3 d-flex justify-content-center">
                    <div class="card shadow-lg move-card" style="width: 26rem;">
                        <div class="card-img-container">
                            <img src="{{ $comercio->imagen_destacada }}" class="card-img-top img-fluid" alt="{{ $comercio->nombre }}">
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
        </div>
        
        <style>
            .card-img-container {
                height: 300px; /* Altura fija para la imagen */
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        
            .card-img-top {
                width: auto;
                height: 100%;
                object-fit: contain; /* Ajusta la imagen para que se vea completa */
            }
        </style>
    </section>
    
    
    <section class="container py-5 ">
        <div class="row text-start">
            <div class="col-md-12 m-auto">
                {{-- <h1 class="h1">Categories of The Month</h1> --}}

                <div class="d-flex align-items-center">
                    <h3>Categorias</h3>
                    <hr class="flex-grow-1 mx-3 line">
                </div>
            </div>
        </div>

        {{-- CATEGORÍAS --}}
        <div class="row">
            @foreach ($categorias as $categoria)
                <div class="col-12 col-md-6 col-lg-3 p-3 mt-3 d-flex justify-content-center">
                    <div class="card shadow-lg move-card" style="width: 17rem;">
                        <div class="card-img-container">
                            <img src="{{ asset('storage/' . $categoria->imagen_destacada) }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $categoria->nombre }}</h5>
                            <br>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <a href="{{ route('categoria', ['id' => $categoria->id_categoria]) }}" class="btn btn-success">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <style>
            .card-img-container {
                height: 200px; /* Altura fija para la imagen */
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        
            .card-img-top {
                width: auto;
                height: 100%;
                object-fit: cover; /* Ajusta la imagen para cubrir el contenedor */
            }
        </style>
        

    </section>

    <!-- End Categories of The Month -->
@endsection
