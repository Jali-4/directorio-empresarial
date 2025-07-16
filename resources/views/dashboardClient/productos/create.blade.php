@extends('dashboardClient.plantilla')

@section('TituloArriba')
    Nuevo producto
@endsection

@section('titulo')
    Nuevo producto
@endsection

@section('tituloDos')
    <a href="{{ route('edit') }}">Modificar Comercio - {{ $comercio->nombre }}</a>
@endsection

@section('tituloTres')
    Crear producto
@endsection


@section('contenido')
    <div class="row d-flex justify-content-center">

        <div class="col-lg-8 col-md-12">
            <!-- support-section start -->
            <div class="row d-flex justify-content-center">
                <div class="col-sm-8">
                    <div class="card border shadow rounded-top">
                        <form action="{{ route('productos.store') }}" method="POST">
                            @csrf
                            
                            <div class="card-title border p-2 rounded ">
                                <h3 class="text-center">Nuevo Producto</h3>
                            </div>

                            <div class="card-body">

                                <!-- Nombre del Producto -->
                                <div class="row d-flex justify-content-center">
                                    <div class="col-sm-10">

                                        <div class="form-group">
                                            <b for="productName">Nombre del Producto</b>
                                            <input type="text" class="form-control" name="nombre" placeholder="" required>
                                        </div>

                                        <div class="form-group">
                                            <b for="productPrice">Precio</b>
                                            <input type="number" class="form-control" name="precio" placeholder="$">
                                        </div>

                                        <div class="form-group">
                                            <!-- Descripción del Producto -->
                                            <b for="productDescription">Descripción</b>
                                            <textarea class="form-control border" id="productDescription" name="descripcion" rows="5" placeholder="..."></textarea>
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

            </div>
            <!-- support-section end -->
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
