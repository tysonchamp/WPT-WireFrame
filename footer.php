
        <footer>
            <div class="container">
                <div class="row">
                    <p class="copyright">© Sharon Plover 2016</p>
                </div>
            </div>
        </footer>

        <!-- JQUERY / PLUGINS -->
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <!-- MAIN JS FOLDER -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='../../../www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
<?php wp_footer(); ?>
</body>
</html>