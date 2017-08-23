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
get_header(); ?>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="post-heading">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<div class="post-preview">
					<?php
                                $metadata = wp_get_attachment_metadata();
                                printf( __( '<span>Published in <a href="%6$s" title="Return to %7$s" rel="gallery">%7$s</a></span>', 'shape' ),
                                    esc_attr( get_the_date( 'c' ) ),
                                    esc_html( get_the_date() ),
                                    wp_get_attachment_url(),
                                    $metadata['width'],
                                    $metadata['height'],
                                    get_permalink( $post->post_parent ),
                                    get_the_title( $post->post_parent )
                                );
                            ?>
                            </div>
                                                
 
                                <a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
                                    $attachment_size = apply_filters( 'shape_attachment_size', array( 1000, 550 ) ); // Filterable image size.
                                    echo wp_get_attachment_image( $post->ID, $attachment_size );
                                ?></a>
                            <!-- .attachment -->
 
                        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'shape' ), 'after' => '</div>' ) ); ?>
                        <?php endwhile; // end of the loop. ?>
                </div>
            </div>
        </div>
    </article>

    <hr>

<?php
get_footer();
?>