<?php
/*
 *Template Name: Contact Us
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
                            <li><a href="<?php echo site_url( $path = '', $scheme = null ) ?>">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li><?php the_title( $before = '', $after = '', $echo = true ) ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs contact us Title Start -->
    <div class="hs_contact_tittle_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Need Help <span>Contact Us</span></h2>
                            <h4><span></span></h4>
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_contact_title_box_wrapper">
                        <i class="fa fa-phone"></i>
                        <p><?php echo get_field('phone_no1','option'); ?><br><?php echo get_field('phone_no_2','option'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_contact_title_box_wrapper">
                        <i class="fa fa-envelope"></i>
                        <p><?php echo get_field('email_address','option'); ?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_contact_title_box_wrapper">
                        <i class="fa fa-map-marker"></i>
                        <p><?php echo get_field('address','option'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs contact us Title End -->
    <!-- hs contact form Start -->
    <div class="hs_contact_indx_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Fill Free <span>Enquiry Form</span></h2>
                            <h4><span></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <form>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <label>Name</label>
                                    <input type="text" class="require" name="first_name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <label>Email</label>
                                    <input type="text" class="require" name="first_name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <label>Subject</label>
                                    <input type="text" class="require" name="first_name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <label>Phone Number</label>
                                    <input type="email" class="require" name="email" data-valid="email" data-error="Email should be valid.">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_kd_six_sec_input_wrapper">
                                    <label>Message</label>
                                    <textarea rows="6" class="require" name="message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="response"></div>
                                <div class="hs_contact_indx_form_btn">
                                    <ul>
                                        <li>
                                            <input type="hidden" name="form_type" value="contact">
                                            <button type="button" class="hs_btn_hover submitForm">Send a Message</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs contact form End -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php echo get_field('google_map'); ?>
            </div>
        </div>
    </div>
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
                                                    <img src="<?php get_sub_field('service_image','option'); ?>" style="width: 100%; border-radius: 100%;">
                                                </div>
                                            </div>
                                            <div class="hs_service_icon_cont_wrapper">
                                                <h2><?php get_sub_field('service_title','option'); ?></h2>
                                                <p><?php get_sub_field('service_short_texts','option'); ?></p>
                                                <h5><a href="<?php get_sub_field('service_url','option'); ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
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