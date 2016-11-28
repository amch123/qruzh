@extends('layouts.app')

@section('content')
    
    <div role="main" class="main shop">

        <div role="main" class="main">
            <section class="page-header page-header-light page-header-more-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contáctanos<span></span></h1>
                            <ul class="breadcrumb breadcrumb-valign-mid">
                                <li><a href="{{ url('/') }}">Inicio</a></li>
                                <li class="active">Contáctanos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr class="tall">
                </div>
            </div>

            <div role="main" class="main">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            @if(session('status') == 1)
                            <div class="alert alert-success hidden" id="contactSuccess">
                                <strong>Éxito!</strong> Su mensaje ha sido enviado.
                            </div>
                            @endif

                            @if(session('status') == 2)
                            <div class="alert alert-danger hidden" id="contactError">
                                <strong>Error!</strong> Ha ocurrio un fallo en el envío.
                            </div>
                            @endif

                            <h2 class="mb-sm mt-sm">Contáctanos</h2>
                            <form id="contactForm" action="{{ url('/message/store') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Nombre *</label>
                                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label>Correo Eléctronico *</label>
                                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
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
                                            <label>Asunto</label>
                                            <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                            @if ($errors->has('subject'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('subject') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Mensaje *</label>
                                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                                            @if ($errors->has('message'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('message') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Enviar Mensaje" class="btn btn-warning btn-lg mb-xlg" data-loading-text="Enviando...">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
