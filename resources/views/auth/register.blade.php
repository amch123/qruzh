@extends('layouts.app')

@section('content')
    <div role="main" class="main shop">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Registrate</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Registrate</h1>
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
                                        <h4 class="heading-primary text-uppercase mb-md">Crear una cuenta</h4>
                                        <form action="{{ url('/register') }}" id="frmSignUp" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>Nombre Completo</label>
                                                        <input type="text" name="name" value="" class="form-control input-lg">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>Correo</label>
                                                        <input type="email" name="email" value="" class="form-control input-lg">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        <label>Contraseña</label>
                                                        <input type="password" name="password" value="" class="form-control input-lg">
                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="submit" value="Registrarse" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
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
