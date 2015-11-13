<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
	
	
	if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array(
			 'main_nav' => 'Main Navigation Menu'
			)	
		);
	}
	
	define("THEME_DIR", get_template_directory_uri());
	function enqueue_scripts() {
    if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, '1.7.2');
		wp_register_script('validation', 'http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js', 'jquery');
		wp_enqueue_script('jquery');
		
		wp_register_script('jquery-1', THEME_DIR . '/js/jquery.js', array('jquery'), '1.0.0', false);
		wp_register_script('jquery-2', THEME_DIR . '/js/jquery.jtweetsanywhere-1.3.1.min.js', array('jquery'), '1.3', false);
		wp_register_script('jquery-3', THEME_DIR . '/js/app-head.js', array('jquery'), '1.3', false);
		wp_register_script('jquery-4', THEME_DIR . 'js/twitterfeed.js', array('jquery'), '1.3', false);
		wp_enqueue_script('jquery-1');
		wp_enqueue_script('jquery-2');
		wp_enqueue_script('jquery-3');
		}
	}
	add_action('wp_enqueue_scripts', 'enqueue_scripts');

	if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 999, 999, true );
	}

	
	function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><br>Lees meer..</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' ); 
	
	
	if (function_exists('register_sidebar')) {
   register_sidebar(array(
        'name' => 'Promotiefilmpje',
        'id'   => 'promotie-filmpje',
        'description'   => 'Plaats hier de link van het promotiefilmpje',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
    ));
	}
	
	function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};

// Filter wp_nav_menu() to add additional links and other output
function new_nav_menu_items($items) {
	$homelink = '<li class="home"><a href="' . home_url( '/' ) . '">' . __('Home') . '</a></li>';
	$items = $homelink . $items;
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );

?>