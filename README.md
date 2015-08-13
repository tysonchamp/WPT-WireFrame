# wp-functions.php

This is my custom functions.php file to develop WP Themes.

Visit this link https://www.dropbox.com/s/fyhdad5sznqkau3/cleanblog-1.0.1.zip?dl=0 to download the full WP theme suitable for Blogging.

To use the pagination paste below css in your style.css

.pagination {
clear:both;
padding:20px 0;
position:relative;
font-size:11px;
line-height:13px;
}
 
.pagination span, .pagination a {
display:block;
float:left;
margin: 2px 2px 2px 0;
padding:6px 9px 5px 9px;
text-decoration:none;
width:auto;
color:#fff;
background: #555;
}
 
.pagination a:hover{
color:#fff;
background: #3279BB;
}
 
.pagination .current{
padding:6px 9px 5px 9px;
background: #3279BB;
color:#fff;
}

Use below code to your theme where ever you want to show pagination

<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>


If you found any fault or need improvement kindly share.

Thank you in advanced!
