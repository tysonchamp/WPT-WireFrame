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
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Contact Us</li>
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
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_contact_title_box_wrapper">
                        <i class="fa fa-phone"></i>
                        <p>+8100-123-13312<br>+1123-123-44565</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_contact_title_box_wrapper">
                        <i class="fa fa-envelope"></i>
                        <p>+8100-123-13312<br>+1123-123-44565</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_contact_title_box_wrapper">
                        <i class="fa fa-map-marker"></i>
                        <p>+8100-123-13312<br>+1123-123-44565</p>
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
                <iframe scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=100%&amp;height=400&amp;hl=en&amp;q=Puratan%20Ramgarh,%20Vii%20Kapat%20Khand%20Keyat%20Khanda,%20South%2024%20Parganas,%20Puratan,%20West%20Bengal%20743504%20+(Tantrik%20Sree%20Sibnath)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="400" frameborder="0"></iframe> <a href='https://addmap.net/'>adding a google map to your website</a>
                <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=5524f5d7db51243948d3d120b169c342677ba904'></script>
            </div>
        </div>
    </div>
    <!-- hs client slider wrapper Start -->
    <div class="hs_client_slider_main_wrapper">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_about_heading_main_wrapper">
                    <div class="hs_about_heading_wrapper">
                        <h2>Our <span> services</span></h2>
                        <h4><span></span></h4>
                        <p style="margin-bottom: 80px;">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="hs_client_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="hs_client_img_wrapper">
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Relationship Problem Solution</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hs_client_img_wrapper">
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Relationship Problem Solution</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hs_client_img_wrapper">
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Relationship Problem Solution</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="hs_client_img_wrapper">
                                <div class="hs_service_main_box_wrapper">
                                    <div class="hs_service_icon_main_wrapper">
                                        <div class="hs_service_icon_wrapper">
                                            <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                        </div>
                                    </div>
                                    <div class="hs_service_icon_cont_wrapper">
                                        <h2>Relationship Problem Solution</h2>
                                        <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                        <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs client slider wrapper End -->
<?php get_footer(); ?>