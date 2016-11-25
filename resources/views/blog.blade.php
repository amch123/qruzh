@extends('layouts.app')

@section('content')
    <div role="main" class="main shop">

        <section class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Inicio</a></li>
                            <li class="active">Blog</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Blog</h1>
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

            @if (count($blogs) > 0)

                <div class="container">

                    <div class="row">
                    
                        @foreach($blogs as $blog)
                            <div class="col-md-9">
                                <div class="blog-posts">

                                    <article class="post post-large">
                                        <div class="post-image">
                                            <div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        {{ Html::image('template/img/blog/blog-image-3.jpg') }} 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-date">
                                            <span class="day">10</span>
                                            <span class="month">Jan</span>
                                        </div>

                                        <div class="post-content">

                                            <h2><a href="blog-post.html">{{ $blog->title }}</a></h2>
                                            <p>{{ $blog->description }}</p>

                                            <div class="post-meta">
                                                <span><i class="fa fa-user"></i> Por <a href="#">{{ $blog->creator }}</a> </span>
                                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                                <span><i class="fa fa-comments"></i> <a href="#">12 Comentarios</a></span>
                                                <a href="{{ url('/blogdetail') }}" class="btn btn-xs btn-primary pull-right">Leer más...</a>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="pagination pagination-lg pull-right">
                                        <li><a href="#">«</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-3">
                            <aside class="sidebar">

                                <h4 class="heading-primary">Categorías</h4>
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
