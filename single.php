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
                        <h2>Blog Single</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Blog Single</li>
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
                    <div class="hs_blog_left_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_box1_main_wrapper">
                                    <div class="hs_blog_box1_img_wrapper">
                                        <img src="images/content/about_img.jpg" alt="blog_img">
                                        <div class="hs_blog_Indx_date_wrapper">
                                            <ul>
                                                <li>29</li>
                                                <li>Oct</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hs_blog_box1_cont_main_wrapper">
                                        <div class="hs_blog_cont_heading_wrapper">
                                            <h2>Rahu Enters Cancer and Ketu Enters Capricorn.</h2>
                                            <h4><span></span></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dlore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea odo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est labrum. Sed ut perspiciatis unde omnis iste natus error sit.<br><br>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore atis et quasi architecto
                                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit rnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non mquam eius modi tempora incidunt ut labore et dolore.<br><br>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore atis et quasi architecto
                                                beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit rnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non mquam eius modi tempora incidunt ut labore et dolore.</p>

                                        </div>
                                    </div>
                                    <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                        <div class="hs_blog_box1_bottom_cont_left">
                                            <ul>
                                                <li><a href="#">by - Admin</a></li>
                                                <li><a href="#">In News - Horoscope</a></li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="hs_blog_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_search_wrapper">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>Blog CATEGORIES</h2>
                                </div>
                                <div class="hs_blog_right_cate_list_cont_wrapper">
                                    <ul>
                                        <li><a href="#">Horoscope News</a></li>
                                        <li><a href="#">Astrology News</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Blog News</a></li>
                                        <li><a href="#">Puja Accessories</a></li>
                                        <li><a href="#">Religion Spiritual</a></li>
                                        <li><a href="#">Feng Shui Products</a></li>
                                        <li><a href="#">Lucky Stones</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>Recent News</h2>
                                </div>
                                <a href="#">
                                <div class="hs_blog_right_recnt_cont_wrapper">
                                    <div class="hs_footer_ln_img_wrapper">
                                        <img src="images/content/about_img.jpg" class="img-responsive" alt="ln_img" />
                                    </div>
                                    <div class="hs_footer_ln_cont_wrapper">
                                        <h4>Astrolger Member in the life soltion.</h4>
                                        <p>12 May 2022</p>
                                    </div>
                                </div></a>
                               <a href="#">
                                <div class="hs_blog_right_recnt_cont_wrapper">
                                    <div class="hs_footer_ln_img_wrapper">
                                        <img src="images/content/about_img.jpg" class="img-responsive" alt="ln_img" />
                                    </div>
                                    <div class="hs_footer_ln_cont_wrapper">
                                        <h4>Astrolger Member in the life soltion.</h4>
                                        <p>12 May 2022</p>
                                    </div>
                                </div></a>
                                <a href="#">
                                <div class="hs_blog_right_recnt_cont_wrapper">
                                    <div class="hs_footer_ln_img_wrapper">
                                        <img src="images/content/about_img.jpg" class="img-responsive" alt="ln_img" />
                                    </div>
                                    <div class="hs_footer_ln_cont_wrapper">
                                        <h4>Astrolger Member in the life soltion.</h4>
                                        <p>12 May 2022</p>
                                    </div>
                                </div></a>
                                
                            </div>
                         
                      

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs sidebar End -->

<?php get_footer(); ?>
