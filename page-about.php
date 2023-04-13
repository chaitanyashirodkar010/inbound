<?php
/*
 * Template Name: About us page template
 * Description: Page template with sidebar included.
 */ get_header(''); ?>



<section class="ic-bnr-sec ic-sec-pad mangeseo  mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">

                <img src="<?php echo get_bloginfo('template_directory')?>/images/about.png" width="100%">

            </div>

        </div>
        <div class="talkbox4">
            <div class="row">

                <div class="col-lg-6">
                    <?php echo the_field('we_are_idea_catalyst') ?>
                </div>
                <div class="col-lg-6">
                    <div class="elvpop">
                        <?php echo the_field('elvpop') ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="ic-abt-bnr-sec mangeseo   ic-inr-bnr-sec ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <?php echo the_field('our_mission') ?>

            </div>
        </div>
    </div>
</section>



<!-- Trusted Section -->
<section class="ic-bnr-sec ic-sec-pad mangeseo pb-0">
    <div class="container">
        <div class="row">
            <?php echo the_field('achieve_our_mission') ?>
        </div>
    </div>
</section>




<section class="ic-bnr-sec ic-sec-pad mangeseo  mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-5">



            </div>

        </div>
        <div class="talkbox4">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4">
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/profileceo.png" width="100%"
                        style="position:relative">
                    <div class="ceopost">
                        <h5>Rishabhh Khurana</h5>
                        <h6>CEO & Head of Sales</h6>
                    </div>
                </div>
                <div class="col-lg-6 offset-md-1">
                    <?php echo the_field('founder_content') ?>
                </div>

            </div>
        </div>
    </div>
</section>




<section id="main" class="  mangeseo">
    <div class="container">
        <h2 class="ic-font-weight-600 ic-color-black mb-5 text-center">Frequently Asked Questions</h2>
        <div class="accordion" id="faq">
            <div class="card">
                <div class="card-header" id="faqhead1">
                    <a href="#" class="btn-header-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true"
                        aria-controls="faq1">What is SEO?</a>
                </div>

                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                    <div class="card-body">
                        SEO, also known as Search Engine Optimization, is a technique to increase your website’s
                        visibility, traffic and rankings in Search Engines (Google, Yahoo or Bing).
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead2">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                        aria-expanded="true" aria-controls="faq2">Why is SEO Important ?</a>
                </div>

                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                    <div class="card-body">
                        SEO is important for any website as it would make it easy for people on the web to find you on
                        the Search Engines when they fire any queries. This will help to increase your website’s
                        traffic, revenue and sales.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead3">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                        aria-expanded="true" aria-controls="faq3">How to hire a professional SEO services company?</a>
                </div>

                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                    <div class="card-body">
                        SEO is important for any website as it would make it easy for people on the web to find you on
                        the Search Engines when they fire any queries. This will help to increase your website’s
                        traffic, revenue and sales.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faqhead4">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                        aria-expanded="true" aria-controls="faq3">Why should I choose Uplers for professional SEO
                        services?</a>
                </div>

                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                    <div class="card-body">
                        What you look for in an operational partner are reliability and expertise. That’s exactly what
                        Uplers gives you. When it comes to SEO Services, we have over 9 years of experience, a team of
                        over 500 marketers and developers, and 7000 global clients. We have helped various organizations
                        achieve their goals, scale their operations and provide their business with an edge over the
                        others in the market.
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header" id="faqhead5">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                        aria-expanded="true" aria-controls="faq5">How can your professional SEO services company help
                        our business grow?</a>
                </div>

                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                    <div class="card-body">
                        Being a leading professional SEO services company, we at uplers have a talent pool of more than
                        80 SEO experts with experience of more than 8 years. We are one of the best SEO services
                        companies to have worked with leading B2B and B2C companies. We can help your business be found
                        by the right people, improve user experience and drive more sales and profitability.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faqhead6">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq6"
                        aria-expanded="true" aria-controls="faq6">How to get started for my SEO project?</a>
                </div>

                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                    <div class="card-body">
                        You can reach out to us for your SEO requirements. You can do that by booking an appointment
                        with any of our executives and we’ll ensure to get on a call with you. Let us know all your
                        requirements along with the level of expertise and experience preferred. We will set you up with
                        the best resources and help you get started.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- What make us Section -->

<!-- Footer Section -->
<?php get_footer(); ?>