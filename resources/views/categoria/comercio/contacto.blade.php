@extends('categoria.comercio.plantilla')

@section('cuerpo')
    <!-- public/contacto.html -->

    <link rel="stylesheet" href="{{ asset('assets/css/styleDos.css') }}">
    <section class="bg-light py-5 contacto">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6">
                    <h1 class="tituloContacto h1">Contacto</h1>
                    <p>Utilice el siguiente formulario para enviar un mensaje a <strong>{{ $comercio->nombre }}</strong> y
                        con gusto
                        le atenderemos.</p>
                </div>
            </div>
            <div class="row justify-content-start py-3">
                <div class="col-md-12">
                    <form action="{{ route('send.contact') }}" method="post">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="commerce_email" value="{{ $comercio->correo }}">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="phone">Teléfono</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Correo</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="message">Mensaje</label>
                                    <textarea class="form-control" id="message" name="message" rows="8" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-dark">Enviar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: '¡Éxito!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif
@endsection



@section('breadcrumb')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Inicio breadcrumb -->
    <nav aria-label="breadcrumb ">
        <ol class=" breadcrumb custom-breadcrumb">
            <li class=" breadcrumb-item"><a
                    href="
{{ route('categorias.todos') }}">Categorías</a>
            </li>
            @if(isset($categoria))
                    <li class="breadcrumb-item active"><a >{{ $categoria->nombre }}</a></li>
                @endif
            <li class="breadcrumb-item active"><a>{{ $comercio->nombre }}</a></li>
            <li class="breadcrumb-item active"><a>Contacto</a></li>
        </ol>
    </nav>
@endsection
