<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    ?>
    <title>
        <?php wp_title( '' );
    
        // Add the blog name.
        //bloginfo( 'name' );
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'eventsmore' ), max( $paged, $page ) );  ?>
    </title>
    
    <?php 

        if (isset($_POST['subscribe'])) {
            $email = $_POST['subscribe_email'];

            $status = 'pending'; // "subscribed" or "unsubscribed" or "cleaned" or "pending"
            $list_id = get_field('list_id', 'option'); // where to get it read above
            $api_key = get_field('api_key', 'option'); // where to get it read above
            $merge_fields = array('FNAME' => ' ','LNAME' => ' ');
             
            rudr_mailchimp_subscriber_status($email, $status, $list_id, $api_key, $merge_fields );
        }

    ?>
    
    <?php wp_head(); ?>
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/layout.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/components.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages.css">
       
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- PRELOADER -->
        
        <!-- // PRELOADER -->

        <header>
            <!-- NAVBR -->
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <?php
    wp_nav_menu( array(
        'theme_location'    => 'menu_top',
        'container'     => '',
        'menu_id' =>false,
        'menu_class'        => 'nav navbar-nav', 
        'echo'          => true,
        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
        'depth'         => 10,
        'walker'        => new themeslug_walker_nav_menu
    ) );
?>
      
    </div>
  </div>
</nav>
  


        </header>
