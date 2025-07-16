@extends('categoria.comercio.plantilla')

@section('cuerpo')
    <link rel="stylesheet" href="{{ asset('assets/css/styleDos.css') }}">
    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-6">
            <div class="card" style="border: none;">
                <div class="card-body">
                    <div class="d-grid gap-2 d-md-block">
                        <label class="h2 fw-bold">Información</label>
                    </div>
                    <br>
                    <!-- Information Section -->
                    <p>{{ $comercio->descripcion }}</p> <br>
                    <h5>
                        <b>Dirección:</b>
                        <small class="text-body-secondary" style="color: #424949">
                            {{ $comercio->direccion }}</small>
                    </h5> 
                    <h5>
                        <b>Teléfono:</b>
                        <small class="text-body-secondary" style="color: #424949">
                            {{ $comercio->telefono }}</small>
                    </h5> 
                    <h5>
                        <b>Correo:</b>
                        <small class="text-body-secondary" style="color: #424949">
                            {{ $comercio->correo }}</small>
                    </h5> 
                    <h5>
                        <b>Facebook:</b>
                        <small class="text-body-secondary" style="color: #424949">
                            {{ $comercio->facebook }}</small>
                    </h5> 
                    <h5>
                        <b>Instagram:</b>
                        <small class="text-body-secondary" style="color: #424949">
                            {{ $comercio->instagram }}</small>
                    </h5>
                </div>
            </div>
        </div>
        <!-- End Main Content -->

        <!-- Sidebar Content -->
        <div class="col-lg-6 mt-5 p-3">
            <iframe
                src="{{ $comercio->direccion_map ? $comercio->direccion_map : 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3142579.097077072!2d-84.09072494282037!3d9.748917675105197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2scr!4v1719084252016!5m2!1ses!2scr' }}"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>


        <!-- End Sidebar Content -->
    </div>
    </div>
    </section>
    <!-- Close Content Section -->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- End Scripts -->
    </body>

    </html>
@endsection


@section('breadcrumb')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Inicio breadcrumb -->
    <nav aria-label="breadcrumb ">
        <ol class=" breadcrumb custom-breadcrumb">
            <li class=" breadcrumb-item"><a
                    href="
                    {{ route('categorias.todos') }}
                    ">Categorías</a>
            </li>
            @if(isset($categoria))
                    <li class="breadcrumb-item active"><a >{{ $categoria->nombre }}</a></li>
                @endif
            <li class="breadcrumb-item active"><a>{{ $comercio->nombre }}</a></li>
            <li class="breadcrumb-item active"><a>Información</a></li>
        </ol>
    </nav>
@endsection
