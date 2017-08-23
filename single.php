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

get_header();
?>


    <section id="blog" class="container">
        <div class="center">
            <?php while ( have_posts() ) : the_post(); ?>
            <h2>Blog Post</h2>
            <!--<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>-->
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                            <?php
                              if ( has_post_thumbnail() ) {
                            ?>
                            
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array(750,9999), array( 'class' => 'img-responsive img-blog' ) ); ?></a>
                            
                            <?php } 
                            ?>
                            <div class="row">  
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php the_time('j, F'); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"> <?php the_author(); ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a href="#"><?php comments_number(); ?></a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><?php the_title(); ?></h2>
                                
                                    <?php
                                        /* show post or page content */
                                        $content = apply_filters('the_content', $post->post_content);           
                                        echo substr($content,$pos);
                                    ?>
                                
                                    <?php   
                                        $categories_list = get_the_category_list( __( ', ', 'shape' ) );
                                        $tags_list = get_the_tag_list( '', __( ', ', 'shape' ) );
                                    ?>

                                    <div class="post-tags">
                                        <strong>Tag:</strong> <?php printf( __( '%1$s', 'shape' ), $tags_list ); ?>
                                    </div>

                                    <div class="post-tags">
                                        <strong>Category:</strong> <?php printf( __( '%1$s', 'shape' ), $categories_list ); ?>
                                    </div>

                                    <?php
                                    // If comments are open or we have at least one comment, load up the comment template
                                    // if ( comments_open() || '0' != get_comments_number() )
                                        // comments_template( '', true );
                                    ?>

                                </div>
                            </div>
                        </div><!--/.blog-item-->
                        
                        <div class="media reply_section">
                            <div class="pull-left post_reply text-center">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                                <ul>
                                    <li><a href="http://fb.com/tysonblog"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://twitter.com/tysonchampno1"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com/+TysonGranger"><i class="fa fa-google-plus"></i> </a></li>
                                </ul>
                            </div>
                            <div class="media-body post_reply_content">
                                <h3>Soumya Mondal (Tyson)</h3>
                                <p class="lead">A blogger, web developer and Linux System admin who specializes in creating dynamic, secure web application and managing Linux Servers. Have been in the field since last 3 years, and have been loving every minute of it.</p>
                                <p><strong>Web:</strong> <a href="http://www.tysonchamp.com">www.tysonchamp.com</a></p>
                            </div>
                        </div>
                        
                        
                        <!--<h1 id="comments_title">5 Comments</h1>
                        
                        <div class="media comment_section">
                            <div class="pull-left post_comments">
                                <a href="#"><img src="images/blog/boy3.png" class="img-circle" alt="" /></a>
                            </div>
                            <div class="media-body post_reply_comments">
                                <h3>Marsh</h3>
                                <h4>NOVEMBER 9, 2013 AT 9:15 PM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href="#">Reply</a>
                            </div>
                        </div> -->


                        <div id="contact-page clearfix">
                            <div class="status alert alert-success" style="display: none"></div>
                            <!--<div class="message_heading">
                                <h4>Leave a Replay</h4>
                                <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
                            </div> 
      
                            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label>Name *</label>
                                            <input type="text" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Email *</label>
                                            <input type="email" class="form-control" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>URL</label>
                                            <input type="url" class="form-control">
                                        </div>                    
                                    </div>
                                    <div class="col-sm-7">                        
                                        <div class="form-group">
                                            <label>Message *</label>
                                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                                        </div>                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>-->
                            <?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || '0' != get_comments_number() )
								comments_template( '', true );
							?>     
                        </div>
                    </div><!--/.col-md-8-->

						<?php
                            endwhile; 
                            // end of the loop.
                        ?>
                
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

         </div><!--/.blog-->

    </section><!--/#blog-->

<?php
get_footer();
?>
