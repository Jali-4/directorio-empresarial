@extends('dashboardAdmin.plantilla')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-10">
                            <h4 class="text-c-yellow">Carousel</h4>
                            <h6 class="text-muted m-b-0">Administrar su información</h6>
                        </div>
                        <div class="col-2 text-right">
                            <i class="fas fa-images text-c-yellow"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-yellow">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <a href="{{ route('slider.index') }}">
                                <p class="text-white m-b-0">Ir allá <i class="fas fa-arrow-right"></i></p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-green">Categorias</h4>
                            <h6 class="text-muted m-b-0">Gestiona todo sobre ellas</h6>
                        </div>
                        <div class="col-4 text-right text-c-green">
                            <i class="fas fa-tags"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-green">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <a href="{{ route('categorias.index') }}">
                                <p class="text-white m-b-0">Ir allá <i class="fas fa-arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-red">Usuarios</h4>
                            <h6 class="text-muted m-b-0">Administrarlos</h6>
                        </div>
                        <div class="col-4 text-right text-c-red">
                            <i class="fas fa-users"></i>
                        </div>

                    </div>
                </div>
                <div class="card-footer bg-c-red">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <a href="{{ route('dashboardAdmin.usuarios.index') }}">
                                <p class="text-white m-b-0">Ir allá <i class="fas fa-arrow-right"></i></p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
