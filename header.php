<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Idea Catalyst - SEO company from NYC</title>
    <meta name="description"
        content="Idea Catalyst is an Growth Marketing Company specializing in SEO, PPC and Paid Social">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png"
        href="<?php echo get_bloginfo('template_directory')?>/images/favicon.png">
    <!-- Custom Fonts Css -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link rel="stylesheet"
        href="<?php echo get_bloginfo('template_directory')?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/vendor/fontawesome/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.theme.default.min.css'>
    <!-- Custom Style Css -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/css/style.css ?>">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory')?>/css/responsive.css ?>">
    <!--Jquery library-->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <!--Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K8GDRWYBGG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-K8GDRWYBGG');
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PKB365T');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <main>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKB365T" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Body Wrapper -->
        <div class="overflow-hidden">
            <!-- Header Section -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img
                                        src="<?php echo get_bloginfo('template_directory')?>/images/Logo.png"
                                        class="img-fluid" alt="Logo"></a>
                               
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                                    data-target="#hamburgernavmenucontent" aria-controls="hamburgernavmenucontent"
                                    aria-expanded="false" aria-label="Toggle navigation"> <span class="menu_toggle">
                                        <span class="hamburger"> <span></span> <span></span> <span></span> </span> <span
                                            class="hamburger-cross"> <span></span> <span></span> </span> </span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end" id="hamburgernavmenucontent">
                                    <ul>
                                        <?php if (has_nav_menu('header-menu')) {
              wp_nav_menu(array('theme_location' => 'header-menu'));
            } ?>

                                    </ul>
                                    <!-- <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Services
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="managed_seo_company.html">Managed SEO</a>
                                            </div>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="case-studies.html">Case
                                                Studies</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                                      
                                        <li class="nav-item"><a class="nav-link active" href="contact.html">Contact
                                                Us</a>
                                        </li>
                                        <li class="nav-item phone"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-telephone-forward"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                            <a href="tel:917 7303807"> 917 7303807 </a>
                                        </li>
                                    </ul> -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>