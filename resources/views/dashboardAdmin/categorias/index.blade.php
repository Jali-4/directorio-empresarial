@extends('dashboardAdmin.plantilla')

@section('tituloArriba')
    Administrar Categorias
@endsection


@section('titulo')
    Administrar Categorias
@endsection

@section('tituloDos')
    <a href="">Categorias</a>
@endsection

@section('contenido')
    <div class="row ">
        <div class="col-sm-12 col-sm-12">
            <div class="card table-card border border-secondary">
                <div class="card-header border-bottom border-secondary">
                    <div class="row">
                        <div class="col-sm-7">
                            <h4>Categorias</h4>
                        </div>

                        <div class="col-sm-4">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary rounded-pill">Nueva
                                    Categoria
                                    +</a>
                            </div>
                        </div>

                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
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
                        <table id="tabla"
                            class="table table-striped table-hover table-bordered text-center border">
                            <thead>
                                <tr>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Imagen destacada</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td scope="row">{{ $item->id_categoria }}</td>
                                        <td>{{ $item->nombre }}</td>
                                        <td>
                                            @if ($item->imagen_destacada)
                                                <img src="{{ asset('storage/' . $item->imagen_destacada) }}"
                                                    alt="imagen de {{ $item->nombre }}" class="img-fluid"
                                                    style="max-width: 100px;">
                                            @else
                                                No hay imagen
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('categorias.edit', $item->id_categoria) }}"
                                                class="btn btn-warning btn-sm rounded-pill"><i class="fas fa-edit"></i> </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('categorias.destroy', $item->id_categoria) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm rounded-pill"
                                                    onclick="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
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
@endsection
