<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar Comercio</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/dasb/style.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .scrollable {
            max-height: 460px;
            /* Ajusta esta altura según sea necesario */
            overflow-y: auto;
        }
    </style>
</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('usuario') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-tachometer-alt"></i>
                            </span><span class="pcoded-mtext">Administrar Comercio</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="{{ route('edit') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="fas fa-edit"></i>
                            </span><span class="pcoded-mtext">Modificar
                                comercio</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="layout-vertical.html" target="_blank">Información</a></li>
                            <li><a href="layout-horizontal.html" target="_blank">Galería</a></li>
                            <li><a href="layout-horizontal.html" target="_blank">Productos</a></li>

                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Usuario</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <ul class="pro-body">
                                <li><a href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="pcoded-mtext"><i class=""></i>
                                        <span class="pcoded-mtext">Cerrar sesión</span> <i
                                            class="fas fa-sign-out-alt"></i></a></li>
                            </ul>
                        </form>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                Modificar
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="container d-flex justify-content-end">

            <div class="dropdown drp-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right: 70px">
                    <i class="fas fa-user"></i> Cerrar sesión
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <div class="pro-head">

                        <span>Sesión</span>
                        <a href="auth-signin.html" class="dud-logout" title="Logout">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <ul class="pro-body">
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                    class="dropdown-item"><i class=""></i>
                                    Cerrar
                                    sesión <i class="fas fa-sign-out-alt"></i></a></li>
                        </ul>
                    </form>
                </div>
            </div>

        </div>



    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Modificar Comercio</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('usuario') }}">Dasboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('edit') }}">Modificar Comercio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->

            <div class="row p-3">
                <div class="col-sm-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a type="button" href="{{ route('usuario') }}" class="btn btn-lg btn-success rounded-pill">
                            Terminar edición del comercio</a>
                    </div>
                </div>
            </div>

            {{-- INFORMACIÓN COMERCIO --}}
            <div class="row" id="informacion">
                <div class="col-sm-12">

                    <div class="card border border-primary">
                        <div
                            class="card-header border-bottom border-primary d-flex justify-content-between align-items-center">
                            <h4 class="text-c-blue">Información</h4>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('comercio.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label><b>Nombre del comercio:</b></label>
                                                <input type="text" class="form-control" name="nombre"
                                                    value="{{ old('nombre', $comercio->nombre) }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label> <b>Dirección:</b></label>
                                                <input type="text" class="form-control" name="direccion"
                                                    value="{{ old('direccion', $comercio->direccion) }}">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label><b>Ubicación:</b></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="direccion_map"
                                                            value="{{ old('direccion_map', $comercio->direccion_map) }}">
                                                        <div class="input-group-append">
                                                            <a href="https://www.google.com/maps" target="_blank"
                                                                class="input-group-text">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="categorias"> <b>Elige la categoría a la que pertenece: </b></label>
                                                    <select name="categorias[]" id="categorias" class="form-control"
                                                        multiple>
                                                        @foreach ($categorias as $categoria)
                                                            <option value="{{ $categoria->id_categoria }}"
                                                                {{ in_array($categoria->id_categoria, $comercioCategorias) ? 'selected' : '' }}>
                                                                {{ $categoria->nombre }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      

                                      
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label>Teléfono:</label>
                                                <input type="text" class="form-control" name="telefono"
                                                    value="{{ old('telefono', $comercio->telefono) }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Correo Electrónico:</label>
                                                <input type="email" class="form-control" name="correo"
                                                    value="{{ old('correo', $comercio->correo) }}">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group row">
                                            <div class="col-sm-6">
                                                <label>Facebook:</label>
                                                <input type="text" class="form-control" name="facebook"
                                                    value="{{ old('facebook', $comercio->facebook) }}">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Instagram:</label>
                                                <input type="text" class="form-control" name="instagram"
                                                    value="{{ old('instagram', $comercio->instagram) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Información:</label>
                                            <textarea class="form-control border border-secondary" name="descripcion" id="informacion" rows="7">{{ old('descripcion', $comercio->descripcion) }}</textarea>
                                        </div>

                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="productPrice">Imagen destacada:</label>
                                            <div class="row">
                                                <div class="col-sm-8 mb-4">
                                                    <div class="position-relative">
                                                        <button type="button"
                                                            class="btn btn-danger position-absolute btn-lg rounded-pill"
                                                            style="top: 5px; right: 5px;">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                        <img src="{{ asset($comercio->imagen_destacada) }}"
                                                            class="img-fluid" alt="Imagen 1">
                                                    </div>
                                                    <div class="input-group mt-3">
                                                        <input type="file" class="form-control"
                                                            name="imagen_destacada" id="inputGroupFile04"
                                                            aria-describedby="inputGroupFileAddon04"
                                                            aria-label="Upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-lg btn-success me-2 rounded-pill"
                                            style="width: 500px;">Guardar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            {{-- FIN INFORMACIÓN COMERCIO --}}


            {{-- GALERIA DE COMERCIO --}}
            <div class="row" id="galeria">
                <div class="col-sm-12">
                    <div class="card border border-danger">
                        <div class="card-header border-bottom border-danger">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="text-c-red">Galería</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body scrollable">
                            <div class="row">
                                @foreach ($comercio->imagenes as $imagen)
                                    <div class="col-md-2 mb-3">
                                        <div class="position-relative">
                                            <form
                                                action="{{ route('galeriaComercio.destroy', $imagen->id_imagen_comercio) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-danger rounded-pill position-absolute btn-sm"
                                                    style="top: 5px; right: 5px;">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            <img src="{{ Storage::url($imagen->ruta_img) }}" class="img-fluid"
                                                alt="Imagen Comercio">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-footer">
                            <form action="{{ route('galeriaComercio.update', $comercio->id_comercio) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="imagenes[]"
                                                id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                                                aria-label="Upload" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center mt-3">
                                    <button class="btn btn-lg btn-success rounded-pill" type="submit"
                                        id="inputGroupFileAddon04">
                                        Subir imágenes <i class="fas fa-cloud-upload-alt"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            {{-- FIN GALERÍA COMERCIO --}}


            {{-- PRODUCTOS --}}
            <div class="row " id="productos">
                <div class="col-sm-12 col-sm-7">
                    <div class="card table-card border border-success">
                        <div class="card-header border-bottom border-success">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h4 class="text-c-green">Productos</h4>
                                </div>

                                <div class="col-sm-4">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a href="{{ route('productos.create') }}"
                                            class="btn btn-primary rounded-pill">Nuevo producto +</a>
                                    </div>
                                </div>

                                <div class="card-header-right">
                                    <div class="btn-group card-option">
                                        <button type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>

                                        </button>
                                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                            <li class="dropdown-item full-card"><a href="#!"><span><i
                                                            class="feather icon-maximize"></i> maximize</span><span
                                                        style="display:none"><i class="feather icon-minimize"></i>
                                                        Restore</span></a></li>
                                            <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                            class="feather icon-minus"></i> collapse</span><span
                                                        style="display:none"><i class="feather icon-plus"></i>
                                                        expand</span></a></li>
                                            <li class="dropdown-item reload-card"><a href="#!"><i
                                                        class="feather icon-refresh-cw"></i> reload</a></li>
                                            <li class="dropdown-item close-card"><a href="#!"><i
                                                        class="feather icon-trash"></i> remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card-body p-3">
                            <div class="table-responsive">

                                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
                                    aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmación de
                                                    Eliminación</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ¿Estás seguro de que deseas eliminar este producto?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button id="confirmDeleteButton" type="submit"
                                                    class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <table id="tabla-productos" class="table table-hover mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Imagen destacada</th>
                                            <th>Acciones</th>
                                            {{-- <th class="text-right"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productos as $item)
                                            <tr class="text-center">
                                                <td>
                                                    <h6>{{ $item->nombre }}</h6>
                                                </td>
                                                <td>{{ $item->descripcion }}</td>
                                                <td>{{ $item->precio }}</td>
                                                <td>
                                                    @if ($item->imagen_destacada)
                                                        <img src="{{ asset('storage/' . $item->imagen_destacada) }}"
                                                            alt="imagen de {{ $item->nombre }}" class="img-fluid"
                                                            style="max-width: 100px;">
                                                    @else
                                                        No tiene imagen
                                                    @endif
                                                </td>

                                                <td class="text-center">
                                                    <div class="btn-group" role="group" aria-label="Acciones">
                                                        <a href="{{ route('productos.edit', $item) }}"
                                                            class="btn btn-warning rounded-pill">
                                                            <i class="fas fa-edit"></i> Editar Producto
                                                        </a>
                                                        <form action="{{ route('productos.destroy', $item) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger rounded-pill"
                                                                onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?')">
                                                                <i class="fas fa-trash"></i> Eliminar
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- FIN PRODUCTOS --}}

            <div class="row p-3">
                <div class="col-sm-12">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a type="button" href="{{ route('usuario') }}" class="btn btn-lg btn-success rounded-pill">
                            Terminar edición del comercio</a>
                    </div>
                </div>
            </div>


        </div>
        <!-- [ Main Content ] end -->

        </div>
    </section>

    <!-- Required Js -->
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripple.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabla-productos').DataTable({
                "ordering": false // Desactiva el ordenamiento automático para todas las columnas
            });
        });
    </script>
</body>

</html>
