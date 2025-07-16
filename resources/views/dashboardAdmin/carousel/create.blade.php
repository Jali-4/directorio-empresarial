@extends('dashboardAdmin.plantilla')

@section('tituloArriba')
    Crear Slider
@endsection

@section('titulo')
    Nuevo Slider
@endsection

@section('tituloDos')
    <a href="{{ route('slider.index') }}">Carousel</a>
@endsection

@section('tituloTres')
    <a>Crear slider</a>
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/styleDos.css') }}">

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow border">
                <div class="card-header">
                    <h2 class="text-center">Crear Slider</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo"
                                    value="{{ old('titulo') }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="imagen" class="form-label">Imagen</label>
                                <input type="file" class="form-control" id="imagen" name="imagen" required
                                    accept="image/*" onchange="previewImage(event)">
                                @error('imagen')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <div class="mt-3">
                                    <div id="imagePreviewContainer" class="border" style="width: 200px; height: 150; overflow: hidden;">
                                        <img id="imagePreview" src="#" alt="Vista previa de la imagen" class="img-fluid" style="display: none; width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="enlace" class="form-label">Enlace</label>
                            <input type="text" class="form-control" id="enlace" name="enlace"
                                value="{{ old('enlace') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ old('descripcion') }}</textarea>
                        </div>
                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-lg btn-success me-2 rounded-pill">Registrar</button>
                        <a href="{{ route('slider.index') }}" class="btn btn-lg btn-warning rounded-pill">Cancelar</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('imagePreview');
                output.src = reader.result;
                output.style.display = 'block';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection