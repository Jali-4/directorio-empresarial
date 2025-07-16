@extends('dashboardClient.plantilla')

@section('titulo')
    Administrar Comercio
@endsection

@section('contenido')
    <div class="row d-flex justify-content-center">


        <div class="col-lg-8 col-md-12">
            <!-- support-section start -->
            <div class="row ">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>Bienvenid@, {{ $user->name }}</h3>
                            
                        </div>

                    </div>
                </div>

            </div>
            <!-- support-section end -->
        </div>
        <div class="col-lg-8 col-md-12">
            <!-- support-section start -->
            <div class="row ">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <img src="{{ $comercio->imagen_destacada }}" style="height: 10rem;" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h3 class="card-title">Comercio - {{ $comercio->nombre }}</h3>
                            <hr>
                            <span class="text-c-green">Información</span>
                            <p class="mb-3 mt-3">{{ $comercio->descripcion}}</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="{{ route('edit') }}" class="btn btn-lg btn-warning rounded-pill">Modificar comercio
                                    <i class="fas fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- support-section end -->
        </div>

        <div class="col-lg-8 col-md-12">
            <!-- page statustic card start -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-10">
                                    <h4 class="text-c-blue">Información</h4>
                                    <h6 class="text-muted m-b-0">All Earnings</h6>
                                </div>
                                <div class="col-2 text-right">
                                    <i class="fas fa-info-circle text-c-blue"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-c-blue">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <a href="{{ route('edit') }}#informacion" class="text-white m-b-0">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-red">Galería</h4>
                                    <h6 class="text-muted m-b-0">Page Views</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fas fa-images text-c-red"></i>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-c-red">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <a  href="{{ route('edit') }}#galeria" class="text-white m-b-0">Edit</a>
                                </div>
                                <div class="col-3 text-right">
                                    <i class="feather icon-trending-up text-white f-16"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="text-c-green">Productos</h4>
                                    <h6 class="text-muted m-b-0">Task</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <i class="fas fa-shopping-cart text-c-green"></i>

                                </div>

                            </div>
                        </div>
                        <div class="card-footer bg-c-green">
                            <div class="row align-items-center">
                                <div class="col-9">
                                    <a href="{{ route('edit') }}#productos" class="text-white m-b-0">Edit</a>
                                </div>
                                <div class="col-3 text-right">
                                    <i class="feather icon-trending-down text-white f-16"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page statustic card end -->
        </div>

    </div>
@endsection
