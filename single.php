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
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="<?php echo site_url( $path = '', $scheme = null ) ?>">Home</a> &nbsp;&nbsp;&nbsp;> &nbsp;&nbsp;&nbsp;</li>
                            <li><a href="<?php echo site_url( $path = 'blog', $scheme = null ) ?>">Blog</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li><?php the_title(); ?></li>
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
                                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                                        <img src="<?php echo $featured_image[0]; ?>" alt="blog_img">
                                        <div class="hs_blog_Indx_date_wrapper">
                                            <ul>
                                                <li><?php the_time('j') ?></li>
                                                <li><?php the_time('M') ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="hs_blog_box1_cont_main_wrapper">
                                        <div class="hs_blog_cont_heading_wrapper">
                                            <h2><?php the_title( $before = '', $after = '', $echo = true ) ?></h2>
                                            <h4><span></span></h4>
                                            <?php echo apply_filters('the_content', $post->post_content); ?>
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
