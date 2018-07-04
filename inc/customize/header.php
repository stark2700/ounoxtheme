<?php

// Header Customizer
// --------------------------

function ounox_header_customizer($wp_customize) {

	// Customizer Section
	$wp_customize->add_section( 'ounox_header_section', array(
		'title' => 'Ounox Header'
	));

	// Breadcrumbs Section
	// --------------------------

	// Breadcrumbs Setting
	$wp_customize->add_setting( 'ounox_breadcrumbs_display', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Breadcrumbs Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_breadcrumbs_display_control', array(
		'label' => 'Breadcrumbs',
		'section' => 'ounox_header_section',
		'settings' => 'ounox_breadcrumbs_display',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Display' ),
	)));

	// Logo Upload Section
	// --------------------------

	// Logo Upload Setting
	$wp_customize->add_setting( 'ounox_logo_upload' );
         
    // Logo Upload Control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ounox_logo_upload_control', array(
        'label'    => __( 'Logo - Image (replaces text)' ),
        'section'  => 'ounox_header_section',
        'settings' => 'ounox_logo_upload',
	)));

	// Logo Width Setting
	$wp_customize->add_setting( 'ounox_logo_width', array(
		'default' => '200',
		'transport' => 'refresh',
	));

	// Logo Width Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_logo_width_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_logo_width',
		'type' => 'text',
		'description' => __( 'Logo Width (px)' ),
	)));

	// Logo Typography Section
	// --------------------------

	// Google Fonts API
	// $url = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDwe8tl4YMbg8asbjzbXDDFuxzR1Wm9EQ0';
	// $response = wp_remote_get( 'http://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDwe8tl4YMbg8asbjzbXDDFuxzR1Wm9EQ0', array( 'sslverify' => true ) );
	// $response = wp_remote_retrieve_body( wp_remote_get($url, array('sslverify' => false )));
	
	// if( is_wp_error( $response ) ) {
	// 	echo 'Something went wrong!';
	// } else {
	// 	$url = "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDwe8tl4YMbg8asbjzbXDDFuxzR1Wm9EQ0";

	// 	$json_a = json_decode($response,  true);
	// 	$result = json_decode(file_get_contents( $url ));

	// 	// Google Font Items Array
	// 	$font_family_choices = $json_a['items'];

	// 	$font_family = array();
	// 	$font_list = "";

	// 	// Loop for Google Font Family
	// 	foreach ($font_family_choices as $font_family_choice) {
	// 		$font_family[$font_family_choice['family']] = $font_family_choice['family'].' (Google)';
	// 	}

	// 	// Font Family Args
	// 	$font_choices_args = array(
	// 		'label'     => 'Logo - Typography',
	// 		'section'   => 'ounox_header_section',
	// 		'settings'  => 'ounox_logo_fonts_display',
	// 		'type'      => 'select',
	// 		'choices'   => $font_family,
	// 		'description' => __( 'Font Family' ),
	// 	);

	// 	// Font Weight Args
	// 	$font_weight_args = array(
	// 		'section'   => 'ounox_header_section',
	// 		'settings'  => 'ounox_logo_fonts_weight',
	// 		'type'      => 'radio',
	// 		'choices'   => array(
	// 			'100' => 'Ultra Light',
	// 			'300' => 'Book',
	// 			'400' => 'Regular',
	// 			'700' => 'Bold',
	// 			'900' => 'Ultra Bold',
	// 		),
	// 		'description' => __( 'Font Weight' ),
	// 	);
	// } 

	// Logo Font Display Setting
	// $wp_customize->add_setting( 'ounox_logo_fonts_display', array(
	// 	'transport' => 'refresh',
	// ));

	// Logo Font Display Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_logo_fonts_display_control', $font_choices_args));

	// Logo Color Setting
	$wp_customize->add_setting('ounox_logo_fonts_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Logo Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_logo_fonts_color_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_logo_fonts_color',
		'description' => __( 'Font Color' ),
		'label'     => 'Logo - Typography',
	)));


	// Logo Font Size Setting
	$wp_customize->add_setting( 'ounox_logo_fonts_size', array(
		'default' => '90',
		'transport' => 'refresh',
	));

	// Logo Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_logo_fonts_size_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_logo_fonts_size',
		'type' => 'text',
		'description' => __( 'Font Size (px)' ),
	)));

	// Logo Font Weight Setting
	// $wp_customize->add_setting( 'ounox_logo_fonts_weight', array(
	// 	'transport' => 'refresh',
	// ));

	// Logo Font Weight Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_logo_fonts_weight_control', $font_weight_args));

	// Logo Letter Spacing Setting
	$wp_customize->add_setting('ounox_logo_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// Logo Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_logo_letter_spacing_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_logo_letter_spacing',
		'type' => 'text',
		'description' => __( 'Letter Spacing (px)' ),
	)));

	// Logo Uppercase Setting
	$wp_customize->add_setting( 'ounox_logo_uppercase', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Logo Uppercase Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_logo_uppercase_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_logo_uppercase',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Uppercase' ),
	)));

	// Logo Uppercase Setting
	$wp_customize->add_setting( 'ounox_logo_italic', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Logo Uppercase Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_logo_italic_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_logo_italic',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Italic' ),
	)));

	// Navigation Section
	// --------------------------

	// Navigation Spacing Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_space_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_space',
		'type' => 'text',
		'description' => __( 'Navigation Spacing (px)' ),
	)));

	// Navigation Font
	// if( is_wp_error( $response ) ) {
	// 	echo 'Something went wrong!';
	// } else {
	// 	$url = "https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyDwe8tl4YMbg8asbjzbXDDFuxzR1Wm9EQ0";

	// 	$json_a = json_decode($response,  true);
	// 	$result = json_decode(file_get_contents( $url ));

	// 	// Google Font Items Array
	// 	$font_navigation_family_choices = $json_a['items'];

	// 	$font_family_navigation = array();
	// 	$font_list_navigation = "";

	// 	// Loop for Google Font Family
	// 	foreach ($font_navigation_family_choices as $font_navigation_family_choice) {
	// 		$font_family[$font_navigation_family_choice['family']] = $font_navigation_family_choice['family'].' (Google)';
	// 	}

	// 	// Font Family Args
	// 	$font_choices_args = array(
	// 		'label' => 'Navigation',
	// 		'section'   => 'ounox_header_section',
	// 		'settings'  => 'ounox_navigation_fonts_display',
	// 		'type'      => 'select',
	// 		'choices'   => $font_family,
	// 		'description' => __( 'Font Family' ),
	// 	);

	// 	// Font Weight Args
	// 	$font_weight_args = array(
	// 		'section'   => 'ounox_header_section',
	// 		'settings'  => 'ounox_navigation_fonts_weight',
	// 		'type'      => 'radio',
	// 		'choices'   => array(
	// 			'100' => 'Ultra Light',
	// 			'300' => 'Book',
	// 			'400' => 'Regular',
	// 			'700' => 'Bold',
	// 			'900' => 'Ultra Bold',
	// 		),
	// 		'description' => __( 'Font Weight' ),
	// 	);
	// } 

	// Navigation Font Display Setting
	// $wp_customize->add_setting( 'ounox_navigation_fonts_display', array(
	// 	'transport' => 'refresh',
	// ));

	// Navigation Font Display Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_fonts_display_control', $font_choices_args));

	// Navigation Color Setting
	$wp_customize->add_setting('ounox_navigation_fonts_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Navigation Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_navigation_fonts_color_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_fonts_color',
		'description' => __( 'Font Color' ),
		'label'     => 'Navigation - Typography',
	)));

	// Navigation Hover Color Setting
	$wp_customize->add_setting('ounox_navigation_fonts_hover_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Navigation Hover Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_navigation_fonts_hover_color_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_fonts_hover_color',
		'description' => __( 'Hover Color' ),
	)));

	// Navigation Font Size Setting
	$wp_customize->add_setting( 'ounox_navigation_fonts_size', array(
		'default' => '18',
		'transport' => 'refresh',
	));

	// Navigation Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_fonts_size_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_fonts_size',
		'type' => 'text',
		'description' => __( 'Font Size (px)' ),
	)));

	// Navigation Font Weight Setting
	// $wp_customize->add_setting( 'ounox_navigation_fonts_weight', array(
	// 	'transport' => 'refresh',
	// ));

	// Navigation Font Weight Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_fonts_weight_control', $font_weight_args));

	// Navigation Position Settings
	$wp_customize->add_setting( 'ounox_navigation_position', array(
		'default' => 'Static',
		'transport' => 'refresh',
	));

	// Navigation Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_position_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_position',
		'type' => 'radio',
		'choices' => array('Static' => 'Static', 'Fixed' => 'Fixed'),
		'description' => __( 'Position' ),
	)));

	// Navigation Height Settings
	$wp_customize->add_setting( 'ounox_navigation_height', array(
		'default' => '90',
		'transport' => 'refresh',
	));

	// Navigation Height Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_height_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_height',
		'type' => 'text',
		'description' => __( 'Navigation Height (px)' ),
	)));

	// Navigation Spacing Setting
	$wp_customize->add_setting( 'ounox_navigation_space', array(
		'default' => '10',
		'transport' => 'refresh',
	));

	// Navigation Letter Spacing Setting
	$wp_customize->add_setting('ounox_navigation_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// Navigation Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_navigation_letter_spacing_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_letter_spacing',
		'type' => 'text',
		'description' => __( 'Letter Spacing (px)' ),
	)));

	// Navigation Uppercase Setting
	$wp_customize->add_setting( 'ounox_navigation_uppercase', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Navigation Uppercase Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_uppercase_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_uppercase',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Uppercase' ),
	)));

	// Navigation Uppercase Setting
	$wp_customize->add_setting( 'ounox_navigation_italic', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Navigation Uppercase Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_navigation_italic_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_navigation_italic',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Italic' ),
	)));

	// Search Section
	// --------------------------

	// Search Display Setting
	$wp_customize->add_setting( 'ounox_search_display', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Search Display Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_search_display_control', array(
		'label' => 'Search',
		'section' => 'ounox_header_section',
		'settings' => 'ounox_search_display',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Display' ),
	)));

	// Topbar Section
	// --------------------------

	// Topbar Display Setting
	$wp_customize->add_setting( 'ounox_topbar_display', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Topbar Display Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_topbar_display_control', array(
		'label' => 'Topbar',
		'section' => 'ounox_header_section',
		'settings' => 'ounox_topbar_display',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Display' ),
	)));

	// Topbar Background Setting
	$wp_customize->add_setting('ounox_topbar_background_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Topbar Background Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_topbar_background_color', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_topbar_background_color',
		'description' => __( 'Background Color' ),
	)));

	// Topbar Content Setting
	$wp_customize->add_setting( 'ounox_topbar_text', array(
		'default' => 'Topbar Content Here',
		'transport' => 'refresh',
	));

	// Topbar Content Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_topbar_text_control', array(
		'section' => 'ounox_header_section',
		'settings' => 'ounox_topbar_text',
		'type' => 'textarea',
		'description' => __( 'Content' ),
	)));

}
add_action( 'customize_register','ounox_header_customizer' );