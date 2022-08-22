<!DOCTYPE html>
<html lang="en">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    ?>
    <title>
        <?php wp_title( '' );
    
        // Add the blog name.
        //bloginfo( 'name' );
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'eventsmore' ), max( $paged, $page ) );  ?>
    </title>
    <?php wp_head(); ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sign_flaticon.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slide.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/header/slider_logo.png" />
</head>
<body>
    <!-- preloader Start -->
    <!-- <div id="preloader">
        <div id="status"><img src="<?php echo get_template_directory_uri(); ?>/images/header/horoscope.gif" id="preloader_image" alt="loader">
        </div>
    </div> -->
    <!-- hs top header Start -->
    <div class="hs_top_header_main_Wrapper">
        <div class="container">
            <div class="hs_header_logo_left hidden-xs">
                <div class="hs_logo_wrapper">
                    <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/header/logo.png" class="img-responsive" alt="logo" title="Logo" /></a>
                </div>
            </div>
            <div class="hs_header_logo_right">
                <div class="hs_btn_wrapper" data-toggle="modal" data-target="#myModal">
                    <ul>
                        <li><a href="#" class="hs_btn_hover">Get Appointments</a></li>
                    </ul>
                </div>
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/content/hback.jpg" style="width: 100%;">
                </div>
                <!--
                <div class="hs_header_add_wrapper hidden-xs hidden-sm">
                    <div class="hs_header_add_icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="hs_header_add_icon_cont">
                        <h5>Talk to Astrologers</h5>
                        <p>+91-123456789</p>
                    </div>
                </div>-->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Contact Sree Sibnath</h4>
                            </div>
                            <div class="modal-body">
                                <input type="email" placeholder="Enter Your Name...">
                                <input type="password" placeholder="Enter Your Phone...">
                                <button type="submit">Submit</button>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-header" style="margin-top: 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/content/hback.jpg" style="width: 100%;">
            </div>
        </div>
    </div>
    <!-- hs top header End -->
    <!-- hs Navigation Start -->
    <div class="hs_navigation_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <nav class="hs_main_menu hidden-xs">
                        <!-- <ul>
                            <li>
                                <a class="menu-button" href="index.html">Home</a>
                            </li>
                            <li>
                                <a class="menu-button" href="about.html">About Us</a>
                            </li>
                            <li class="dropdown-wrapper">
                                <a class="menu-button" href="#">Services</a>
                                <ul class="drop-menu hs_mega_menu">
                                    <li class="menu-button"><a href="service-details.html">Black Magic</a></li>
                                    <li class="menu-button"><a href="service-details.html">Love Specialist</a></li>
                                    <li class="menu-button"><a href="service-details.html">Love Black Magic</a></li>
                                    <li class="menu-button"><a href="service-details.html">Best Austrology</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="menu-button" href="blog.html">Blog </a>
                            </li>
                            <li>
                                <a class="menu-button" href="contact-us.html">Contact </a>
                            </li>
                        </ul> -->
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'desktop_menu',
                                'container'     => '',
                                'menu_id' =>false,
                                'menu_class'        => '', 
                                'echo'          => true,
                                'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                'depth'         => 10,
                                'walker'        => new desktop_nav_menu
                            ) );
                        ?>
                    </nav>
                    <header class="mobail_menu visible-xs">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6">
                                    <div class="hs_logo">
                                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/header/mobile_logo.png" alt="Logo" title="Logo"></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6">
                                    <div class="cd-dropdown-wrapper">
                                        <a class="house_toggle" href="#0">
                                            <i class="fa fa-bars" style="color: #fff; font-size: 30px;"></i>
                                        </a>
                                        <nav class="cd-dropdown">
                                            <h2><a href="index.html">Sibnath Sree</a></h2>
                                            <a href="#0" class="cd-close">Close</a>
                                            <ul>
                                                <li>
                                                    <form class="cd-search">
                                                        <input type="search" placeholder="Search...">
                                                    </form>
                                                </li>
                                            </ul>
                                            <!-- <ul class="cd-dropdown-content">
                                                <li>
                                                    <a href="index.html">Home</a>
                                                </li>
                                                <li>
                                                    <a href="#">About US</a>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Services</a>
                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                        <li>
                                                            <a href="#">Aries</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Chinese</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Blogs</a>
                                                </li>
                                                <li>
                                                    <a href="#">Contact</a>
                                                </li>
                                            </ul> -->
                                            <?php
                                                wp_nav_menu( array(
                                                    'theme_location'    => 'mobile_menu',
                                                    'container'         => '',
                                                    'menu_id'           => false,
                                                    'menu_class'        => 'cd-dropdown-content', 
                                                    'echo'              => true,
                                                    'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                                    'depth'             => 10,
                                                    'walker'            => new mobile_nav_menu
                                                ) );
                                            ?>
                                            <!-- .cd-dropdown-content -->
                                        </nav>
                                        <!-- .cd-dropdown -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .cd-dropdown-wrapper -->
                    </header>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                    <div class="hs_navi_searchbar_wrapper">
                        <input type="text" placeholder="Search here">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Navigation End -->