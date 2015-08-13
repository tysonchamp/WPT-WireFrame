# wp-functions.php

This is my custom functions.php file to develop WP Themes.

Visit this link https://www.dropbox.com/s/fyhdad5sznqkau3/cleanblog-1.0.1.zip?dl=0 to download the full WP theme suitable for Blogging.

To use the pagination include pagination.css in your theme

Use below code to your theme where ever you want to show pagination

    <?php if (function_exists("pagination")) {
    
        pagination($additional_loop->max_num_pages);
    
    } ?>


If you found any fault or need improvement kindly share.

Thank you in advanced!
