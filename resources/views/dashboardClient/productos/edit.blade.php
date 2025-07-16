@extends('dashboardClient.plantilla')

@section('TituloArriba')
    Editar producto
@endsection

@section('titulo')
    Edición del producto
@endsection

@section('tituloDos')
    <a href="{{ route('edit') }}">Modificar Comercio</a>
@endsection

@section('tituloTres')
    Editar producto
@endsection


@section('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-12">

            <div class="card border border-primary shadow">
                <form action="{{ route('productos.update',  $producto) }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-header" style="color: rgb(250, 252, 252); background-color: rgba(162, 215, 247, 0.549)">
                        <h4 class="">Información de Producto</h4>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <b for="productName">Nombre del Producto</b>
                                    <input type="text" class="form-control" name="nombre" placeholder="" value="{{ $producto->nombre }}" required>
                                </div>
                                <div class="form-group">
                                    <b for="productPrice">Precio</b>
                                    <input type="number" class="form-control" name="precio" placeholder="$"value="{{ $producto->precio }}"  required>
                                </div>

                                <div class="form-group">
                                    <!-- Descripción del Producto -->
                                    <b for="productDescription">Descripción</b>
                                    <textarea class="form-control" name="descripcion" rows="5" placeholder="...">{{ $producto->descripcion }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-7">
                                <div class="form-group">
                                    <b for="imagen_destacada">Imagen destacada</b>
                                    <div class="row">
                                        <div class="col-sm-8 mb-3">
                                            <div class="position-relative">
                                                <button type="button" class="btn btn-danger position-absolute btn-md rounded-pill" style="top: 5px; right: 5px;" onclick="removeImage()">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                <img id="preview-image" src="{{ asset('storage/' . $producto->imagen_destacada) }}" class="img-fluid" alt="Aquí va la imagen">
                                            </div>
                                            <div class="input-group mt-3">
                                                <input type="file" class="form-control" id="imagen_destacada" name="imagen_destacada" accept="image/*" aria-describedby="inputGroupFileAddon04" aria-label="Upload" onchange="previewImage(event)">
                                                <!-- Hidden input to track if the image should be deleted -->
                                                <input type="hidden" name="delete_image" id="delete_image" value="false">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-lg btn-success button-separator rounded-pill">Guardar
                            Producto</button>
                        <a href="{{ route('edit') }}" class="btn btn-lg btn-warning rounded-pill">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>

        <div class="col-sm-6">
            <div class="card shadow">
                <div class="card-header" style="background-color: rgba(169, 197, 168, 0.442)">
                    <h4 class="">Galería del Producto</h4>
                </div>
                <div class="card-body p-3" style="max-height: 275px; overflow-y: auto;">
                    <div class="form-group">
                        <div class="row">
                            @foreach($producto->imagenes as $imagen)
                            <div class="col-md-3 mb-3">
                                <div class="position-relative">
                                    <form action="{{ route('galeria.destroy', $imagen->id_imagen_producto) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-danger rounded-pill position-absolute btn-sm"
                                            style="top: 5px; right: 5px;"><i class="fas fa-trash"></i></button>
                                    </form>
                                    <img src="{{ asset('storage/' . $imagen->ruta_imagen) }}" class="img-fluid"
                                        alt="Imagen de Producto">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        
                <div class="card-footer">
                    <form action="{{ route('galeria.update', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    
                        <div class="row p-3">
                            <div class="col-sm-10">
                                <div class="input-group mt-3">
                                    <input type="file" name="imagenes[]" class="form-control" multiple
                                           aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                </div>
                            </div>
                        </div>
                    
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button class="btn btn-primary rounded-pill" type="submit" id="inputGroupFileAddon04">Presiona aquí para subir imágenes <i class="fas fa-cloud-upload-alt"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    function removeImage() {
        const preview = document.getElementById('preview-image');
        const imageInput = document.getElementById('imagen_destacada');
        const deleteImageInput = document.getElementById('delete_image');

        // Clear the preview and input
        preview.src = '';
        imageInput.value = '';
        
        // Set the hidden input value to indicate the image should be deleted
        deleteImageInput.value = 'true';
    }

    function previewImage(event) {
        const preview = document.getElementById('preview-image');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                // Reset the hidden input value if a new image is selected
                document.getElementById('delete_image').value = 'false';
            }
            reader.readAsDataURL(file);
        } else {
            preview.src = '';
        }
    }
</script>

    @endsection
