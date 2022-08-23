<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage clean blog
 * 
 */

global $post;
get_header('inner'); ?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2><?php the_title( $before = '', $after = '', $echo = true ) ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="<?php echo site_url( $path = '', $scheme = null ) ?>">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li><?php the_title( $before = '', $after = '', $echo = true ) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper hs_about_indx_inner_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_right_cont_wrapper">
                        <?php echo apply_filters('the_content', $post->post_content); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs about ind wrapper End -->
    <!-- hs advert wrapper Start -->
    <div class="hs_advert_main_wrapper">
        <div class="hs_advert_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 25px;">
                    <div class="hs_advert_cont_wrapper">
                        <h1><?php echo get_field('why_choose_us_title'); ?></h1>
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
    
    <?php if(have_rows('all_services','option')): ?>
        <!-- hs client slider wrapper Start -->
        <div class="hs_client_slider_main_wrapper">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Our <span> services</span></h2>
                            <h4><span></span></h4>
                            <!-- <p style="margin-bottom: 80px;">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_client_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <?php while(have_rows('all_services','option')): the_row(); ?>
                                <div class="item">
                                    <div class="hs_client_img_wrapper">
                                        <div class="hs_service_main_box_wrapper">
                                            <div class="hs_service_icon_main_wrapper">
                                                <div class="hs_service_icon_wrapper">
                                                    <img src="<?php echo get_sub_field('service_image','option'); ?>" style="width: 100%; border-radius: 100%;">
                                                </div>
                                            </div>
                                            <div class="hs_service_icon_cont_wrapper">
                                                <h2><?php echo get_sub_field('service_title','option'); ?></h2>
                                                <p><?php echo get_sub_field('service_short_texts','option'); ?></p>
                                                <h5><a href="<?php echo get_sub_field('service_url','option'); ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hs client slider wrapper End -->
    <?php endif; ?>
<?php get_footer(); ?>
