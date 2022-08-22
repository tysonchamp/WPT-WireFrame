<?php

/*
 * Theme Home Page
 */
GLOBAL $post;
$home_id = $post->ID;
get_header();
?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    <!-- hs Slider Start for Desktop-->
    <div class="slider-area">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-captions caption-1" style="background: url(images/header/slide.jpg) 50% 0 repeat-x;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h2 data-animation="animated zoomInDown">Astrologer <span>Tantrik Sree Sibnath</span></h2>
                                        <p data-animation="animated bounceInUp">Most Popular, Trustful & Experienced Astrologer. All Types Of Problems Are Solve Contact Now.</p>
                                        <div class="hs_effect_btn">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Read more</a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="content_tabs">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper" data-animation="animated bounceInLeft hs_slider_tab_one">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/libra.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_tow">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/aries.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/gemini.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/libra.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" carousel-captions caption-2" style="background: url(images/header/slide2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h2 data-animation="animated zoomInDown">the best <span>horoscope</span></h2>
                                        <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br> consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                        <div class="hs_effect_btn">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Read more</a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="content_tabs">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper" data-animation="animated bounceInLeft hs_slider_tab_one">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_tow">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_four">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Love Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_fifth">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Numerology</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="carousel-captions caption-3" style="background: url(images/header/slide.jpg) 50% 0 repeat-x;">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h2 data-animation="animated zoomInDown">the best <span>horoscope</span></h2>
                                        <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br> consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                        <div class="hs_effect_btn" style="margin-left: auto;">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Read more</a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="content_tabs">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper" data-animation="animated bounceInLeft hs_slider_tab_one">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Chinese Astrology</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_tow">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Vasthusastra</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_three">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Carrer Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInRight hs_slider_tab_four">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Love Tarot</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper hs_slider_right_tabs_wrapper2" data-animation="animated bounceInLeft hs_slider_tab_fifth">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class=""><img src="images/icon/sagittarius.png" style="width: 60%; "></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="#" class="hs_tabs_btn">Numerology</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span></li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        <span>PR<br>EV</span>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next">
                        <span>NE<br>XT</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- hs Slider End for Desktop-->
    <!--Slider Area Start for Mobile-->
    <Section class="img-slider">
        <div class="slider-container carousel slide " data-ride="carousel">
            <div class="slide ">
                <img src="images/header/slide.jpg">
                <div class="text">
                    <h1>Tarntrik Sree Sibnath</h1>
                </div>
            </div>
            <div class="slide">
                <img src="images/header/slide2.jpg">
                <div class="text">
                    <h1>Tarntrik Sree Sibnath</h1>
                </div>
            </div>
            <div class="slide">
                <img src="images/header/slide2.jpg">
                <div class="text">
                    <h1>Tarntrik Sree Sibnath</h1>
                </div>
            </div>
        </div>
    </Section>
    <!--Slider are end for Mobile-->
    <!-- hs about ind wrapper Start -->
    <div class="hs_about_indx_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>About <span>Austrology Service in Kolkata</span></h2>
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_about_left_img_wrapper">
                        <img src="images/content/about_img.jpg" alt="about_img" style="border-radius: 10px;" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_about_right_cont_wrapper">
                        <h2>HoroScope Revels The Will Of God</h2>
                        <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu
                            ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.</p>
                        <h3>Contact Us</h3>
                        <h1>+9800713636</h1>
                        <div class="hs_effect_btn hs_about_btn">
                            <ul>
                                <li><a href="#" class="hs_btn_hover">Read more</a></li>
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
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                        </div>
                    </div>
                </div>
                <div class="portfolio-area ptb-100">
                    <div class="container">
                        <div class="portfolio-filter clearfix text-center">
                        </div>
                        <div class="row">
                            <div id="gridWrapper" class="clearfix">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='[ "website"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Relationship Problem Solution</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='[ "website"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Relationship Problem Solution</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "business"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/3.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Intercaste Marriage Specialist</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "website", "business"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Lost Love Back Specialist</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "business"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/3.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Extra Marital Affair</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all","website"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/3.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Husband Wife Dispute</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all", "business"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/3.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Business Problems</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-wrapper III_column" data-groups='["all","website"]'>
                                    <div class="hs_service_main_box_wrapper home_service_bg">
                                        <div class="hs_service_icon_main_wrapper">
                                            <div class="hs_service_icon_wrapper">
                                                <img src="images/content/2.jpg" style="width: 100%; border-radius: 100%;">
                                            </div>
                                        </div>
                                        <div class="hs_service_icon_cont_wrapper">
                                            <a href="#">
                                                <h2>Family Problems</h2>
                                            </a>
                                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean .</p>
                                            <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                        </div>
                                    </div>
                                </div>
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
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_testi_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_testi_cont_main_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper">
                                            <div class="hs_testi_client_cont_sec">
                                                <h2>Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
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
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                            </div>
                                            <div class="hs_testi_client_cont_sec">
                                                <h2>Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                        <div class="hs_testi_cont_main_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper">
                                            <div class="hs_testi_client_cont_sec">
                                                <h2>Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                            </div>
                                            <div class="hs_testi_client_cont_sec">
                                                <h2>Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs">
                                        <div class="hs_testi_cont_main_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper">
                                            <div class="hs_testi_client_cont_sec">
                                                <h2>Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                            </div>
                                            <div class="hs_testi_client_cont_sec">
                                                <h2>Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        <h1>WHY CHOOSE<br> BEST AUTROLOGY SERVICE IN KOLKATA</h1>
                        <p><i class="fa fa-check" aria-hidden="true"></i> If you are interested in learning about the future, it is better to contact our Astrology specialist who will tell you everything about the future.<br> <i class="fa fa-check" aria-hidden="true"></i> We have access around the world, which is really easily accessible to anyone who needs to solve their problem.<br><i class="fa fa-check" aria-hidden="true"></i> We provide our 365 days availability to everyone who is near or far from us and to solve their problems.<br><i class="fa fa-check" aria-hidden="true"></i> Our services always make our customers happy by solving their problems and again make their life better for them.<br><i class="fa fa-check" aria-hidden="true"></i> Thousands of customers trust us only thanks to our services, which are very affordable and effective for everyone.</p>
                        <div class="hs_effect_btn hs_advert_btn_wrapper">
                            <ul>
                                <li><a href="#" class="hs_btn_hover">Read more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
                        <div class="count-description">
                            <div class="hs_main_cycle_main">
                                <span class="timer">25</span>
                            </div>
                            <h5 class="con1">Astrology <br>Prediction Expert</h5>
                        </div>
                    </div>
                    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
                        <div class="count-description">
                            <div class="hs_main_cycle_main">
                                <span class="timer">25</span>
                            </div>
                            <h5 class="con1">Worldwide <br>Access</h5>
                        </div>
                    </div>
                    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
                        <div class="count-description">
                            <div class="hs_main_cycle_main">
                                <span class="timer">365</span>
                            </div>
                            <h5 class="con1">Days<br> Availability</h5>
                        </div>
                    </div>
                    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
                        <div class="count-description">
                            <div class="hs_main_cycle_main">
                                <span class="timer">25</span>
                            </div>
                            <h5 class="con1">Happy <br> Clients</h5>
                        </div>
                    </div>
                    <div class="hs_counter_cont_wrapper hs_counter_cont_wrapper1">
                        <div class="count-description">
                            <div class="hs_main_cycle_main">
                                <span class="timer">25</span>
                            </div>
                            <h5 class="con1">Trusted <br>By Thousand Clients</h5>
                        </div>
                    </div>
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
                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br> auctor, nisi elit consequat hello Aenean world.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_lest_news_box_wrapper">
                        <div class="hs_lest_news_img_wrapper">
                            <img src="images/content/news_img1.jpg" alt="blog_img">
                            <div class="hs_lest_news_date_wrapper">
                                <ul>
                                    <li>25</li>
                                    <li>DEC</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hs_lest_news_cont_wrapper">
                            <h5>Proin gravida nibh vel velit auctor aliquet.</h5>
                            <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
                            <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_lest_news_box_wrapper">
                        <div class="hs_lest_news_img_wrapper">
                            <img src="images/content/news_img2.jpg" alt="blog_img">
                            <div class="hs_lest_news_date_wrapper">
                                <ul>
                                    <li>25</li>
                                    <li>DEC</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hs_lest_news_cont_wrapper">
                            <h5>Proin gravida nibh vel velit auctor aliquet.</h5>
                            <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
                            <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_lest_news_box_wrapper">
                        <div class="hs_lest_news_img_wrapper">
                            <img src="images/content/news_img3.jpg" alt="blog_img">
                            <div class="hs_lest_news_date_wrapper">
                                <ul>
                                    <li>25</li>
                                    <li>DEC</li>
                                </ul>
                            </div>
                        </div>
                        <div class="hs_lest_news_cont_wrapper">
                            <h5>Proin gravida nibh vel velit auctor aliquet.</h5>
                            <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.</p>
                            <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                        </div>
                    </div>
                </div>
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