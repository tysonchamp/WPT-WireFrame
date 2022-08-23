<?php

/*
 * Theme Home Page
 */
GLOBAL $post;
$home_id = $post->ID;
get_header();
?>    
    <!--Slider Area Start for Mobile-->
    <div class="container-fluid">
        <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php if(have_rows('slider_images','option')): ?>
                        <?php $sliderCounter = 0; ?>
                        <?php while(have_rows('slider_images','option')): the_row(); ?>
                            <li data-target="#myCarousel" data-slide-to="<?php echo $sliderCounter; ?>" class="<?php echo ($sliderCounter == 0 ? 'active' : '') ?>"></li>
                            <?php $sliderCounter++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php if(have_rows('slider_images','option')): ?>
                        <?php $sliderCounter = 0; ?>
                        <?php while(have_rows('slider_images','option')): the_row(); ?>
                            <div class="item <?php echo ($sliderCounter == 0 ? 'active' : '') ?>">
                                <img src="<?php echo get_sub_field('select_a_image','option') ?>" alt="Los Angeles" style="width:100%;">
                            </div>
                            <?php $sliderCounter++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left fa fa-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right fa fa-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--Slider are end for Mobile-->
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper" style="background: #e52202; text-align: center; margin-top: 5px; padding: 30px 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2 class="astrology-h1" style="color: #db990c;"><?php echo get_field('quick_info_title'); ?></span></h2>
                            <p class="astrology-p" style="color: #db990c;"><?php echo get_field('quick_info_texts'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper End -->
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2><?php echo get_field('about_title'); ?></h2>
                            <h4><span></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_about_left_img_wrapper">
                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                        <img src="<?php echo $featured_image[0]; ?>" alt="about_img" style="border-radius: 15px;" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_about_right_cont_wrapper">
                        <?php echo get_field('about_descriptions'); ?>
                        <div class="hs_effect_btn hs_about_btn">
                            <ul>
                                <li><a href="<?php echo get_field('phone_no1','option'); ?>" class="hs_btn_hover"><?php echo get_field('phone_no1','option'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper End -->
    <!-- hs service wrapper Start -->
    <div class="home_service_main_wrapper">
        <div class="home_service_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="home_service_heading_main_wrapper" style="margin-bottom: 40px;">
                        <div class="home_service_heading_wrapper">
                            <h2>Our <span> services</span></h2>
                            <h4><span></span></h4>
                            <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p> -->
                        </div>
                    </div>
                </div>
                <div class="portfolio-area ptb-100">
                    <div class="container">
                        <div class="portfolio-filter clearfix text-center">
                        </div>
                        <div class="row">
                            <div id="gridWrapper" class="clearfix">
                                <?php if(have_rows('all_services','option')): ?>
                                    <?php while(have_rows('all_services','option')): the_row(); ?>
                                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='[ "website"]'>
                                            <div class="hs_service_main_box_wrapper home_service_bg">
                                                <div class="hs_service_icon_main_wrapper">
                                                    <div class="hs_service_icon_wrapper">
                                                        <img src="<?php echo get_sub_field('service_image','option'); ?>" style="width: 100%; border-radius: 100%;">
                                                    </div>
                                                </div>
                                                <div class="hs_service_icon_cont_wrapper">
                                                    <a href="<?php echo get_sub_field('service_url','option'); ?>">
                                                        <h2><?php echo get_sub_field('service_title','option'); ?></h2>
                                                    </a>
                                                    <p><?php echo get_sub_field('service_short_texts','option'); ?></p>
                                                    <h5><a href="<?php echo get_sub_field('service_url','option'); ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <!--/#gridWrapper-->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!--/.portfolio-area-->
            </div>
        </div>
    </div>
    <!-- hs service wrapper End -->
    <!-- hs testi slider wrapper Start -->
    <div class="hs_testi_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>What clients <span> are saying</span></h2>
                            <h4><span></span></h4>
                            <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_testi_slider_wrapper">
                        <div class="owl-carousel owl-theme">

                            <?php if(have_rows('all_feedbacks','option')): ?>
                                <?php while(have_rows('all_feedbacks','option')): the_row(); ?>
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="hs_testi_cont_main_wrapper">
                                                    <div class="hs_testi_cont_inner_wrapper">
                                                        <div class="hs_testi_quote_wrapper">
                                                            <i class="fa fa-quote-left"></i>
                                                        </div>
                                                        <div class="hs_testi_quote_cont_wrapper">
                                                            <p><?php echo get_sub_field('feedback_texts','option'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hs_testi_client_main_wrapper">
                                                    <div class="hs_testi_client_cont_sec">
                                                        <h2><?php echo get_sub_field('customer_name','option'); ?></h2>
                                                        <p><?php echo get_sub_field('designation','option'); ?></p>
                                                    </div>
                                                    <div class="hs_testi_client_cont_img_sec">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/content/testi_client_img1.jpg" alt="testi_img" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                                <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                                    <div class="hs_testi_cont_inner_wrapper">
                                                        <div class="hs_testi_quote_wrapper">
                                                            <i class="fa fa-quote-left"></i>
                                                        </div>
                                                        <div class="hs_testi_quote_cont_wrapper">
                                                            <p><?php echo get_sub_field('feedback_texts2','option'); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                                    <div class="hs_testi_client_cont_img_sec">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/content/testi_client_img1.jpg" alt="testi_img" />
                                                    </div>
                                                    <div class="hs_testi_client_cont_sec">
                                                        <h2><?php echo get_sub_field('customer_name2','option'); ?></h2>
                                                        <p><?php echo get_sub_field('designation2','option'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs testi slider wrapper End -->
    <!-- hs advert wrapper Start -->
    <div class="hs_advert_main_wrapper">
        <div class="hs_advert_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 25px;">
                    <div class="hs_advert_cont_wrapper">
                        <h1><?php echo get_field('why_choose_us_title'); ?></h1>
                        <?php echo get_field('why_choose_texts'); ?>
                        <div class="hs_effect_btn hs_advert_btn_wrapper">
                            <ul>
                                <li><a href="<?php echo get_page_link( 10, $leavename = false, $sample = false ) ?>" class="hs_btn_hover">Read more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">

                    <?php if(have_rows('why_choose_us')): ?>
                        <?php while(have_rows('why_choose_us')): the_row(); ?>
                            <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
                                <div class="count-description">
                                    <div class="hs_main_cycle_main">
                                        <span class="timer"><?php echo get_sub_field('number'); ?></span>
                                    </div>
                                    <h5 class="con1"><?php echo get_sub_field('reason_texts'); ?></h5>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- hs advert wrapper End -->
    <!-- hs latest news wrapper Start -->
    <div class="hs_latest_news_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Latest <span> News</span></h2>
                            <h4><span></span></h4>
                            <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p> -->
                        </div>
                    </div>
                </div>
                <?php
                        /*
                         * The WordPress Query class.
                         *
                         * @link http://codex.wordpress.org/Function_Reference/WP_Query
                         */
                        $args = array(
                            
                            // Choose ^ 'any' or from below, since 'any' cannot be in an array
                            'post_type' => array(
                                'post',
                            ),
                    
                            'post_status' => array(
                                'publish',
                            ),
                    
                            // Order & Orderby Parameters
                            'order'               => 'DESC',
                            'orderby'             => 'date',
                    
                            // Pagination Parameters
                            'posts_per_page'         => 3,
                            'posts_per_archive_page' => 3,
                        );
                    
                    $query = new WP_Query( $args );
                    
                ?>
                <?php if($query->have_posts()): ?>
                    <?php while($query->have_posts()): $query->the_post(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="hs_lest_news_box_wrapper">
                                <div class="hs_lest_news_img_wrapper">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                                        <img src="<?php echo $featured_image[0] ?>" alt="blog_img">
                                    <?php endif; ?>
                                    <div class="hs_lest_news_date_wrapper">
                                        <ul>
                                            <li><?php the_time( 'j' ) ?></li>
                                            <li><?php the_time( 'M' ) ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="hs_lest_news_cont_wrapper">
                                    <h5><?php the_title( $before = '', $after = '', $echo = true ) ?></h5>
                                    <?php the_excerpt() ?>
                                    <h4><a href="<?php the_permalink() ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- hs latest news wrapper End -->
    <!-- hs online slider wrapper Start 
    <div class="hs_online_main_slider_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="hs_online_slider_left_cont">
                        <h2>Astrologer Tantrik  <span>Sree Sibnath</span></h2>
                        <p style="color: #fff;">Most Popular, Trustful & Experienced Astrologer Contact For Solution </p>
                        <p style="color: #fff; font-size: 30px; font-weight: bold;">+91-98007 13636 </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     hs online slider wrapper End -->
<?php get_footer(); ?>