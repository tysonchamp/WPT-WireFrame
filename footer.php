
    <!-- hs footer wrapper Start -->
    <div class="hs_footer_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_logo_wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/content/footer_logo.png" alt="footer_logo" class="img-responsive" />
                        <p><?php echo get_field('footer_texts','option'); ?></p>
                        <!-- <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4> -->
                        <ul>
                            <?php if(have_rows('social_profiles', 'option')): ?>
                                <?php while(have_rows('social_profiles', 'option')): the_row(); ?>
                                    <li>
                                        <a href="<?php echo get_sub_field('social_url','option'); ?>">
                                            <i class="fa <?php echo get_sub_field('social_icon','option'); ?>"></i>
                                        </a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_help_wrapper">
                        <h2>Chamber <span>Details</span></h2>
                        <p><?php echo get_field('chamber_details','option'); ?></p>
                        <div class="hs_footer_help_btn">
                            <ul>
                                <li><a href="<?php echo get_page_link( 22, $leavename = false, $sample = false ) ?>" class="hs_btn_hover">Free Quote</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_contact_wrapper">
                        <h2>Contact <span>Us Today</span></h2>
                        <p>Call Us <span><?php echo get_field('phone_no1','option'); ?></span> OR <span><?php echo get_field('phone_no_2','option'); ?></span><br>Email:- <?php echo get_field('email_address','option'); ?><br>Address:- <?php echo get_field('address','option'); ?></p>
                        <p><a href="<?php echo get_page_link( 3, $leavename = false, $sample = false ) ?>">Privacy & Policy</a> | <a href="<?php echo get_page_link( 87, $leavename = false, $sample = false ) ?>">Terms & Condition</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs footer wrapper End -->
    <!-- hs bottom footer wrapper Start -->
    <div class="hs_bottom_footer_main_wrapper">
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer_bottom_cont_wrapper">
                        <p>© Copyright 2022 by Sibnath.com. All right Reserved - Design By <a href="https://www.wenifi.com">Wenifi Technology</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs bottom footer wrapper End -->
    <!--main js file start-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery_min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.menu-aim.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.shuffle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
    <!--main js file end-->
    <!-- Call Button Start -->
    <div class="call">
        <a href="https://wa.me/<?php echo get_field('whatsapp_no','option'); ?>?text=Please%20Help%20Me!" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/whatsapp1.png" style="width: 100%; margin-bottom: 15px; border:4px solid #f9a14d47; border-radius: 100%;" class="call_blink"></a>
    </div>
    <div class="call1">
        <a href="tel:<?php echo get_field('phone_no1','option'); ?>" target="blank"><img src="<?php echo get_template_directory_uri(); ?>/images/call.png" style="width: 100%; margin-bottom: 15px; border:4px solid #f9a14d47; border-radius: 100%;" class="call_blink"></a>
    </div>
    <!-- Call Button End -->
    <?php wp_footer(); ?>
</body>
</html>