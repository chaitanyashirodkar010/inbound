<?php
/*
 * Template Name: homepage
 * Description: Page template with sidebar included.
 */ get_header(''); ?>

<!-- Banner Section -->
<!-- Banner Section -->
<section class="ic-abt-bnr-sec ic-sec-pad ic-inr-bnr-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="ic-inr-sub-head d-inline-block ic-yellow-seperator">Case Studies</h2>
                <h1 class="ic-font-weight-600 ic-color-black mb-4">Our Work</h1>
                <h5>Idea Catalyst has a storied history of success with Search Engine Optimization. Over the years we
                    have not only delivered growth in Search Engine Rankings and Traffic but in Sales, Revenues as well
                </h5>
            </div>
        </div>
    </div>
</section>
<!-- Case Studies Section -->
<section class="ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ic-yellow-seperator d-inline-block"></h2>
                <div class="ic-spacer-20"></div>
            </div>

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


            <div class="col-md-4">
                <article class="mb-5 mb-md-auto">
                    <div class="md-img-zoom"><img src="<?php the_field('featured_image'); ?>" class="img-fluid"
                            alt="Case Study Yourmechanic"></div>
                    <p class="ic-montserrat my-4 ic-color-black"><?php echo get_the_title(  ); ?></p>
                    <h3><a href="<?php echo get_permalink() ?>"
                            class="ic-color-black"><?php echo wp_strip_all_tags( get_the_content() );?></a></h3>
                    <div class="ic-case-seperator mt-4"></div>
                </article>
            </div>


            <?php	endwhile; endif; ?>

        </div>
    </div>
</section>
<!-- Footer Section -->
<?php get_footer(); ?>