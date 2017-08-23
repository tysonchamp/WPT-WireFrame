<?php
/*
 *Template Name: Contact Us
 */
GLOBAL $post;
get_header();

?>
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
                <div class="td-col-9 fix">
                
                    <!-- CONTACT -->
                    <section class="xx_content">
                        <div class="td_contact col2">
                    
                            <!-- GOOGLE MAP -->
                            <h4>Find Us With Google Map</h4>
                            <div class="td_gmap"><?php $google_map = get_field('google_map', 'option'); echo $google_map; ?></div>
                            <!-- GOOGLE MAP -->
                            
                            <!-- ADDRESS -->
                            <div class="row">
                                <div class="td-col-4">
                                    <div class="xx_location xx_di contactcol">
                                        <i class="xcon-home"></i> <span><?php $contact_address_field = get_field('contact_address_field', 'option'); echo $contact_address_field; ?></span>
                                    </div>
                                </div>
                                <div class="td-col-4">
                                    <div class="xx_phone xx_di contactcol">
                                        <i class="xcon-phone"></i> <span> Phone: <?php $contact_phone_number = get_field('contact_phone_number', 'option'); echo $contact_phone_number; ?> <br /> Fax: <?php $fax_number = get_field('fax_number', 'option'); echo $fax_number; ?></span>
                                    </div>
                                </div>
                                <div class="td-col-4 last">
                                    <div class="xx_email xx_di contactcol">
                                        <i class="xcon-mail-1"></i> <span> Email: <?php $contact_email_address = get_field('contact_email_address', 'option'); echo $contact_email_address; ?> <br /> Web: <a href="<?php $contact_web_sites = get_field('contact_web_sites', 'option'); echo $contact_web_sites; ?>"><?php $contact_web_sites = get_field('contact_web_sites', 'option'); echo $contact_web_sites; ?></a></span>
                                    </div>
                                </div>
                            </div>
                            <!-- /ADDRESS -->
                            <div class="space50"></div>
                            
                            <h4 class="col4">Get in Touch With Us</h4>
                            <?php
                                /* show post or page content */
                                $content = apply_filters('the_content', $post->post_content);           
                                echo substr($content,0);
                            ?>
                            
                            <!-- FORM -->
                            
                                
                                <input type="hidden" id="receiver" data-email="#" />
                                
                                <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                
                                <div class="empty_notice">
                                    <span>Please Fill Required Fields</span>
                                </div>
                                
                                <div class="row_wrap">
                                    <!--<div class="xx_col_a">
                                        <div class="xx_row">
                                            <label>Name: <span>*</span></label>                                    
                                            <input type="text" id="name" placeholder=""/>
                                        </div>
                                        
                                        <div class="xx_row">
                                            <label>Email: <span>*</span></label>
                                            <input type="text" id="email" placeholder=""/>
                                        </div>
                                        
                                        <div class="xx_row">
                                            <label>Subject:</label>
                                            <input type="text" id="subject" placeholder=""/>
                                        </div>
                                        
                                    </div>
                                    <div class="xx_col_b">
                                        <div class="xx_row">
                                            <label>Message: <span>*</span></label>          
                                            <textarea id="message" placeholder="" cols="6" rows="6"></textarea>
                                        </div>
                                        <div class="xx_row">
                                            <input type="button" class="td_contact_submit td_btn" id="submit" value="Send Message"/>
                                        </div>
                                    </div>-->
                                    <?php echo do_shortcode( '[contact-form-7 id="103" title="Contact form 1"]' ); ?>
                                    
                                </div>
                                
                            
                            <!-- /FORM-->
                        
                        </div>
                    </section>
                    <!-- /CONTACT -->
                    
                </div>
                
                <!-- SIDEBAR -->
                <div class="td_sidebar last" data-sticky="on">
                    <div class="td_sidebar_in">
                        <div class="forheight">
                        
                            <div class="widget_block">
                                <div class="wid-title">
                                    <span>Brochures</span>
                                </div>
                                <ul class="brochures">
                                    <?php if( have_rows('downloads') ): ?>
                                        <?php
                                            // loop through the rows of data
                                            while ( have_rows('downloads') ) : the_row();

                                                // display a sub field value
                                                $file = get_sub_field('file');
                                                $file_name = get_sub_field('file_name');
                                                $file_icon = get_sub_field('file_icon');
                                        ?>
                                                <li><a target="_blank" href="<?php echo $file['url'] ?>"><?php echo $file_icon; ?><span class="text_b"><?php echo $file_name; ?></span></a></li>
                                    <?php
                                                $counter++;
                                            endwhile;
                                        else:
                                    ?>
                                                <li><a href="#"><i class="xcon-file-pdf"></i><span class="text_b">No Downloads</span></a></li>
                                    <?php
                                        endif;
                                    ?>
                                </ul>
                            </div>
                            
                            
                            
                        </div>    
                    </div>
                </div>
                <!-- /SIDEBAR -->
                
            </div>
        </div>
    </section>
    <!-- /CONTENT -->
    
    <div class="space100"></div>
    <div class="space70"></div>
    
</section>
<!-- /MAIN CONTENT -->
<?php get_footer(); ?>