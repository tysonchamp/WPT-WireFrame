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
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="<?php the_permalink(); ?>" class="block-20 rounded" style="background-image: url('<?php echo $featured_image[0]; ?>');">
                                </a>
                                <div class="text p-4">
                                    <div class="meta mb-2">
                                        <div><a href="<?php the_permalink(); ?>"><?php the_time( $d = 'j m, Y' ) ?></a></div>
                                        <div><?php echo the_author_link(); ?></div>
                                        <div><a href="<?php the_permalink(); ?>" class="meta-chat"><span class="fa fa-comment"></span> <?php echo comments_number( $zero = false, $one = false, $more = false, $deprecated = '' ) ?></a></div>
                                    </div>
                                    <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title( $before = '', $after = '', $echo = true ) ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <!-- <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--Testimonials start-->
    <section class="ftco-section testimony-section bg-light">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Testimonies</span>
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        
                        <?php if(have_rows('all_feedbacks', 'option')): ?>
                            <?php while(have_rows('all_feedbacks', 'option')): the_row(); ?>
                                <div class="item">
                                    <div class="testimony-wrap py-4">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                                        <div class="text">
                                            <p class="mb-4"><?php echo get_sub_field('feedback_texts'); ?></p>
                                            <div class="d-flex align-items-center">
                                                <div class="user-img" style="background-image: url(<?php echo get_sub_field('person_image'); ?>)"></div>
                                                <div class="pl-3">
                                                    <p class="name"><?php echo get_sub_field('person_name'); ?></p>
                                                    <span class="position"><?php echo get_sub_field('person_designation'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials end-->
    <!--Google Map-->
    <section class="googlemap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 p-0 m-0">
                    <?php echo get_field('footer_google_map','option'); ?>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>
