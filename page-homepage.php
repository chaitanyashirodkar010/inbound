<?php
/*
 * Template Name: homepage
 * Description: Page template with sidebar included.
 */ get_header(''); ?>

<!-- Banner Section -->
<section class="ic-bnr-sec ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <?php the_field('hero_content') ?>
                <div class="ic-spacer-40"></div>
                <a href="<?php echo get_home_url(); ?>/contact/" class="btn ic-primary-btn desktop-show">Get in
                    touch</a>
                <a href="tel:917 7303807" class="btn ic-primary-btn mobile-show" style="display: none;">Call Us
                    Now</a>
            </div>
            <div class="col-lg-6 ic-bnr-box-col">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="ic-bnr-box">
                            <h2 class="ic-font-weight-600 ic-yellow-seperator mb-0 d-inline-block">
                                <span>72</span> Million
                            </h2>
                            <p class="mb-0">Total Organic Search Traffic our clients received in 2017</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ic-bnr-box">
                            <h2 class="ic-font-weight-600 ic-yellow-seperator mb-0 d-inline-block">
                                <span>109k</span>
                            </h2>
                            <p class="mb-0">Organic search traffic for Defensetax.com in April</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ic-bnr-box">
                            <h2 class="ic-font-weight-600 ic-yellow-seperator mb-0 d-inline-block">
                                <span>4.3</span> Million
                            </h2>
                            <p class="mb-0">Monthly organic search traffic for YourMechanic.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ic-bnr-box">
                            <h2 class="ic-font-weight-600 ic-yellow-seperator mb-0 d-inline-block">
                                <span>4.1</span> Million
                            </h2>
                            <p class="mb-0">Monthly Search Traffic for wellness.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Case Studies Section -->

<!-- Case Studies Section -->
<section class="ic-case-sec ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ic-yellow-seperator1 d-inline-block">Case Studies</h2>
                <div class="ic-spacer-20"></div>
            </div>
        </div>

        <div id="owl-demo-2" class="owl-carousel owl-theme">

            <?php $args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
            <div class="item">
                <article class="mb-5 mb-md-auto">
                    <div class="md-img-zoom"><img src="<?php the_field('featured_image'); ?>" class="img-fluid"
                            alt="Case Image"></div>
                    <p class="ic-montserrat my-4 ic-color-black"> <?php echo get_the_title(  ); ?></p>
                    <h3 class="line-height-inherit">
                        <a href="<?php echo get_permalink() ?>" class="ic-color-black d-flex">
                            <span class="mr-1 fs-24"><?php echo get_field('percentage'); ?></span>
                            <span class="fs-20"><?php echo wp_strip_all_tags( get_the_content() );?></span>
                        </a>
                    </h3>
                    <div class="ic-case-seperator mt-4"></div>
                </article>
            </div>
            <?php	endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- Trusted Section --><?php echo the_field('test'); ?>
<img src="<?php echo the_field('test'); ?>" class="img-fluid w-100 d-block" alt="">
<section class="ic-trust-sec ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="d-inline-block">Trusted by over <span class="ic-yellow-seperator">200+ Hyper Growth
                        Startup's</span></h2>
                <div class="ic-spacer-80"></div>
            </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-1.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-2.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-3.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-4.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-5.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-6.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-7.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-8.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-9.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-10.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-11.png" class="img-fluid"
                    alt="Client Image"> </div>
            <div class="col-6 col-md-3 col-lg-2"> <img
                    src="<?php echo get_bloginfo('template_directory')?>/images/client-12.png" class="img-fluid"
                    alt="Client Image"> </div>

        </div>
    </div>
