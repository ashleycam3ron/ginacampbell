<?php
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles' );

if(!function_exists('initialize')){
	function initialize() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('post-thumbnails');
		//add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
	}
	add_action('init','initialize');
}

//add favicon to admin
function add_favicon() {
  	$favicon_url = get_stylesheet_directory_uri() . '/favicon.ico';
	echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');

//customize login screen
function custom_login_logo(){
	$logo = get_stylesheet_directory_uri().'/images/Gina-Campbell-Counseling-logo-1.png';
	$images = get_stylesheet_directory_uri().'/images/';
	//$l = getimagesize($path);
	echo '<style type="text/css">
			h1 a { background-image:url("'. $logo .'") !important; background-size:100% !important;width:258px !important;height: 92px !important;margin: 0 auto !important;}
			body.login {background:url("'. $images .'pattern.png") !important;}
			.login #backtoblog a, .login #nav a, .login h1 a {color: #8d82b1;}
			input#wp-submit{background:#8d82b1; color:white;border:0;box-shadow:none;text-shadow:none;}
			.login form {box-shadow: none; border: 1px solid #d4cee6; border-radius: 4px; }
		</style>';
}
add_action('login_head','custom_login_logo');
function login_header_url() {
    return home_url();
}
add_filter('login_headerurl', 'login_header_url');

function login_header_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'login_header_title');

/*
function change_menu_labels($t) {
    global $menu;
	//pre($menu);exti;
    $menu[103][0] = 'Backup';
    foreach($menu as $k=>$v){
	    if($v[0]==''){

	    }
    }
}
add_action('admin_menu', 'change_menu_labels' ,1000);
*/

?>