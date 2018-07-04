<?php

// Navigation Menu Setup
// --------------------------
function ounox_theme_setup() {

	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'footer', 'Footer Navigation' );

}
add_action( 'init', 'ounox_theme_setup' );