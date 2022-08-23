<?php
/**
 * The template file for categoriessearch results.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>

    <!-- Bread camp bar for desktop-->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo site_url( $path = '', $scheme = null ) ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo get_search_query(); ?> <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread"><?php echo get_search_query(); ?></h1>
                </div>
            </div>
        </div>
    </section>
    
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2><?php echo get_search_query(); ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="<?php echo site_url( $path = '', $scheme = null ) ?>">Home</a> &nbsp;&nbsp;&nbsp;> &nbsp;&nbsp;&nbsp;</li>
                            <li><a href="<?php echo site_url( $path = 'blog', $scheme = null ) ?>">Blog</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li><?php echo get_search_query(); ?></li>
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

                            <?php if(have_posts()): ?>
                                <?php while(have_posts()): the_post(); ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="hs_blog_box1_main_wrapper hs_blog_box2_main_wrapper">
                                            <div class="hs_blog_box1_img_wrapper">
                                                <?php if(has_post_thumbnail()): ?>
                                                    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                                                    <img src="<?php echo $featured_image[0]; ?>" alt="blog_img" style="width: 100%;">
                                                <?php endif; ?>
                                                <div class="hs_blog_Indx_date_wrapper">
                                                    <ul>
                                                        <li><?php the_time( $d = 'd' ) ?></li>
                                                        <li><?php the_time( $d = 'M' ) ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="hs_blog_box1_cont_main_wrapper">
                                                <div class="hs_blog_cont_heading_wrapper">
                                                    <h2><?php the_title( $before = '', $after = '', $echo = true ) ?></h2>
                                                    <h4><span></span></h4>
                                                    <?php the_excerpt(); ?>
                                                    <h5><a href="<?php the_permalink() ?>">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                                                </div>
                                            </div>
                                            <!-- <div class="hs_blog_box1_bottom_cont_main_wrapper">
                                                <div class="hs_blog_box1_bottom_cont_left">
                                                    <ul>
                                                        <li><a href="#">by - Admin</a></li>
                                                        <li><a href="#">In News - Horoscope</a></li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                            <?php endif; ?>

                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md">
                                <div class="pager_wrapper">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="btc_shop_pagi"><a href="#">01</a></li>
                                        <li class="btc_shop_pagi"><a href="#">02</a></li>
                                        <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                        <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="hs_blog_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_search_wrapper">
                                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                                        <input type="text" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>Blog CATEGORIES</h2>
                                </div>
                                <div class="hs_blog_right_cate_list_cont_wrapper">
                                    <ul>
                                        <?php
                                            $categories = get_categories( array(
                                                'hide_empty'    => true,
                                                'orderby'       => 'name',
                                                'order'         => 'ASC'
                                            ) );
                                        ?>
                                        <?php foreach( $categories as $category ) { ?>
                                            <li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo $category->name ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>Recent News</h2>
                                </div>
                                <?php
                                    $args = array(
                                        // Choose ^ 'any' or from below, since 'any' cannot be in an array
                                        'post_type' => array(
                                            'post',
                                        ),
                                
                                        'post_status' => array(
                                            'publish',
                                        ),
                                
                                        // Pagination Parameters
                                        'posts_per_page'         => 3,
                                        'posts_per_archive_page' => 3,
                                    );
                                    $query = new WP_Query( $args );
                                ?>
                                <?php if($query->have_posts()): ?>
                                    <?php while($query->have_posts()): $query->the_post(); ?>
                                        <div class="hs_blog_right_recnt_cont_wrapper">
                                            <div class="hs_footer_ln_img_wrapper">
                                                <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                                                <img src="<?php echo $featured_image[0] ?>" class="img-responsive" alt="ln_img" />
                                            </div>
                                            <div class="hs_footer_ln_cont_wrapper">
                                                <a href="<?php the_permalink(); ?>"><h4><?php the_title( $before = '', $after = '', $echo = true ) ?></h4></a>
                                                <p><?php the_time('M j, Y') ?></p>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                     
                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                                <div class="pager_wrapper">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="btc_shop_pagi"><a href="#">01</a></li>
                                        <li class="btc_shop_pagi"><a href="#">02</a></li>
                                        <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                        <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs sidebar End -->
 
<?php get_footer(); ?>
