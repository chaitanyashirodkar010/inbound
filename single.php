<?php get_header(); ?>

<section class="ic-abt-bnr-sec ic-sec-pad ic-inr-bnr-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="ic-inr-sub-head d-inline-block ic-yellow-seperator"><?php echo the_field('the_subtitle'); ?>
                </h2>
                <h1 class="ic-font-weight-600 ic-color-black mb-4"><?php echo the_title(); ?></h1>
                <h5><?php echo the_field('description'); ?></h5>

            </div>
        </div>
    </div>
</section>
<section class="ic-challenge-sec ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php echo the_field('the_challengeleft_content_editior'); ?>
            </div>
            <div class="col-md-6">
                <?php echo the_field('the_challengeright_content_editior'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Approach Section -->
<section class="ic-approach-sec ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php echo the_field('approach_editor'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Result Section -->
<section class="ic-result-sec ic-sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            <?php echo the_field('result_editor'); ?>

                <div class="ic-spacer-40"></div>
                <?php
            if (have_rows('result_images')) :
                while (have_rows('result_images')) : the_row();
            ?>
          

                <img src="<?php the_sub_field('result_image'); ?>" class="img-fluid w-100 d-block" alt="">
                <div class="ic-spacer-80"></div>
                <?php
                endwhile;
            endif;
            ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="ic-box text-center mb-5 mb-md-auto">
                    <h1 class="ic-yellow-seperator d-inline-block mb-0"><?php the_field('web_traffic')?></h1>
                    <h4>Web Traffic</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ic-box text-center mb-5 mb-md-auto">
                    <h1 class="ic-yellow-seperator d-inline-block mb-0"><?php the_field('mql_volume')?></h1>
                    <h4>MQL Volume</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ic-box text-center">
                    <h1 class="ic-yellow-seperator d-inline-block mb-0"><?php the_field('cost_per_mql')?></h1>
                    <h4>Cost Per MQL</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>