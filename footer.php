<footer>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 align-logo">
                <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img
                        src="<?php echo get_bloginfo('template_directory')?>/images/Logo.png" class="img-fluid" alt="Logo"></a>
                <div class="ic-seperator"></div>
                <div class="address-icon"><img src="<?php echo get_bloginfo('template_directory')?>/images/icons/new-york-icon.png"></div>
                <h5 class="address-heading">New York</h5>
                <h6 class="address">1280 Lexington Ave STE 2
                    New York, NY 10028</h6>
            </div>
            <div class="col-md-4 ic-col-pad ic-center-pad">
                <h4>About</h4>
                <div class="ic-seperator"></div>
                <h6 class="ic-color-black">We focus on results. <span class="ic-color-blue">We focus on
                        ROI.</span> Our experienced marketing specialists help brands understand where and how
                    their money is best spent,
                    whether that’s with social advertising or highly targeted search engine marketing.</h6>
            </div>
            <div class="col-md-3 ic-col-pad">
                <h4>Let's Connect</h4>
                <div class="ic-seperator"></div>


                <a href="https://www.linkedin.com/company/chlorophyll-marketing" target="_blank"><img
                        src="<?php echo get_bloginfo('template_directory')?>/images/LinkedIn_Logo.png"></a>
            </div>
            <div class="ic-seperator"></div>
            <a href="https://www.designrush.com/agency/profile/idea-catalyst" target="_blank" class="d-inline-block ms-2">See Idea Catalyst
                profile on DesignRush</a>
        </div>
    </div>
</footer>
<!-- echo get_bloginfo('template_directory'); -->

<!-- Body Wrapper Ends -->
<!-- General Js -->
<script src="<?php echo get_bloginfo('template_directory')?>/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap Js -->
<script src="<?php echo get_bloginfo('template_directory')?>/vendor/bootstrap/js/bootstrap.min.j"></script>
<!-- Font Awesome Js -->
<script src="<?php echo get_bloginfo('template_directory')?>/vendor/fontawesome/js/all.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>

<script>
jQuery(document).ready(function($) {
    var owl = $("#owl-demo-2 ,#owl-demo-3");
    owl.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        items: 3,
        loop: true,
        margin: 20,
        nav: false,


        responsive: {
            0: {
                items: 1,
                stagePadding: 30,

            },
            480: {
                items: 2,

            },
            768: {
                items: 3,
                // nav: true,

            },
            992: {
                items: 3,
                // nav: true,

            }
        },

    });

    $(".next").click(function() {
        owl.trigger("owl.next");
    });
    $(".prev").click(function() {
        owl.trigger("owl.prev");
    });
});



var menuitems = document.querySelectorAll('.menu-item')

menuitems.forEach(menuitem => {

    menuitem.addEventListener('click', () => {
        if (menuitem.getElementsByClassName('sub-menu')[0]) {
            menuitem.getElementsByClassName('sub-menu')[0].style.display = "block"
        } else {
            menuitem.getElementsByClassName('sub-menu')[0].style.display = "none"
        }
    })
});
</script>
</body>

</html>