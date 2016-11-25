@extends('layouts.app')

@section('content')
                <div class="slider-container rev_slider_wrapper">
                    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
                        <ul>
                            <li data-transition="fade">
                                {{ Html::image('template/img/slider1.jpg') }}

                                <div class="tp-caption top-label"
                                    data-x="175"
                                    data-y="180"
                                    data-start="500"
                                    data-transform_in="y:[-300%];opacity:0;s:500;">Todo lo hecho por tí</div>

                                <div class="tp-caption"
                                    data-x="410"
                                    data-y="180"
                                    data-start="1000"
                                    data-transform_in="x:[300%];opacity:0;s:500;">{{ Html::image('template/img/slides/slide-title-border-light.png') }}</div>

                                <div class="tp-caption main-label"
                                    data-x="170"
                                    data-y="210"
                                    data-start="1500"
                                    data-whitespace="nowrap"                         
                                    data-transform_in="y:[100%];s:500;"
                                    data-transform_out="opacity:0;s:500;"
                                    data-mask_in="x:0px;y:0px;">Lo puedes<br>vender<br>aquí</div>

                                <div class="tp-caption bottom-label"
                                    data-x="220"
                                    data-y="280"
                                    data-start="2000"
                                    data-transform_in="y:[100%];opacity:0;s:500;"></div>

                                <div class="tp-caption"
                                    data-x="right" data-hoffset="0"
                                    data-y="bottom" data-voffset="0"
                                    data-start="1800"
                                    data-transform_in="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;s:500;"><img src="img/slides/mobile-device.png" alt=""></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="tall">
                    </div>
                </div>

                <div class="row center4">
                    <div class="col-md-12">
                        <h2 class="pt-sm"><strong class="semi-bold">DESTACADOS</strong></h2>
                        <h4>Nuestros productos más solicitados</h4>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme" data-plugin-options='{"items": 4, "margin": 20}'>
                                <div>
                                    <a href="#popupProject" data-plugin-lightbox data-plugin-options='{"type": "inline", preloader: false}'>
                                        <span class="thumb-info">
                                            <span>
                                                {{ Html::image('template/img/projects/project.jpg') }}
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner"></span>
                                                        <span class="thumb-info-type" style="background-color: #ff179f;">Nombre</span>
                                                    </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <hr class="tall">
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>              

             <section class="parallax section section-text-light section-parallax section-center" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <i class="icon-featured fa fa-comments appear-animation" data-appear-animation="bounceIn"></i>
                                <h2 class="mb-none"><strong>We're excited about Porto Template</strong></h2>
                                <h3 class="lead">19,000 customers in 100 countries use Porto Template. Meet our customers.</h3>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="row">
                    <div class="col-md-12">
                        <hr class="tall">
                    </div>
                </div>

                <div class="row center4">
                    <div class="col-md-12">
                        <h2 class="pt-sm"><strong class="semi-bold">ENVIOS</strong></h2>
                        <h4>Trabajamos con las siguientes empresas de envios</h4>
                    </div>
                </div>


                <div class="container">
                    <div class="row mt-xlg">
                        @if (count($shops) > 0)
                            @foreach($shops as $shop)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                                        <span class="thumb-info-wrapper">
                                            <a href="about-me.html">
                                                {{ Html::image('template/img/team/team-1.jpg') }}
                                            </a>
                                        </span>
                                        <span class="thumb-info-social-icons">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-5">
                                                        {{ Html::image('template/img/avatar20.jpg') }} 
                                                    </div>
                                                    <div class="col-md-7 text-center">
                                                        {{ $shop->name }}
                                                        ESTRELLAS
                                                    </div>
                                                </div>    
                                            </div>
                                        </span>
                                    </span>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12">
                                <span class="thumb-info thumb-info-hide-wrapper-bg">
                                    <span class="thumb-info-social-icons text-center">
                                        No existen registros en la base de datos
                                    </span>
                                </span>
                            </div>
                        @endif
                    
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="tall">
                            </div>
                        </div>
                    </div>
                </div>
@endsection
