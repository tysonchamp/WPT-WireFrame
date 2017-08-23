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

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <?php if ( have_posts() ) : ?>
                    <div class="page-heading">
                        <h3><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                        <hr class="small">
                        <span class="subheading">
                        <!-- text slider -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="row">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="carousel-content">
                                                <div>
                                                   <p>This is a twitter bootstrap carousel that only uses text. There are no images in the carousel slides.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="carousel-content">
                                                <div>
                                                    <p>This is another much longer item. Lorem ipsum dolor sit amet,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="carousel-content">
                                                <div>                           
                                                    <p>This is the third item.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        
                        </div>
                        <!-- text slider end -->

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
 
                    <?php get_template_part( 'content', 'search' ); ?>
 
                <?php endwhile; ?>
                
                <?php else : ?>
 
                <?php get_template_part( 'no-results', 'search' ); ?>
 
            <?php endif; ?>
				<!-- #content .site-content -->
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <?php posts_nav_link( ' &rarr; ', 'Newer Posts', 'Older Posts' ); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