</section>
<!-- Testimonials Section -->
<section class="ic-testimonial-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="d-inline-block"><span class="ic-yellow-seperator">Testimonials</span></h2>
                <div class="ic-spacer-80"></div>
            </div>
            <div class="col-lg-10">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="carousel-item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-md-3"> <img
                                            src="<?php echo get_bloginfo('template_directory')?>/images/testi-1.jpg"
                                            class="img-fluid ic-main-img mb-4 mb-md-auto" alt="Image"> </div>
                                    <div class="col-md-9 text-left">
                                        <h3 class="mb-0">Natalia Ben-shah</h3>
                                        <!--<h6 class="mb-4">DIRECTOR OF AN AUSTRALIAN STEALTH STARTUP</h6>-->
                                        <i class="fas fa-quote-left ic-quote-icon mb-3"></i>
                                        <h5>“Professional team of Digital Marketing professionals. They know
                                            what they are doing. I love the way you guys work"</h5>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="carousel-item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-md-3"> <img
                                            src="<?php echo get_bloginfo('template_directory')?>/images/testi-2.jpg"
                                            class="img-fluid ic-main-img mb-4 mb-md-auto" alt="Image"> </div>
                                    <div class="col-md-9 text-left">
                                        <h3 class="mb-0">Chris Merill</h3>
                                        <!-- <h6 class="mb-4">DIRECTOR OF AN AUSTRALIAN STEALTH STARTUP</h6>-->
                                        <i class="fas fa-quote-left ic-quote-icon mb-3"></i>
                                        <h5>I would have no hesitation recommending Idea Catalyst to other
                                            companies who wish to gain a competitive advantage relative to
                                            their competitors. For the small investment required, the results
                                            far exceed any traditional form of marketing you will undertake.
                                        </h5>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="carousel-item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-md-3"> <img
                                            src="<?php echo get_bloginfo('template_directory')?>/images/testi-3.jpg"
                                            class="img-fluid ic-main-img mb-4 mb-md-auto" alt="Image"> </div>
                                    <div class="col-md-9 text-left">
                                        <h3 class="mb-0">Steve Buscemi</h3>
                                        <!-- <h6 class="mb-4">DIRECTOR OF AN AUSTRALIAN STEALTH STARTUP</h6>-->
                                        <i class="fas fa-quote-left ic-quote-icon mb-3"></i>
                                        <h5>Working with Inbounbd Catalyst was an important decision for us. The
                                            site was new and we were scheduled to launch a massive cross-media
                                            campaign in a few months. Beyond rankings, we also wanted to
                                            dominate brand name and related term searches.
                                            It was a fast track project and their solid performance is the
                                            reason why we continue to be with them after 7 months.</h5>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 4 -->
                        <div class="carousel-item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-md-3"> <img
                                            src="<?php echo get_bloginfo('template_directory')?>/images/testi-4.jpg"
                                            class="img-fluid ic-main-img mb-4 mb-md-auto" alt="Image"> </div>
                                    <div class="col-md-9 text-left">
                                        <h3 class="mb-0">Mark Dodd</h3>
                                        <!-- <h6 class="mb-4">DIRECTOR OF AN AUSTRALIAN STEALTH STARTUP</h6>-->
                                        <i class="fas fa-quote-left ic-quote-icon mb-3"></i>
                                        <h5>We came to Inbound with an idea. The guys designed, developed and
                                            optimized my site.
                                            Rest is a success story worth telling. We went from 0 to 40,000
                                            visitors a day and sold on an average 500 tickets a day within 18
                                            months of the site being launched. Thanks for everything,</h5>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 5 -->
                        <div class="carousel-item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-md-3"> <img
                                            src="<?php echo get_bloginfo('template_directory')?>/images/testi-5.jpg"
                                            class="img-fluid ic-main-img mb-4 mb-md-auto" alt="Image"> </div>
                                    <div class="col-md-9 text-left">
                                        <h3 class="mb-0">Steve Brendish</h3>
                                        <!-- <h6 class="mb-4">DIRECTOR OF AN AUSTRALIAN STEALTH STARTUP</h6>-->
                                        <i class="fas fa-quote-left ic-quote-icon mb-3"></i>
                                        <h5>They've been extremely flexible in their process for delivering our
                                            project, just what our startup needed. It has been an
                                            extremely positive experience.</h5>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-fluid"
                                src="<?php echo get_bloginfo('template_directory')?>/images/testi-1.jpg" alt="Image">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-fluid"
                                src="<?php echo get_bloginfo('template_directory')?>/images/testi-2.jpg" alt="Image">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-fluid"
                                src="<?php echo get_bloginfo('template_directory')?>/images/testi-3.jpg" alt="Image">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="3"><img class="img-fluid"
                                src="<?php echo get_bloginfo('template_directory')?>/images/testi-4.jpg" alt="Image">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="4"><img class="img-fluid"
                                src="<?php echo get_bloginfo('template_directory')?>/images/testi-5.jpg" alt="Image">
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>