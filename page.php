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

        <!-- MAIN CONTENT -->
        <section class="td_content">
            
            <!-- TITLE -->
            <section class="main_title">
                <div class="container">
                    <h1><span><?php the_title(); ?></span></h1>
                </div>
            </section>
            <!-- /TITLE -->
            
            <div class="space80"></div>
            
            <!-- CONTENT -->
            <section class="main_content">
                <div class="container">
                    <div class="row">
                        <div class="td-col-12">
                        
                            <!-- PRICING TABLE -->
                            <section class="xx_content">
                                
                                <div class="row">
                                    <?php if(has_post_thumbnail()){ ?>
                                        <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
                                        <div class="td-col-6"><img src="<?php echo $featured_image[0]; ?>" alt="" /></div>
                                        <div class="td-col-6 last">
                                            <?php
                                                /* show post or page content */
                                                $content = apply_filters('the_content', $post->post_content);           
                                                echo substr($content,0);
                                            ?>
                                        </div>
                                    <?php } else { ?>
                                        <div class="td-col-12">
                                            <?php
                                                /* show post or page content */
                                                $content = apply_filters('the_content', $post->post_content);           
                                                echo substr($content,0);
                                            ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                
                                <div class="space100"></div>
                                
                                <?php if( have_rows('extra_fields') ): ?>

                                    <!-- TEAM MEMBERS -->
                                    <div class="row">                                
                                        <?php

                                            $counter = 1;

                                            // loop through the rows of data
                                            while ( have_rows('extra_fields') ) : the_row();

                                                // display a sub field value
                                                $extra_field_image = get_sub_field('extra_field_image');
                                                $extra_field_heading = get_sub_field('extra_field_heading');
                                                $extra_field_subhead = get_sub_field('extra_field_subhead');
                                                $extra_field_content = get_sub_field('extra_field_content');
                                        ?>
                                
                                                <div class="td-col-3 <?php echo ( $counter % 4 == 0 ? 'last' : '' ); ?>">
                                                    <div class="td_member" data-text-hor-pos="left">
                                                        <div class="td_member_holder">
                                                            <div class="img_holder"><img src="<?php echo $extra_field_image['url']; ?>" alt="<?php echo $extra_field_image['alt']; ?>" /></div>
                                                            <div class="title_holder">
                                                                <h3><?php echo $extra_field_heading; ?></h3>
                                                                <span><?php echo $extra_field_subhead; ?></span>
                                                                <p><?php echo $extra_field_content; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                                $counter++;
                                            endwhile;
                                        ?>
                                    </div>
                                    <!-- /TEAM MEMBERS -->
                                <?php endif; ?>

                            </section>
                            <!-- /PRICING TABLE -->
                            
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- /CONTENT -->
            
            <div class="space100"></div>
            <div class="space70"></div>
            
        </section>
        <!-- /MAIN CONTENT -->
        
<?php get_footer(); ?>
