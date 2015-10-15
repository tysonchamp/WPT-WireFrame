# wp-functions.php

This is my custom functions.php file to develop WP Themes.

Visit this link https://www.dropbox.com/s/fyhdad5sznqkau3/cleanblog-1.0.1.zip?dl=0 to download the full WP theme suitable for Blogging.

To use the pagination include pagination.css in your theme

Use below code to your theme where ever you want to show pagination

    <?php if (function_exists("pagination")) {
    
        pagination($additional_loop->max_num_pages);
    
    } ?>

Use below code for the nav menu creation

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

If you found any fault or need improvement kindly share.

Thank you in advanced!

# Update:

1. Reference to TGM Plugin Activation library that allows you to easily require or recommend plugins for your WordPress themes (and plugins). It allows your users to install, update and even automatically activate plugins in singular or bulk fashion using native WordPress classes, functions and interfaces. https://github.com/TGMPA/TGM-Plugin-Activation
