<?php get_header(); ?>
<!-- Banner Section -->
<section class="ic-bnr-sec ic-sec-pad mangeseo">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="ic-font-weight-600 ic-color-black mb-3">We help companies get more customers from
                    Google through short term SEO "Sprints".
                </h1>
                <h5>Rank High Faster. Increase Traffic. Achieve Better ROIs</h5>
                <div class="ic-spacer-40"></div>

                <ul class="seoul">
                    <li><img src="<?php echo get_bloginfo('template_directory')?>/images/icons/1.png" />Faster Results
                    </li>
                    <li class=" border-right-0 pl-lg-4 pl-0"><img
                            src="<?php echo get_bloginfo('template_directory')?>/images/icons/2.png" />No Monthly
                        Retainers</li>
                    <li><img src="<?php echo get_bloginfo('template_directory')?>/images/icons/3.png" />No Long Term
                        Contracts</li>
                    <li class=" border-right-0 pl-lg-4 pl-0"><img
                            src="<?php echo get_bloginfo('template_directory')?>/images/icons/4.png" />Transparent
                        Pricing
                    </li>
                    <li class="border-bottom-0"><img
                            src="<?php echo get_bloginfo('template_directory')?>/images/icons/5.png" />Risk Free
                        Campaigns</li>
                    <li class="border-bottom-0 border-right-0 pl-lg-4 pl-0"><img
                            src="<?php echo get_bloginfo('template_directory')?>/images/icons/6.png" />White Hat
                        Link Building</li>
                </ul>

            </div>
            <div class="col-lg-4 ic-bnr-box-col">
                <div class="stratebox">
                    <h1>Strategy Sprint</h1>
                    <!-- <p>( For Clutch Customers )</p> -->

                    <h2 class="amount">$1200</h2>
                    <h2 class="ic-font-weight-600">$0</h2>

                    <ul class="text-left keyul">
                        <li>Keyword Research & Prioritization</li>
                        <li>Technical Audit & Recommendation Report</li>
                        <li>2x Guest Posting Writing & Link</li>
                        <li>Website Pages Optimized (Upto 30)
                        </li>
                    </ul>

                    <a class="ordbtn" href="tel:917 7303807">Order your Strategy Sprint</a>
                </div>

                <div class="likebox" style="display: none;">
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/likeuser.png">
                    <h6>Johan has liked this community</h6>
                    <div class="liks"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ic-case-sec  mangeseo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="reviwbox">
                    <ul>
                        <li>

                            <h5>120+</h5>
                            <p>Perfessional SEO Experts</p>
                        </li>
                        <li>

                            <h5>89 Million</h5>
                            <p> Organic Visitits for our cleints in 2021</p>
                        </li>
                        <li>

                            <h5>700+</h5>
                            <p>Global clients</p>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-12 text-center mt-5 pt-2">
                <div class="cluchlogo">
                    <img src="<?php echo get_bloginfo('template_directory')?>/images/cluch_logo 1.png" />
                    <h6>We are rated 4.9 out of 5</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ic-bnr-sec ic-sec-pad mangeseo mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="ic-font-weight-600 ic-color-black mb-5 text-center">Why SEO Sprints?

                </h1>
                <h6 class="mb-2">Your current SEO agency lied to you. They told you "SEO is an ongoing process"
                    to lock in a long term contract and collect checks, even when they're not doing any work.
                </h6>

                <h6 class="mb-2">The truth is, most of the work done to your website is a 1 time action, you
                    shouldn’t have to pay for the time waiting for your website to rank.</h6>

                <h6 class="mb-2">Here at IDEA CATALYST, we batch work in short “sprints” that combines our
                    proprietary technology with the careful attention of SEO experts. We’re able to complete 12
                    months work of SEO work in 12 weeks.</h6>
                <div class="ic-spacer-40"></div>



            </div>
        </div>
        <div id="owl-demo-3" class="owl-carousel owl-theme">
            <div class="item">

                <div class="whybox">
                    <h3>Audit Sprint</h3>
                    <p>Keyword Research & Prioritization</br></br>
                        Technical Audit & Recommendation </br></br>
                        Report</br></br>
                        2x Guest Posting Writing & Link</br></br>
                        Website Pages Optimized (Upto 30)
                    </p>

                    <a class="ordbtn">Get Started</a>
                </div>
            </div>

            <div class="item">
                <div class="whybox">
                    <h3>Content Sprint</h3>
                    <p>Content research + strategy</br></br>
                        Keyword research</br></br>
                        Topic identification</br></br>
                        Content brief creation</br></br>
                        Content calendar management


                    </p>

                    <a class="ordbtn">Get Started</a>
                </div>
            </div>

            <div class="item">
                <div class="whybox">
                    <h3>Link Sprint</h3>
                    <p>Full link scrub + audit</br></br>
                        Target link type identification</br></br>
                        Target page identification</br></br>
                        Email outreach + management</br></br>
                        Link acquisition + tracking


                    </p>

                    <a class="ordbtn">Get Started</a>
                </div>
            </div>

        </div>
    </div>
