@extends('layouts.app')

@section('content')
    <div role="main" class="main shop">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Tiendas</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Tiendas</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr class="tall">
                </div>
            </div>

            @if (count($shops) > 0)
                <div class="row">
                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="mb-none"><strong>
                                    Todas las Tiendas</strong>
                                </h1>
                                <p>
                                    Mostradas 1–9 de 25
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            
                            @foreach($shops as $shop)    
                                <div class="col-md-4 col-sm-6 col-xs-12">
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

                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="pagination pull-right">
                                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                            <div class="col-md-3">
                                <aside class="sidebar">

                                    <form>
                                        <div class="input-group input-group-lg">
                                            <input class="form-control" placeholder="Buscar..." name="s" id="s" type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>

                                    <hr>

                                    <h5 class="heading-primary">
                                    Las Más Visitadas
                                    </h5>
                                    <ul class="simple-post-list">
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="shop-product-sidebar.html">
                                                        <img alt="" width="60" height="60" class="img-responsive" {{ Html::image('template/img/products/product-1.jpg') }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="shop-product-sidebar.html">Photo Camera
                                                </a>
                                                <div class="post-meta">
                                                    $299
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="shop-product-sidebar.html">
                                                        <img alt="" width="60" height="60" class="img-responsive" {{ Html::image('template/img/products/product-2.jpg') }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="shop-product-sidebar.html">Golf Bag</a>
                                                <div class="post-meta">
                                                    $72
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail">
                                                    <a href="shop-product-sidebar.html">
                                                        <img alt="" width="60" height="60" class="img-responsive" {{ Html::image('template/img/products/product-3.jpg') }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="shop-product-sidebar.html">Workout</a>
                                                <div class="post-meta">
                                                    $60
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                            @else
                                <div class="col-md-12">
                                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                                        <span class="thumb-info-social-icons text-center">
                                        No existen registros en la base de datos
                                        </span>
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
@endsection
