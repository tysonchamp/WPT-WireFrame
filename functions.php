<?php // custom functions.php template for WordPress Theme Development

// Advanced Custom fields section
// define( 'ACF_LITE', true );
include_once('acf/acf.php');


/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
 */
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'status',
	'audio',
	'chat',
) );


/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		// This is an example of how to include a plugin bundled with a theme.
		/*array(
			'name'               => 'Testimonials Reviews', // The plugin name.
			'slug'               => 'testimonial_reviews', // The plugin slug (typically the folder name).
			'source'             => get_template_directory_uri() . '/plugins/testimonial_reviews.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),*/
		
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Fluid Responsive Slideshow',
			'slug'      => 'fluid-responsive-slideshow',
			'required'  => false,
			'force_deactivation' => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Dynamic Featured Image',
			'slug'      => 'dynamic-featured-image',
			'required'  => false,
			'force_deactivation' => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Kiwi Logo Carousel',
			'slug'      => 'kiwi-logo-carousel',
			'required'  => true,
			'force_activation'   => true,
			'force_deactivation' => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Meta Slider',
			'slug'      => 'ml-slider',
			'required'  => false,
			'force_deactivation' => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Robo Gallery',
			'slug'      => 'robo-gallery',
			'required'  => false,
			'force_deactivation' => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'WP likes',
			'slug'      => 'wp-likes',
			'required'  => true,
			'force_activation'   => true,
			'force_deactivation' => true,
		),
		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'Membership 2',
			'slug'      => 'membership-2',
			'required'  => true,
		),
		array(
			'name'      => 'Nav Menu Roles',
			'slug'      => 'nav-menu-roles',
			'required'  => true,
		),
	);
	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		
	);
	tgmpa( $plugins, $config );
}
// END!!


// Mailchimp 3.0 API integration in wordpress
function rudr_mailchimp_subscriber_status( $email, $status, $list_id, $api_key, $merge_fields = array('FNAME' => '','LNAME' => '') ){
	$data = array(
		'apikey'        => $api_key,
    	'email_address' => $email,
		'status'        => $status,
		'merge_fields'  => $merge_fields
	);
	$mch_api = curl_init(); // initialize cURL connection
 
	curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
	curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
	curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
	curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
	curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
	curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
	curl_setopt($mch_api, CURLOPT_POST, true);
	curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
 
	$result = curl_exec($mch_api);
	return $result;
}
// End of Mailchimp API Function


// enable featured image support for posts
add_theme_support( 'post-thumbnails' ); 
 
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}


// add woocommerce support
add_theme_support( 'woocommerce' );
add_filter( 'woocommerce_currencies', 'add_inr_currency' );
add_filter( 'woocommerce_currency_symbol', 'add_inr_currency_symbol' );
function add_inr_currency( $currencies ) {
    $currencies['INR'] = 'INR';
    return $currencies;
}
function add_inr_currency_symbol( $symbol ) {
	$currency = get_option( 'woocommerce_currency' );
	switch( $currency ) {
		case 'INR': $symbol = 'Rs.'; break;
	}
	return $symbol;
}
// define('WOOCOMMERCE_USE_CSS', false);


// Pagination function
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}


// nav menu start
class themeslug_walker_nav_menu extends Walker_Nav_Menu {
  
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'dropdown-menu'
        );
    $class_names = implode( ' ', $classes );
  
    // build html
    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
  
