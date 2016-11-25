@extends('layouts.app')

@section('content')
    <div role="main" class="main shop">
        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Iniciar Sesión</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Iniciar Sesión</h1>
                    </div>
                </div>
             </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="featured-boxes">
                        <div class="row">
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8">
                                <div class="featured-box featured-box-primary align-left mt-xlg">
                                    <div class="box-content">
                                        <h4 class="heading-primary text-uppercase mb-md">Ingresa</h4>
                                        <form action="{{ url('/login') }}" id="frmSignIn" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>Correo</label>
                                                        <input type="text" value="" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <a class="pull-right" href="#">(Olvidó la contraseña?)</a>
                                                        <label>Contraseña</label>
                                                        <input type="password" value="" class="form-control input-lg">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <span class="remember-box checkbox">
                                                        <label for="rememberme">
                                                            <input type="checkbox" name="remember"> Recordarme
                                                        </label>
                                                    </span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="submit" value="Ingresar" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
