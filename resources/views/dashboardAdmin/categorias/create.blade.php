@extends('dashboardAdmin.plantilla')

@section('tituloArriba')
    Crear Categoria
@endsection

@section('titulo')
    Nueva Categoria
@endsection

@section('tituloDos')
    <a href="{{ route('categorias.index') }}">Categorias</a>
@endsection

@section('tituloTres')
    <a href="">Crear categoria</a>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-sm-6 col-sm-6">
            <div class="card table-card border border-secondary">
                <form action="{{ route('categorias.store') }}" method="POST" enctype="multipart/form-data"
                    id="createCategoriaForm">
                    @csrf
                    <div class="card-header border-bottom border-secondary">
                        <h4>Nueva Categoria</h4>
                    </div>
                    <div class="card-body p-3">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre"
                                name="nombre" placeholder="Ej: Restaurantes" required>
                            @error('nombre')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <b for="productPrice">Imagen destacada</b>
                            <div class="row">
                                <div class="col-sm-8 mb-3">
                                    <div class="position-relative">
                                        <button type="button" class="btn btn-danger position-absolute btn-md rounded-pill"
                                            style="top: 5px; right: 5px;" onclick="removeImage()">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <img id="preview-image" src="https://via.placeholder.com/150" class="img-fluid"
                                            alt="Imagen 1">
                                    </div>
                                    <div class="input-group mt-3">
                                        <input type="file" class="form-control" id="imagen_destacada"
                                            name="imagen_destacada" aria-describedby="inputGroupFileAddon04"
                                            aria-label="Upload" onchange="previewImage(event)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end button-separator">
                            <button type="submit" class="btn btn-lg btn-success me-2 rounded-pill">Guardar</button>
                            <a href="{{ route('categorias.index') }}"
                                class="btn btn-lg btn-warning rounded-pill">Cancelar</a>
                        </div>
                    </div>
                </form>

                <!-- Alerta de nombre duplicado -->
                <div id="nombreDuplicadoAlert" class="alert alert-danger alert-dismissible fade show mt-3 d-none"
                    role="alert">
                    El nombre de categoría ya existe. Por favor, elija otro nombre.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <script>
                    function previewImage(event) {
                        var reader = new FileReader();
                        reader.onload = function() {
                            var output = document.getElementById('preview-image');
                            output.src = reader.result;
                        }
                        reader.readAsDataURL(event.target.files[0]);
                    }

                    function removeImage() {
                        var output = document.getElementById('preview-image');
                        output.src = 'https://via.placeholder.com/150';
                        document.getElementById('imagen_destacada').value = null;
                    }
                </script>
            </div>
        </div>
    </div>
@endsection