// add main/sub classes to li's and links
 function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  $class_names = $value = '';
        //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = in_array("current_page_item",$item->classes) ? ' active' : '';
		$class_names1 = in_array("current-menu-ancestor",$item->classes) ? ' active' : '';
        //$class_names1 = in_array("current_page_item",$item->menu_item_children->classes) ? ' active' : '';
    // depth dependent classes
    $depth_classes = array(
        ( $depth == 0 ? 'dropdown' : '' ),$class_names,$class_names1
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
    //$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
    $parents = array();
	if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $args->theme_location ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $args->theme_location ] );
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		foreach( $menu_items as $menu_item ) {
		  if( $menu_item->menu_item_parent != 0 )
		    $parents[] = $menu_item->menu_item_parent;
		}
	}

	$dropdown = ''; $dropdown_toggle = ''; $caret = '';
	if( in_array($item->ID, $parents ) ) {
		$dropdown = 'dropdown';
		$dropdown_toggle = 'dropdown-toggle';
		$caret = ' <span class="caret"></span>';
	}

    // build html
    $output .= $indent . '<li id="' . $item->ID . '" class="' . $depth_class_names .'">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	$attributes.='class="' . $dropdown_toggle . '" data-toggle="' . $dropdown . '" aria-expanded="false"';
    //$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
    $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
		  $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		  $item_output .= $caret . '</a>';
        $item_output .= $args->after;
   /* $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );*/
	
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
}
}

add_action( 'after_setup_theme', 'td_setup' );

function td_setup() {
	register_nav_menus( array(
		'menu_top' => 'Menu TOP',
		'mobile_top' => 'Mobile Menu'
	) );
}
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}
// menu end


// Creating theme Option using ACF
require_once dirname( __FILE__ ) . '/inc/theme-option.php';


// WP Customizer API init
require_once dirname( __FILE__ ) . '/inc/customizer.php';


// widgets init
require_once dirname( __FILE__ ) . '/inc/widgets.php';


// add custom post content
/*
function add_post_content($content) {
	if(!is_feed() && !is_home()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_content', 'add_post_content');


// add custom feed content
function add_feed_content($content) {
	if(is_feed()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_excerpt_rss', 'add_feed_content');
add_filter('the_content', 'add_feed_content');


// add custom content to feeds and posts
function add_custom_content($content) {
	if(!is_home()) {
		$content .= '<p>This article is copyright &copy; '.date('Y').'&nbsp;'.bloginfo('name').'</p>';
	}
	return $content;
}
add_filter('the_excerpt_rss', 'add_custom_content');
add_filter('the_content', 'add_custom_content'); */


// filter wp seo title
if ( !function_exists('is_plugin_inactive')) {
    require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}
if ( !is_plugin_inactive('wordpress-seo/wp-seo.php') ) {
	remove_filter('wp_title', array($wpseo_front, 'title'), 10, 3);
}


// remove version info from head and feeds
function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');


// customize admin footer text
function custom_admin_footer() {
	echo '<a href="http://www.verticalwebcare.com/">Developed By Vertical Web Care</a>';
} 
add_filter('admin_footer_text', 'custom_admin_footer');


// enable html markup in user profiles
remove_filter('pre_user_description', 'wp_filter_kses');


// delay feed update
function publish_later_on_feed($where) {
	global $wpdb;
	if (is_feed()) {
		// timestamp in WP-format
		$now = gmdate('Y-m-d H:i:s');
		// value for wait; + device
		$wait = '5'; // integer
		// http://dev.mysql.com/doc/refman/5.0/en/date-and-time-functions.html#function_timestampdiff
		$device = 'MINUTE'; // MINUTE, HOUR, DAY, WEEK, MONTH, YEAR
		// add SQL-sytax to default $where
		$where .= " AND TIMESTAMPDIFF($device, $wpdb->posts.post_date_gmt, '$now') > $wait ";
	}
	return $where;
}
add_filter('posts_where', 'publish_later_on_feed');


// admin link for all settings
function all_settings_link() {
	add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
}
add_action('admin_menu', 'all_settings_link');


