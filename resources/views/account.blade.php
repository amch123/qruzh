@extends('layouts.app')

@section('content')
    <div role="main" class="main">

        <div role="main" class="main">
            <section class="page-header page-header-light page-header-more-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Bienvenido<span></span></h1>
                            <ul class="breadcrumb breadcrumb-valign-mid">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">

                        <h4 class="heading-primary">Menu</h4>
                        <ul class="nav nav-list mb-xlg">
                            <li class="active">
                                <a href="#">Productos</a>
                            </li>
                            <li>
                                <a href="#">Pagos</a>
                            </li>
                            <li class="active">
                                <a href="#">Envios</a>
                            </li>
                            <li>
                                <a href="#">Usuarios</a>
                            </li>
                            <li>
                                <a href="#">Configuraciones</a>
                            </li>
                            <li>
                                <a href="#">Mi Cuenta</a>
                            </li>
                            <li >
                                <a href="#">Cerrar Sesión</a>
                            </li>
                            <li class="active">
                                <a href="#">Tus Compras</a>
                            </li>
                            <li class="active">
                                <a href="#">Tus Pagos</a>
                            </li>
                            <li class="active">
                                <a href="#">Envios</a>
                            </li>
                            <li>
                                <a href="#">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">


                </div>

            </div>

        </div>

    </div>
@endsection