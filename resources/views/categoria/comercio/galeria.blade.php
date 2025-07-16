@extends('categoria.comercio.plantilla')

@section('cuerpo')
    <link rel="stylesheet" href="{{ asset('assets/css/styleDos.css') }}">
    <div class="ful-img" id="fulImgBox">
        <button id="prevImg" onclick="prevImg()">&#10094;</button>
        <img src="" id="fulImg" alt="">
        <button id="nextImg" onclick="nextImg()">&#10095;</button>
        <span onclick="closeImg()">X</span>
    </div>

    <div class="container p-3">
        <br>
        <div class="d-grid gap-2 d-md-block">
            <label class="h2 fw-bold">Galería</label>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 img-gallery">
            @foreach ($comercio->imagenes as $imagen)
                <div class="col mb-4">
                    <img src="{{ asset('storage/' . $imagen->ruta_img) }}" class="img-fluid rounded shadow border"
                        onclick="openFulImg(this.src)" alt="Imagen de {{ $comercio->nombre }}">
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('assets/js/galeria.js') }}"></script>
@endsection

@section('breadcrumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb custom-breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('categorias.todos') }}">Categorías</a>
            </li>
            @if(isset($categoria))
                    <li class="breadcrumb-item active"><a >{{ $categoria->nombre }}</a></li>
                @endif
            <li class="breadcrumb-item active"><a>{{ $comercio->nombre }}</a></li>
            <li class="breadcrumb-item active"><a>Galería</a></li>
        </ol>
    </nav>
@endsection
