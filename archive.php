<?php
/**
 * The template file for archives.
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


    <section id="blog" class="container">
        <div class="center">
            <h2>Blog</h2>
            <p class="lead">Welcome To My Blog</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <?php if ( have_posts() ) : ?>
                     <?php // shape_content_nav( 'nav-above' ); ?>
                     <?php /* Start the Loop */ ?>
                     <?php while ( have_posts() ) : the_post(); ?>
                 
                          <?php
                          /* Include the Post-Format-specific template for the content.
                          * If you want to overload this in a child theme then include a file
                          * called content-___.php (where ___ is the Post Format name) and    that will be used instead.
                          */
                          get_template_part( 'content', get_post_format() );
                          ?>
                     <?php endwhile; ?>
                     <?php // shape_content_nav( 'nav-below' ); ?>
                    <?php else : ?>
                    <?php get_template_part( 'no-results', 'index' ); ?>
                <?php endif; ?>
                        
                    <ul class="pagination pagination-lg">
                    <?php
                    if (function_exists("pagination")) {

                        pagination($additional_loop->max_num_pages);

                    } ?>
                    </ul>
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                    
                    <div class="widget categories">
                        <h3>Recent Comments</h3>
                        <div class="row">
                            <div class="col-sm-12">
                             <?php
                                $args = array(
                                    'status' => 'approve',
                                    'number' => '5',
                                );
                                $comments = get_comments($args);
                                foreach( $comments as $comment ){
                            ?>
                                <div class="single_comments">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                    <p><?php echo $comment->comment_content; ?></p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#"><?php echo $comment->comment_author; ?></a></span>
                                    </div>
                                </div>
                             <?php } ?>   
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                     

                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><?php wp_list_categories('title_li'); ?></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
                    
                    <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
                        </ul>
                    </div><!--/.tags-->
                    
                    <?php // get_sidebar(); ?>
                </aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

<?php get_footer(); ?>
