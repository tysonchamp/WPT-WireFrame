<?php
/*
 *Template Name: Services
 */
GLOBAL $post;
get_header('inner');

?>
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
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li><?php the_title( $before = '', $after = '', $echo = true ) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs sidebar Start -->
    <div class="hs_blog_categories_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="hs_blog_left_sidebar_main_wrapper" style="border: 1px dashed #cccccc; padding: 25px 15px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_kd_first_sec_wrapper">
                                    <h2><?php the_title( $before = '', $after = '', $echo = true ) ?></h2>
                                    <h4><span></span></h4>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_vs_second_sec_wrapper">
                                    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                                    <img src="<?php echo $featured_image[0] ?>" alt="vastu_img" />
                                </div>
                            </div>
                            <?php if(have_rows('all_texts_service')): ?>
                                <?php while(have_rows('all_texts_service')): the_row(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="hs_vs_second_sec_wrapper">
                                            <div class="hs_kd_first_sec_wrapper">
                                                <h2><?php echo get_sub_field('title_service'); ?></h2>
                                                <h4><span></span></h4>
                                            </div>
                                            <?php echo get_sub_field('descriptions_service'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-lg visible-md">
                    <div class="hs_blog_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>Others Services</h2>
                                </div>
                                <div class="hs_blog_right_cate_list_cont_wrapper">
                                    <!-- <ul>
                                        <li><a href="#">Vastu guid</a></li>
                                        <li><a href="#">Advanced vaastu</a></li>
                                        <li><a href="#">Vastu consultant</a></li>
                                        <li><a href="#">Vastu international</a></li>
                                        <li><a href="#">Vastu in hindi</a></li>
                                        <li><a href="#">Vastu tips</a></li>
                                    </ul> -->
                                    <?php
                                        wp_nav_menu( array(
                                            'theme_location'    => 'service_menu',
                                            'container'     => '',
                                            'menu_id' =>false,
                                            'menu_class'        => '', 
                                            'echo'          => true,
                                            'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
                                            'depth'         => 10,
                                            'walker'        => new service_nav_menu
                                        ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs sidebar End -->
    
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