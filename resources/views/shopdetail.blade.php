@extends('layouts.app')

@section('content')
  <div role="main" class="main">
                <div class="slider-container rev_slider_wrapper" style="height: 550px;">
                    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options='{"gridwidth": 1170, "gridheight": 550}'>
                        <ul>
                            <li data-transition="fade">
                                {{ Html::image('template/img/slides/slide-corporate-hosting.jpg') }}
                            </li>
                        </ul>
                    </div>
                </div>

                <aside class="nav-secondary" id="navSecondary" data-plugin-sticky data-plugin-options='{"minWidth": 991, "padding": {"top": 66}}'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills nav-pills-tertiary">
                                    <li><a data-hash data-hash-offset="165" href="#features">Tienda</a></li>
                                    <li><a data-hash data-hash-offset="165" href="#plans">Destacados</a></li>
                                    <li><a data-hash data-hash-offset="165" href="#testimonials">Productos</a></li>
                                    <li><a data-hash data-hash-offset="165" href="#search-domain">Información</a></li>
                                    <li><a data-hash data-hash-offset="165" href="#blog">Reseñas</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </aside>

                <section class="section section-no-background section-no-border mt-none" id="features">
                    <div class="container">
                        <div class="row mt-xl">
                            <div class="col-md-4">
                                <div class="feature-box feature-box-tertiary feature-box-style-5">
                                    <div class="feature-box-icon">
                                        <i class="icon-trophy icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-sm">Award Winning Support</h4>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box feature-box-tertiary feature-box-style-5">
                                    <div class="feature-box-icon">
                                        <i class="icon-speedometer icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-sm">Super Fast</h4>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box feature-box-tertiary feature-box-style-5">
                                    <div class="feature-box-icon">
                                        <i class="icon-cloud-upload icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-sm">Unlimited Domains</h4>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-md">
                            <div class="col-md-4">
                                <div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                                    <div class="feature-box-icon">
                                        <i class="icon-envelope icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-sm">FREE Email</h4>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                    <div class="feature-box-icon">
                                        <i class="icon-lock icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-sm">SSL Certificates</h4>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box feature-box-tertiary feature-box-style-5 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="600">
                                    <div class="feature-box-icon">
                                        <i class="icon-layers icons"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="mb-sm">SSD Servers</h4>
                                        <p class="mb-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="section section-no-border mt-none" id="plans">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h2 class="heading-dark mt-xl mb-none">Hosting <strong>Plans</strong></h2>
                                <p class="mb-xl">Start here and choose the one that is the best for you.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="pricing-table mt-xl">
                                <div class="col-md-3 col-sm-6">
                                    <div class="plan">
                                        <h3>Enterprise<span>$59</span></h3>
                                        <a class="btn btn-md btn-primary" href="#">Sign up</a>
                                        <ul>
                                            <li><strong>10GB</strong> Disk Space</li>
                                            <li><strong>100GB</strong> Monthly Bandwidth</li>
                                            <li><strong>20</strong> Email Accounts</li>
                                            <li><strong>Unlimited</strong> subdomains</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 center">
                                    <div class="plan most-popular">
                                        <h3>Professional<span>$29</span></h3>
                                        <a class="btn btn-lg btn-primary" href="#">Sign up</a>
                                        <ul>
                                            <li><strong>5GB</strong> Disk Space</li>
                                            <li><strong>50GB</strong> Monthly Bandwidth</li>
                                            <li><strong>10</strong> Email Accounts</li>
                                            <li><strong>Unlimited</strong> subdomains</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="plan">
                                        <h3>Standard<span>$17</span></h3>
                                        <a class="btn btn-md btn-primary" href="#">Sign up</a>
                                        <ul>
                                            <li><strong>3GB</strong> Disk Space</li>
                                            <li><strong>25GB</strong> Monthly Bandwidth</li>
                                            <li><strong>5</strong> Email Accounts</li>
                                            <li><strong>Unlimited</strong> subdomains</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="plan">
                                        <h3>Basic<span>$9</span></h3>
                                        <a class="btn btn-md btn-primary" href="#">Sign up</a>
                                        <ul>
                                            <li><strong>1GB</strong> Disk Space</li>
                                            <li><strong>10GB</strong> Monthly Bandwidth</li>
                                            <li><strong>2</strong> Email Accounts</li>
                                            <li><strong>Unlimited</strong> subdomains</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="section section-no-background section-no-border mt-none mb-none" id="testimonials">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 center">
                                <h2 class="heading-dark mb-none">Happy <strong>Customers</strong></h2>
                                <p class="mb-xl">Trusted by some of the world’s biggest brands.</p>
                            </div>
                        </div>
                        <div class="row mt-xl">
                            <div class="col-md-6">
                                <div class="testimonial testimonial-style-4 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequatt, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/clients/client-1.jpg" class="img-responsive img-circle" alt="">
                                        </div>
                                        <p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial testimonial-style-4 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="0">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequatt, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/clients/client-2.jpg" class="img-responsive img-circle" alt="">
                                        </div>
                                        <p><strong>Jessica Doe</strong><span>Marketing - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-md mb-xl">
                            <div class="col-md-6">
                                <div class="testimonial testimonial-style-4 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequatt, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/clients/client-3.jpg" class="img-responsive img-circle" alt="">
                                        </div>
                                        <p><strong>Bob Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="testimonial testimonial-style-4 appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="0">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequatt, in consequat.</p>
                                    </blockquote>
                                    <div class="testimonial-arrow-down"></div>
                                    <div class="testimonial-author">
                                        <div class="testimonial-author-thumbnail">
                                            <img src="img/clients/client-4.jpg" class="img-responsive img-circle" alt="">
                                        </div>
                                        <p><strong>Brian Smith</strong><span>CEO & Founder - Okler</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row center mt-xl">
                            <div class="owl-carousel owl-theme" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-1.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-2.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-3.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-4.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-5.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-6.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-4.png" alt="">
                                </div>
                                <div>
                                    <img class="img-responsive" src="img/logos/logo-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="parallax section section-text-light section-parallax section-center mt-none mb-none" data-stellar-background-ratio="0.5" style="background-image: url(img/parallax-hosting.jpg);" id="search-domain">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 center">
                                <h2 class="heading-light mb-none">Search <strong>Domain</strong></h2>
                                <p class="mb-xl">Enter the domain name to register or transfer</p>

                                <form class="form-horizontal" action="#" method="post" id="domainSearchForm">
                                    <div class="form-group form-group-lg">
                                        <div class="col-sm-12">
                                            <div class="input-group">
                                                <input type="text" name="sld" class="form-control" aria-label="..." placeholder="Enter your domain" required data-msg-required="Please enter your domain.">
                                                <input type="hidden" name="tld" value=".com">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="tldBtn">.com <span class="caret"></span></button>
                                                    <ul class="dropdown-menu dropdown-menu-right" id="tld">
                                                        <li><a href="#">.com</a></li>
                                                        <li><a href="#">.net</a></li>
                                                        <li><a href="#">.org</a></li>
                                                        <li><a href="#">.eu</a></li>
                                                        <li><a href="#">.us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-lg btn-primary mt-md" href="#">Search Domain</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </section>
                <section class="section section-no-background section-no-border mt-md section-footer" id="blog">
                    <div class="container">
                        <div class="row mt-xl">
                            <div class="col-md-4">
                                <img class="img-responsive" src="img/blog/blog-hosting-1.jpg" alt="Blog">
                                <div class="recent-posts mt-md mb-lg">
                                    <article class="post">
                                        <h5><a class="text-dark" href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> January 10, 2015 </span>
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive" src="img/blog/blog-hosting-2.jpg" alt="Blog">
                                <div class="recent-posts mt-md mb-lg">
                                    <article class="post">
                                        <h5><a class="text-dark" href="blog-post.html">Lorem consectetur adipiscing elit.</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> January 10, 2015 </span>
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive" src="img/blog/blog-hosting-3.jpg" alt="Blog">
                                <div class="recent-posts mt-md mb-lg">
                                    <article class="post">
                                        <h5><a class="text-dark" href="blog-post.html">Lorem dolor sit amet, consectetur adipiscing elit.</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> January 10, 2015 </span>
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@endsection