</section>


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
<!-- Trusted Section -->
<section class="ic-bnr-sec ic-sec-pad mangeseo pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="ic-font-weight-600 ic-color-black mb-5 text-left">What we do

                </h1>

                <div class="ic-spacer-40"></div>



            </div>
            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>SEO</h3>
                    <p>Rank on the top of Google results through our market driven seo consulting approach to
                        finding the best opportunities for your business.
                    </p>


                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>DIGITAL PR MARKETING</h3>
                    <p>The future of digital marketing lies in content creation, and there’s nobody better
                        suited and positioned than our content experts.
                    </p>


                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>Content Development</h3>
                    <p>Instead of brainstorming on whiteboards and post its, we use hard nosed data to drive the
                        content we develop for your site. </p>

                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>KEYWORD RESEARCH</h3>
                    <p>Choosing the right keywords is the difference between an effective SEO campaign and one
                        that wastes times, resources and money. </p>

                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>ON SITE SEO</h3>
                    <p>We'll help make sure the right keywords and content are optimized on your site and also
                        ensure Google understands which page to rank. </p>

                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>Content Development</h3>
                    <p>Instead of brainstorming on whiteboards and post its, we use hard nosed data to drive the
                        content we develop for your site. </p>

                </div>
            </div>


            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>RANKING REPORTING</h3>
                    <p>Every month we'll check in and evaluate how rankings are performing for your site and
                        business to stay on track </p>

                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>TECHNICAL SEO</h3>
                    <p>To rank on Google sites now need to stay easily crawlable, fast and easy for users to
                        use. We'll help audit to ensure your site is performing well. </p>

                </div>
            </div>

            <div class="col-md-4 bor-left">
                <div class="whatwe">
                    <h3>LOCAL SEO</h3>
                    <p>Local SEO operates with different factors and tools than traditional SEO, our team has
                        years of experience helping acquiring local rankings </p>

                </div>
            </div>

        </div>
    </div>
</section>




<section class="ic-bnr-sec ic-sec-pad mangeseo mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <h1 class="ic-font-weight-600 ic-color-black mb-3 text-left">Who we are

                </h1>
                <h6 class="mb-2">Idea Catalyst is one of the worlds leading SEO and Link Building Agency. We
                    have served over 1000+ clients from all over the world. Our stellar ratings are a standing
                    proof of our exemplery service and customer support.</h6>

                <div class="ic-spacer-40"></div>

            </div>

            <div class="col-lg-10 offset-md-2">
                <h1 class="ic-font-weight-600 ic-color-black mb-3 text-left">Fully Remote

                </h1>
                <h6 class="mb-2">Fully Remote and we won’t have it another way. We hire based off of skills and
                    not location. This allows us to staff the best people possible and our talent pool is
                    literally bound by nothing. This also means we don’t overheads and wedon’t have to charge
                    crazy rates just to pay our office rent.</h6>



            </div>





        </div>
    </div>
</section>

<section class="bgtalk  mb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 offset-md-6 mt-5 mb-5">
                <h2 class="ic-font-weight-600 ic-color-black mb-3 text-left">Curious?</br>
                    Let’s talk link building
                </h2>
                <h6 class="mb-3">We love talking link building. Let us know about your project and we'll send
                    you a free proposal</h6>

                <a class="talkbtn">Get Started</a>

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
                        SEO is important for any website as it would make it easy for people on the web to find
                        you on the Search Engines when they fire any queries. This will help to increase your
                        website’s traffic, revenue and sales.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="faqhead3">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                        aria-expanded="true" aria-controls="faq3">How to hire a professional SEO services
                        company?</a>
                </div>

                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                    <div class="card-body">
                        SEO is important for any website as it would make it easy for people on the web to find
                        you on the Search Engines when they fire any queries. This will help to increase your
                        website’s traffic, revenue and sales.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="faqhead4">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq4"
                        aria-expanded="true" aria-controls="faq3">Why should I choose Uplers for professional
                        SEO services?</a>
                </div>

                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                    <div class="card-body">
                        What you look for in an operational partner are reliability and expertise. That’s
                        exactly what Uplers gives you. When it comes to SEO Services, we have over 9 years of
                        experience, a team of over 500 marketers and developers, and 7000 global clients. We
                        have helped various organizations achieve their goals, scale their operations and
                        provide their business with an edge over the others in the market.
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-header" id="faqhead5">
                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq5"
                        aria-expanded="true" aria-controls="faq5">How can your professional SEO services company
                        help our business grow?</a>
                </div>

                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                    <div class="card-body">
                        Being a leading professional SEO services company, we at uplers have a talent pool of
                        more than 80 SEO experts with experience of more than 8 years. We are one of the best
                        SEO services companies to have worked with leading B2B and B2C companies. We can help
                        your business be found by the right people, improve user experience and drive more sales
                        and profitability.
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
                        You can reach out to us for your SEO requirements. You can do that by booking an
                        appointment with any of our executives and we’ll ensure to get on a call with you. Let
                        us know all your requirements along with the level of expertise and experience
                        preferred. We will set you up with the best resources and help you get started.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- What make us Section -->

<!-- Footer Section -->
<?php get_footer(); ?>