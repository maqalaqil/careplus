<?php
/**
 * Template Name: HomePage Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {
        ?>
        <!-- page wrapper -->
            <div class="page-wrapper">

                <!-- page content -->
                <div class="page-content">

                    <!-- banner -->
                    <section class="home-banner home-slider-two">
                        <div id="Bannerslider" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-fluid" src="http://localhost/careplus/wp-content/uploads/2020/03/banner-03.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-7 col-sm-8 offset-lg-6 offset-md-5 offset-5 col-7">
                                                    <!-- <div class="square-shape">
                                                        <span class="shapewrapper-inner anim-1">EYE CARE, WE CARE</span>
                                                        <h1 class="anim-2 white-color"><strong>The Difference<br/>is clear to see</strong></h1>
                                                        <div class="tagline anim-3">Love your eyes, love your future </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid" src="http://localhost/careplus/wp-content/uploads/2020/03/banner-03.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-8 ">
                                                    <!-- <div class="square-shape">
                                                        <span class="shapewrapper-inner anim-1">EYE CARE, WE CARE</span>
                                                        <h1 class="anim-2 white-color"><strong>The Difference<br/>is clear to see</strong></h1>
                                                        <div class="tagline anim-3">Love your eyes, love your future </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#Bannerslider" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#Bannerslider" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </section>
                    <!-- banner End -->


                    <!-- Our Products -->
                    <section class="section-products section-md bg-padding">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="section-title">
                                        <h2 class="subheading"><strong>Products</strong></h2>                                          
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="slick-carousel brd-right no-mrg" data-autoplay="true" data-dots="false" data-arrows="false" data-slides="3" data-tslides="2" data-islides="2">
                                        <!-- slide-1 -->
                                        <div class="products-list col-lg-4 col-md-6 col-sm-12">
                                            <div class="service-box service-style-2">
                                                <div class="service-thumbnail">
                                                    <img src="http://localhost/careplus/wp-content/uploads/2020/03/product.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="service-content">
                                                    <div class="service-inner">
                                                        <h4 class="service-box-title"><a href="service-detail.html">Product1</a></h4>
                                                        <div class="service-desc">
                                                            <p>Doctor Timetable Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- slide-2 -->
                                        <div class="products-list col-lg-4 col-md-6 col-sm-12">
                                            <div class="service-box service-style-2">
                                                <div class="service-thumbnail">
                                                    <img src="http://localhost/careplus/wp-content/uploads/2020/03/product.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="service-content">
                                                    <div class="service-inner">
                                                        <h4 class="service-box-title"><a href="service-detail.html">Product 2</a></h4>
                                                        <div class="service-desc">
                                                            <p>Doctor Timetable Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- slide-3 -->
                                        <div class="products-list col-lg-4 col-md-6 col-sm-12">
                                            <div class="service-box service-style-2">
                                                <div class="service-thumbnail">
                                                    <img src="http://localhost/careplus/wp-content/uploads/2020/03/product.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="service-content">
                                                    <div class="service-inner">
                                                        <h4 class="service-box-title"><a href="service-detail.html">Product 3</a></h4>
                                                        <div class="service-desc">
                                                            <p>Doctor Timetable Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       

                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Our Products end -->

                    
                    <!-- Posts -->
                    <section class="section-posts section-md bg-lightgrey">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="our-blog pr-4 mr-2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="section-title">
                                                    <h2 class="subheading"><strong>RECENT NEWS</strong></h2>                                          
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="blog-box blog-style-3 d-flex mb-4">
                                                        <div class="blog-thumbnail">
                                                            <img src="http://localhost/careplus/wp-content/uploads/2020/03/blog-01.jpg " class="img-fluid" alt="">
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="blog-entry-meta">
                                                                <ul class="list-inline">
                                                                    <li class="blog-category"><a class="url fn n" href="#">Paediatric</a></li>
                                                                    <li class="blog-date"><i class="far fa-clock"></i>February 18, 2018</li>
                                                                </ul>
                                                            </div>
                                                            <h4 class="blog-box-title"><a href="blog-detail.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
                                                            <div class="blog-desc">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="blog-box blog-style-3 d-flex mb-4">
                                                    <div class="blog-thumbnail">
                                                        <img src="http://localhost/careplus/wp-content/uploads/2020/03/blog-02.jpg " class="img-fluid" alt="">
                                                    </div>
                                                    <div class="blog-content">
                                                        <div class="blog-entry-meta">
                                                            <ul class="list-inline">
                                                                <li class="blog-category"><a class="url fn n" href="#">Glaucoma</a></li>
                                                                <li class="blog-date"><i class="far fa-clock"></i>January 21, 2018</li>
                                                            </ul>
                                                        </div>
                                                        <h4 class="blog-box-title"><a href="blog-detail.html">consectetur adipisicing elit.</a></h4>
                                                        <div class="blog-desc">
                                                            <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="link-btn">
                                                    <a class="skincolor" href="#">SEE ALL OUR BLOGS<i class="fa fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                    </section>
                    <!-- Post & Testimonial end -->

                </div>
                <!-- page content End -->

        <?php }
		
	// }

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
