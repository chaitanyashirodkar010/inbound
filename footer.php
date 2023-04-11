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