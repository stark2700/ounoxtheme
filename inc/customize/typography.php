<?php

// Typography Customizer
// --------------------------

function ounox_body_customizer($wp_customize) {

	// Typography Customizer Section
	$wp_customize->add_section( 'ounox_typography_section', array(
		'title' => 'Ounox Typography'
	));

	// Body Typography Section
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
	// 		'label'     => 'Body - Typography',
	// 		'section'   => 'ounox_typography_section',
	// 		'settings'  => 'ounox_body_fonts_display',
	// 		'type'      => 'select',
	// 		'choices'   => $font_family,
	// 		'description' => __( 'Font Family' ),
	// 	);

	// 	// Font Weight Args
	// 	$font_weight_args = array(
	// 		'section'   => 'ounox_typography_section',
	// 		'settings'  => 'ounox_body_fonts_weight',
	// 		'type'      => 'radio',
	// 		'choices'   => array(
	// 			'100' => 'Ultra Light',
	// 			'300' => 'Book',
	// 			'400' => 'Regular',
	// 			'700' => 'Bold',
	// 			'160' => 'Ultra Bold',
	// 		),
	// 		'description' => __( 'Font Weight' ),
	// 	);
	// } 

	// Body Font Display Setting
	// $wp_customize->add_setting( 'ounox_body_fonts_display', array(
	// 	'transport' => 'refresh',
	// ));

	// Body Font Display Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_body_fonts_display_control', $font_choices_args));

	// Body Color Setting
	$wp_customize->add_setting('ounox_body_fonts_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Body Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_body_fonts_color_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_body_fonts_color',
		'description' => __( 'Font Color' ),
		'label'     => 'Body',
	)));


	// Body Font Size Setting
	$wp_customize->add_setting( 'ounox_body_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// Body Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_body_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_body_fonts_size',
		'type' => 'text',
		'description' => __( 'Font Size (px)' ),
	)));

	// Body Font Weight Setting
	// $wp_customize->add_setting( 'ounox_body_fonts_weight', array(
	// 	'transport' => 'refresh',
	// ));

	// Body Font Weight Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_body_fonts_weight_control', $font_weight_args));

	// Headings Typography Section
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
	// 		'label'     => 'Headings - Typography',
	// 		'section'   => 'ounox_typography_section',
	// 		'settings'  => 'ounox_headings_fonts_display',
	// 		'type'      => 'select',
	// 		'choices'   => $font_family,
	// 		'description' => __( 'Font Family' ),
	// 	);

	// 	// Font Weight Args
	// 	$font_weight_args = array(
	// 		'section'   => 'ounox_typography_section',
	// 		'settings'  => 'ounox_headings_fonts_weight',
	// 		'type'      => 'radio',
	// 		'choices'   => array(
	// 			'100' => 'Ultra Light',
	// 			'300' => 'Book',
	// 			'400' => 'Regular',
	// 			'700' => 'Bold',
	// 			'160' => 'Ultra Bold',
	// 		),
	// 		'description' => __( 'Font Weight' ),
	// 	);
	// } 

	// Headings Font Display Setting
	// $wp_customize->add_setting( 'ounox_headings_fonts_display', array(
	// 	'transport' => 'refresh',
	// ));

	// Headings Font Display Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_headings_fonts_display_control', $font_choices_args));

	// Headings Color Setting
	$wp_customize->add_setting('ounox_headings_fonts_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Headings Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_headings_fonts_color_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_headings_fonts_color',
		'description' => __( 'Font Color' ),
		'label'     => 'Headings',
	)));


	// h1 Headings Font Size Setting
	$wp_customize->add_setting( 'ounox_h1_headings_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// h1 Headings Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_h1_headings_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h1_headings_fonts_size',
		'type' => 'text',
		'description' => __( 'h1 Font Size (px)' ),
	)));

	// h2 Headings Font Size Setting
	$wp_customize->add_setting( 'ounox_h2_headings_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// h2 Headings Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_h2_headings_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h2_headings_fonts_size',
		'type' => 'text',
		'description' => __( 'h2 Font Size (px)' ),
	)));

	// h3 Headings Font Size Setting
	$wp_customize->add_setting( 'ounox_h3_headings_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// h3 Headings Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_h3_headings_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h3_headings_fonts_size',
		'type' => 'text',
		'description' => __( 'h3 Font Size (px)' ),
	)));

	// h4 Headings Font Size Setting
	$wp_customize->add_setting( 'ounox_h4_headings_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// h4 Headings Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_h4_headings_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h4_headings_fonts_size',
		'type' => 'text',
		'description' => __( 'h4 Font Size (px)' ),
	)));

	// h5 Headings Font Size Setting
	$wp_customize->add_setting( 'ounox_h5_headings_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// h5 Headings Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_h5_headings_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h5_headings_fonts_size',
		'type' => 'text',
		'description' => __( 'h5 Font Size (px)' ),
	)));

	// h6 Headings Font Size Setting
	$wp_customize->add_setting( 'ounox_h6_headings_fonts_size', array(
		'default' => '16',
		'transport' => 'refresh',
	));

	// h6 Headings Font Size Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_h6_headings_fonts_size_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h6_headings_fonts_size',
		'type' => 'text',
		'description' => __( 'h6 Font Size (px)' ),
	)));

	// Headings Font Weight Setting
	// $wp_customize->add_setting( 'ounox_headings_fonts_weight', array(
	// 	'transport' => 'refresh',
	// ));

	// Headings Font Weight Control
	// $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_headings_fonts_weight_control', $font_weight_args));

	// h1 Headings Letter Spacing Setting
	$wp_customize->add_setting('ounox_h1_headings_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// h1 Headings Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_h1_headings_letter_spacing_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h1_headings_letter_spacing',
		'type' => 'text',
		'description' => __( 'h1 Letter Spacing (px)' ),
	)));

	// h2 Headings Letter Spacing Setting
	$wp_customize->add_setting('ounox_h2_headings_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// h2 Headings Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_h2_headings_letter_spacing_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h2_headings_letter_spacing',
		'type' => 'text',
		'description' => __( 'h2 Letter Spacing (px)' ),
	)));

	// h3 Headings Letter Spacing Setting
	$wp_customize->add_setting('ounox_h3_headings_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// h3 Headings Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_h3_headings_letter_spacing_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h3_headings_letter_spacing',
		'type' => 'text',
		'description' => __( 'h3 Letter Spacing (px)' ),
	)));

	// h4 Headings Letter Spacing Setting
	$wp_customize->add_setting('ounox_h4_headings_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// h4 Headings Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_h4_headings_letter_spacing_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h4_headings_letter_spacing',
		'type' => 'text',
		'description' => __( 'h4 Letter Spacing (px)' ),
	)));

	// h5 Headings Letter Spacing Setting
	$wp_customize->add_setting('ounox_h5_headings_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// h5 Headings Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_h5_headings_letter_spacing_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h5_headings_letter_spacing',
		'type' => 'text',
		'description' => __( 'h5 Letter Spacing (px)' ),
	)));

	// h6 Headings Letter Spacing Setting
	$wp_customize->add_setting('ounox_h6_headings_letter_spacing', array(
		'default' => '0',
		'transport' => 'refresh',
	));

	// h6 Headings Letter Spacing Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_h6_headings_letter_spacing_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_h6_headings_letter_spacing',
		'type' => 'text',
		'description' => __( 'h6 Letter Spacing (px)' ),
	)));

	// Headings Uppercase Setting
	$wp_customize->add_setting( 'ounox_headings_uppercase', array(
		'default' => 'No',
		'transport' => 'refresh',
	));

	// Headings Uppercase Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_headings_uppercase_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_headings_uppercase',
		'type' => 'radio',
		'choices' => array('No' => 'No', 'Yes' => 'Yes'),
		'description' => __( 'Uppercase' ),
	)));

	// Link Color Setting
	$wp_customize->add_setting('ounox_link_fonts_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Link Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_link_fonts_color_control', array(
		'label'     => 'Site Links',
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_link_fonts_color',
		'description' => __( 'Font Color' ),
	)));

	// Link Hover Color Setting
	$wp_customize->add_setting('ounox_link_hover_fonts_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	// Link Hover Color Control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ounox_link_hover_fonts_color_control', array(
		'section' => 'ounox_typography_section',
		'settings' => 'ounox_link_hover_fonts_color',
		'description' => __( 'Font Color' ),
	)));

}
add_action( 'customize_register','ounox_body_customizer' );