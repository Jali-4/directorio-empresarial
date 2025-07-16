@extends('dashboardAdmin.plantilla')

@section('tituloArriba')
    Crear Usuario
@endsection


@section('titulo')
    Nuevo Usuario
@endsection

@section('tituloDos')
    <a href="{{ route('dashboardAdmin.usuarios.index') }}">Usuarios</a>
@endsection

@section('tituloTres')
    <a href="">Crear usuario</a>
@endsection

@section('contenido')
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card shadow border">
                <div class="card-header">
                    <h2 class="text-center">Crear Usuario</h2>
                </div>
                <div class="card-body">
                    <form action={{ route('accion.store') }} method="POST">
                        @csrf <!-- Token CSRF de Laravel -->

                        <!-- Campo para el nombre -->
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <!-- Campo para el email -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Campo para la contraseña -->
                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                        </div>

                        <!-- Botón de enviar -->


                </div>
                <div class="card-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end button-separator">
                        <button type="submit" class="btn btn-lg btn-success me-2 rounded-pill">Registrar</button>
                        <a href="{{ route('dashboardAdmin.usuarios.index') }}" type="submit"
                            class="btn btn-lg btn-warning rounded-pill">Cancelar</a>

                    </div>
                </div>





            </div>
        </div>

        </form>

    </div>
@endsection
