@extends('layouts.app')

@section('content')
    <div role="main" class="main">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Contáctanos</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contáctanos</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    @if(Session::get('status_message_store') == 1)
                        <div class="alert alert-success" id="contactSuccess">
                            <strong>Éxito!</strong> Tu mensaje ha sido enviado.
                        </div>
                    @endif

                    <div class="alert alert-danger hidden" id="contactError">
                        <strong>Error!</strong> There was an error sending your message.
                    </div>

                    <h2 class="mb-sm mt-sm"><strong>Contáctanos</strong></h2>
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
                                        <label>Correo *</label>
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
                                        <label>Asunto *</label>
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
                                    <input type="submit" value="Enviar" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="col-md-2">
                </div>

            </div>

        </div>

    </div>
@endsection
