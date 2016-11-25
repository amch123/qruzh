@extends('layouts.app')

@section('content')
    <div role="main" class="main shop">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Productos</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Productos</h1>
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

                @if (count($products) > 0)
                    <div class="row">
                        <div class="col-md-9">

                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="mb-none"><strong>
                                        Todos los productos</strong>
                                    </h1>
                                    <p>
                                        Mostradas 1–9 de 25
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                @foreach($products as $product)
                                    <ul class="products product-thumb-info-list">
                                        <li class="col-sm-3 col-xs-12 product">
                                            <a href="shop-product-sidebar.html" style="display: none;">
                                                <span class="onsale">Sale!</span>
                                            </a>
                                            <span class="product-thumb-info">
                                                <a href="shop-cart.html" class="add-to-cart-product">
                                                    <span><i class="fa fa-shopping-cart"></i> Agregar al Carro</span>
                                                </a>
                                                <a href="shop-product-sidebar.html">
                                                    <span class="product-thumb-info-image">
                                                        <span class="product-thumb-info-act">
                                                            <span class="product-thumb-info-act-left"><em>Ver</em></span>
                                                            <span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Detalles</em></span>
                                                        </span>
                                                        {{ Html::image('template/img/products/product-2.jpg', '', array('class' => 'img-responsive')) }}
                                                    </span>
                                                </a>
                                                <span class="product-thumb-info-content">
                                                    <a href="shop-product-sidebar.html">
                                                        <h4>{{ $product->title }}</h4>
                                                        <span class="price">
                                                            <ins><span class="amount">{{ $product->price }}</span></ins>
                                                        </span>
                                                        <h6>Tienda</h6>
                                                    </a>
                                                </span>
                                            </span>
                                        </li>
                                    </ul>
                                 @endforeach
                            </div>

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
                            
                                <h4 class="heading-primary">Categorias</h4>
                                <ul class="nav nav-list mb-xlg">
                                    <li><a href="#">Design (2)</a></li>
                                    <li class="active">
                                        <a href="#">Photos (4)</a>
                                        <ul>
                                            <li><a href="#">Animals</a></li>
                                            <li class="active"><a href="#">Business</a></li>
                                            <li><a href="#">Sports</a></li>
                                            <li><a href="#">People</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Videos (3)</a></li>
                                    <li><a href="#">Lifestyle (2)</a></li>
                                    <li><a href="#">Technology (1)</a></li>
                                </ul>

                                <hr>

                                <h5 class="heading-primary">
                                    Los Más Vistos
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
                                            <a href="shop-product-sidebar.html">Photo   Camera
                                            </a>
                                            <div class="post-meta">
                                                $299
                                            </div>
                                            <a href="shop-product-sidebar.html"> Tienda
                                            </a>
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
                                            <a href="shop-product-sidebar.html"> Tienda
                                            </a>
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
                                                <a href="shop-product-sidebar.html"> Tienda
                                                </a>
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
