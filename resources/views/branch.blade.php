@extends('layouts.app')

@section('content')
    <div role="main" class="main shop">

        <div role="main" class="main">
            <section class="page-header page-header-light page-header-more-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Sucursales<span></span></h1>
                            <ul class="breadcrumb breadcrumb-valign-mid">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li class="active">Sucursales</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

            <div role="main" class="main shop">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="tall">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <div>
                                    <div class="thumbnail">
                                    {{ Html::image('template/img/products/product-14.jpg', '', array('class' => 'img-responsive img-rounded')) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div>
                                <h2 class="mb-none">Estamos en todo el territorio Méxicano</h2>
                                <div>
                                    <span><h4></h4></span>
                                    <h4><i class="fa fa-map-marker text-warning" aria-hidden="true"></i>    Ciudad de México</h4>
                                    <h4><i class="fa fa-map-marker text-warning" aria-hidden="true"></i>    Cohuila</h4>
                                    <h4><i class="fa fa-map-marker text-warning" aria-hidden="true"></i>    Jalisco</h4>
                                    <h4><i class="fa fa-map-marker text-warning" aria-hidden="true"></i>    Nuevo León</h4>
                                    <h4><i class="fa fa-map-marker text-warning" aria-hidden="true"></i>    Puebla</h4>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

                   
