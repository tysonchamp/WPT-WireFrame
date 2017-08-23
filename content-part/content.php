<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage clean-blog
 */
?>

<div class="blog-item">
<div class="row">
    <div class="col-xs-12 col-sm-2 text-center">
        <div class="entry-meta">
            <span id="publish_date"><?php the_time('j F'); ?></span>
            <span><i class="fa fa-user"></i> <a href="#"><?php the_author() ?></a></span>
            <span><i class="fa fa-comment"></i> <a href="<?php the_permalink(); ?>"><?php comments_number(); ?></a></span>
        </div>
    </div>
        
    <div class="col-xs-12 col-sm-10 blog-content">
        <?php
                if ( has_post_thumbnail() ) {
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-thumb', array( 'class' => 'img-responsive img-blog' ) ); ?></a>
        <?php } 
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php echo esc_attr( sprintf( __( '%s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?></a></h2>
        <h3><?php the_excerpt(); ?></h3>
        <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
    </div>
</div>    
</div><!--/.blog-item-->