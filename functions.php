<?php

// Include Javascript and CSS
// --------------------------
function ounox_script_enqueue() {

	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/assets/css/ounox.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'customjs', get_template_directory_uri() . '/assets/js/ounox.js', array(), '1.0.0', true );
	// Getting the set font from options.
	$temp_font_name = get_theme_mod('ounox_logo_fonts_display');
	// Adding Font in Google URL
	$google_font = esc_url('https://fonts.googleapis.com/css?family=' . $temp_font_name . ':100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
	// Now Calling google font in website
	wp_enqueue_style( 'google-fonts', esc_url_raw($google_font), array(), null );
	// uikit enqueue
	wp_enqueue_style( 'uikit', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css' );
    wp_enqueue_script( 'uikit', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );
    wp_enqueue_script( 'uikit-icons', '//cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );
}
add_action( 'wp_enqueue_scripts', 'ounox_script_enqueue' );

// Required Files
function required_theme_files() {
	// require_once( get_template_directory() . '/inc/themeparts/sidebar.php' );
	// require_once( get_template_directory() . '/inc/themeparts/navigation.php' );
	require_once( get_template_directory() . '/inc/customize/header.php' );
	require_once( get_template_directory() . '/inc/customize/typography.php' );
	require_once( get_template_directory() . '/inc/customize/social.php' );
	require_once( get_template_directory() . '/inc/customize/css.php' );
	require_once( get_template_directory() . '/inc/customize/support.php' );
}
add_action( 'init', 'required_theme_files' );

// Navigation Menu Setup
// --------------------------
function ounox_theme_setup() {

	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'footer', 'Footer Navigation' );

}
add_action( 'init', 'ounox_theme_setup' );

// Remove WP Version
// --------------------------
function ounox_remove_version() {
	return '';
}
add_filter( 'the_generator', 'ounox_remove_version' );


// Sidebar Function
// --------------------------
function ounox_widget_setup() {

	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

}
add_action( 'widgets_init','ounox_widget_setup' );


