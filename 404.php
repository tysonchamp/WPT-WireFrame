<?php
/**
 * The template for displaying 404 not found error page.
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

    <section id="error" class="container text-center">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist or an other error occurred.</p>
        <a class="btn btn-primary" href="<?php echo site_url(); ?>">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->


<?php
get_footer();
?>
