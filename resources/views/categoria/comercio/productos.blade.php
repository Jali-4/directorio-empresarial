@extends('categoria.comercio.plantilla')

@section('cuerpo')
    <!-- Start Content -->
    <style>

    </style>
    <link rel="stylesheet" href="{{ asset('assets/css/styleDos.css') }}">
    <div class="d-grid gap-2 d-md-block">
        <label class="h2 fw-bold">Productos</label>
    </div>

    <div class="row ">
        @foreach ($comercio->productos as $producto)
            <div class="col-12 col-md-6 col-lg-3 p-3">
                <div class="card shadow-lg move-card fixed-card">
                    <div class="card-img-container">
                        <img src="{{ asset('storage/' . $producto->imagen_destacada) }}" class="card-img-top fixed-card-img"
                            alt="{{ $producto->nombre }}">
                    </div>
                    <div class="card-body text-center">
                        <a class="h3 text-decoration-none"><b>{{ $producto->nombre }}</b></a>
                        <p class="text-center mb-3">CR.{{ $producto->precio }}</p>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="{{ route('productos.show', $producto) }}" class="btn btn-success">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('breadcrumb')
    <!-- Inicio breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb custom-breadcrumb">
            <li class="breadcrumb-item"><a
                    href="
                    {{ route('categorias.todos') }}
                    ">Categorías</a>
            </li>
            @if(isset($categoria))
                    <li class="breadcrumb-item active"><a >{{ $categoria->nombre }}</a></li>
                @endif
            <li class="breadcrumb-item active"><a>{{ $comercio->nombre }}</a></li>
            <li class="breadcrumb-item active"><a>Productos</a></li>
        </ol>
    </nav>
@endsection
