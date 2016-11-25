@extends('layouts.app')

@section('content')
                <div class="slider-container rev_slider_wrapper">
                    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 500}'>
                        <ul>
                            <li data-transition="fade">
                                {{ Html::image('template/img/slider1.jpg') }}

                                <div class="tp-caption top-label"
                                    data-x="700"
                                    data-y="180"
                                    data-start="500"
                                    data-transform_in="y:[-300%];opacity:0;s:500;">Consigue todo para tu celular</div>

                                <div class="tp-caption"
                                    data-x="1030"
                                    data-y="180"
                                    data-start="1000"
                                    data-transform_in="x:[300%];opacity:0;s:500;">{{ Html::image('template/img/slides/slide-title-border-light.png') }}</div>

                                <div class="tp-caption main-label"
                                    data-x="700"
                                    data-y="210"
                                    data-start="1500"
                                    data-whitespace="nowrap"                         
                                    data-transform_in="y:[100%];s:500;"
                                    data-transform_out="opacity:0;s:500;"
                                    data-mask_in="x:0px;y:0px;">y mucho más...</div>

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
                                <h1 class="mb-none"><strong>Estamos localizados</strong></h1>
                                <h4 class="lead">en todo el terrirotio Mexicano</h4>
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


                <div class="home-concept">
                    <div class="container">
                
                        <div class="row center">
                            <div class="col-md-6 col-md-offset-6">
                                <div class="project-image">
                                    <div id="fcSlideshow" class="fc-slideshow">
                                        <ul class="fc-slides">
                                            <li>{{ Html::image('template/img/projects/project-home-1.jpg', '', array('class' => 'img-responsive')) }}</li>
                                            <li>{{ Html::image('template/img/projects/project-home-2.jpg', '', array('class' => 'img-responsive')) }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