// remove nofollow from comments
function xwp_dofollow($str) {
	$str = preg_replace(
		'~<a ([^>]*)\s*(["|\']{1}\w*)\s*nofollow([^>]*)>~U',
		'<a ${1}${2}${3}>', $str);
	return str_replace(array(' rel=""', " rel=''"), '', $str);
}
remove_filter('pre_comment_content',     'wp_rel_nofollow');
add_filter   ('get_comment_author_link', 'xwp_dofollow');
add_filter   ('post_comments_link',      'xwp_dofollow');
add_filter   ('comment_reply_link',      'xwp_dofollow');
add_filter   ('comment_text',            'xwp_dofollow');


// count words in posts
function word_count() {
	global $post;
	echo str_word_count($post->post_content);
}


// spam & delete links for all versions of wordpress
function delete_comment_link($id) {
	if (current_user_can('edit_post')) {
		echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&c='.$id.'">del</a> ';
		echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&dt=spam&c='.$id.'">spam</a>';
	}
}


/* disable all feeds
function fb_disable_feed() {
	wp_die(__('<h1>Feed not available, please visit our <a href="'.get_bloginfo('url').'">Home Page</a>!</h1>'));
}
add_action('do_feed',      'fb_disable_feed', 1);
add_action('do_feed_rdf',  'fb_disable_feed', 1);
add_action('do_feed_rss',  'fb_disable_feed', 1);
add_action('do_feed_rss2', 'fb_disable_feed', 1);
add_action('do_feed_atom', 'fb_disable_feed', 1); */


// customize default gravatars
function custom_gravatars($avatar_defaults) {
	// change the default gravatar
	$customGravatar1 = get_bloginfo('template_directory').'/images/gravatar-01.png';
	$avatar_defaults[$customGravatar1] = 'Default';
	// add a custom user gravatar
	$customGravatar2 = get_bloginfo('template_directory').'/images/gravatar-02.png';
	$avatar_defaults[$customGravatar2] = 'Custom Gravatar';
	// add another custom gravatar
	$customGravatar3 = get_bloginfo('template_directory').'/images/gravatar-03.png';
	$avatar_defaults[$customGravatar3] = 'Custom gravatar';
	return $avatar_defaults;
}
add_filter('avatar_defaults', 'custom_gravatars');


// disable auto formatting in posts
function my_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}
	return $new_content;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');
add_filter('the_content', 'my_formatter', 99);


// escape html entities in comments
function encode_code_in_comment($source) {
	$encoded = preg_replace_callback('/<code>(.*?)<\/code>/ims',
	create_function('$matches', '$matches[1] = preg_replace(array("/^[\r|\n]+/i", "/[\r|\n]+$/i"), "", $matches[1]); 
	return "<code>" . htmlentities($matches[1]) . "</"."code>";'), $source);
	if ($encoded)
		return $encoded;
	else
		return $source;
}
add_filter('pre_comment_content', 'encode_code_in_comment');


// custom comments callback function
function custom_comments_callback($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>

	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<div class="comment-wrap">
			<?php echo get_avatar(get_comment_author_email(), $size = '50', $default = bloginfo('stylesheet_directory').'/images/gravatar.png'); ?>

			<div class="comment-intro">
            			<?php printf(__('%s'), get_comment_author_link()); ?> &ndash; <a class="comment-permalink" href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>"><?php comment_date('F j, Y'); ?> @ <?php comment_time(); ?></a><?php edit_comment_link('Edit', ' &ndash; ', ''); ?>
			</div>
			<?php if ($comment->comment_approved == '0') : ?>

			<p class="comment-moderation"><?php _e('Your comment is awaiting moderation.'); ?></p>
			<?php endif; ?>

			<div class="comment-text"><?php comment_text(); ?></div>

			<div class="reply" id="comment-reply-<?php comment_ID(); ?>">
				<?php comment_reply_link(array_merge($args, array('reply_text'=>'Reply', 'login_text'=>'Log in to Reply', 'add_below'=>'comment-reply', 'depth'=>$depth, 'max_depth'=>$args['max_depth']))); ?> 

			</div>
		</div>

<?php } // WP adds the closing </li>
?>
