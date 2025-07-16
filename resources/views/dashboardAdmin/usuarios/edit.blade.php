@extends('dashboardAdmin.plantilla')

@section('tituloArriba')
    Editar Usuario
@endsection


@section('titulo')
    Edición de Usuario
@endsection

@section('tituloDos')
    <a href="{{ route('dashboardAdmin.usuarios.index') }}">Usuarios</a>
@endsection

@section('tituloTres')
    <a href="">Editar usuario</a>
@endsection

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <form action="{{ route('accion.update', $item) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card shadow border">

                    <div class="card-header">
                        <h2 class="text-center">Editar Usuario</h2>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                value={{ $item->name }} required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value={{ $item->email }} required>
                        </div>

                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end button-separator">
                            <button type="submit" class="btn btn-lg btn-success me-2 rounded-pill">Actualizar</button>

                            <a href="{{ route('dashboardAdmin.usuarios.index') }}" type="submit"
                                class="btn btn-lg btn-warning rounded-pill">Cancelar</a>
                        </div>

                    </div>
            </form>
        </div>
    </div>
    </div>
@endsection
