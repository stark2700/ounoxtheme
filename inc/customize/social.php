<?php

// Header Customizer
// --------------------------

function ounox_social_customizer($wp_customize) {

	// Social Customizer Section
	$wp_customize->add_section( 'ounox_social_section', array(
		'title' => 'Ounox Social'
	));

	// Facebook Social Setting
	$wp_customize->add_setting( 'ounox_facebook_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Facebook Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_facebook_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_facebook_social',
		'type' => 'text',
		'description' => __( 'Facebook Profile URL' ),
	)));

	// Twitter Social Setting
	$wp_customize->add_setting( 'ounox_twitter_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Twitter Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_twitter_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_twitter_social',
		'type' => 'text',
		'description' => __( 'Twitter Profile URL' ),
	)));

	// Google+ Social Setting
	$wp_customize->add_setting( 'ounox_googleplus_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Google+ Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_googleplus_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_googleplus_social',
		'type' => 'text',
		'description' => __( 'Google+ Profile URL' ),
	)));

	// Linkedln Social Setting
	$wp_customize->add_setting( 'ounox_linkedln_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Linkedln Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_linkedln_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_linkedln_social',
		'type' => 'text',
		'description' => __( 'Linkedln Profile URL' ),
	)));

	// XING Social Setting
	$wp_customize->add_setting( 'ounox_xing_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// XING Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_xing_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_xing_social',
		'type' => 'text',
		'description' => __( 'XING Profile URL' ),
	)));

	// Foursquare Social Setting
	$wp_customize->add_setting( 'ounox_foursquare_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Foursquare Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_foursquare_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_foursquare_social',
		'type' => 'text',
		'description' => __( 'Foursquare Profile URL' ),
	)));

	// Youtube Social Setting
	$wp_customize->add_setting( 'ounox_youtube_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Youtube Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_youtube_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_youtube_social',
		'type' => 'text',
		'description' => __( 'Youtube Profile URL' ),
	)));

	// Vinmeo Social Setting
	$wp_customize->add_setting( 'ounox_vimeo_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Vinmeo Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_vimeo_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_vimeo_social',
		'type' => 'text',
		'description' => __( 'Vinmeo Profile URL' ),
	)));

	// Instagram Social Setting
	$wp_customize->add_setting( 'ounox_instagram_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Instagram Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_instagram_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_instagram_social',
		'type' => 'text',
		'description' => __( 'Instagram Profile URL' ),
	)));

	// Pinterest Social Setting
	$wp_customize->add_setting( 'ounox_pinterest_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Pinterest Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_pinterest_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_pinterest_social',
		'type' => 'text',
		'description' => __( 'Pinterest Profile URL' ),
	)));

	// Dribble Social Setting
	$wp_customize->add_setting( 'ounox_dribble_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Dribble Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_dribble_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_dribble_social',
		'type' => 'text',
		'description' => __( 'Dribble Profile URL' ),
	)));

	// Flickr Social Setting
	$wp_customize->add_setting( 'ounox_flickr_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Flickr Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_flickr_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_flickr_social',
		'type' => 'text',
		'description' => __( 'Flickr Profile URL' ),
	)));

	// GitHub Social Setting
	$wp_customize->add_setting( 'ounox_github_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// GitHub Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_github_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_github_social',
		'type' => 'text',
		'description' => __( 'GitHub Profile URL' ),
	)));

	// Behance Social Setting
	$wp_customize->add_setting( 'ounox_behance_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Behance Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_behance_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_behance_social',
		'type' => 'text',
		'description' => __( 'Behance Profile URL' ),
	)));

	// Tumblr Social Setting
	$wp_customize->add_setting( 'ounox_tumblr_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Tumblr Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_tumblr_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_tumblr_social',
		'type' => 'text',
		'description' => __( 'Tumblr Profile URL' ),
	)));

	// Whatsapp Social Setting
	$wp_customize->add_setting( 'ounox_whatsapp_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// Whatsapp Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_whatsapp_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_whatsapp_social',
		'type' => 'text',
		'description' => __( 'Whatsapp Profile URL' ),
	)));

	// SoundCloud Social Setting
	$wp_customize->add_setting( 'ounox_soundcloud_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// SoundCloud Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_soundcloud_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_soundcloud_social',
		'type' => 'text',
		'description' => __( 'SoundCloud Profile URL' ),
	)));

	// RSS Feed Social Setting
	$wp_customize->add_setting( 'ounox_rss_social', array(
		'default' => '',
		'transport' => 'refresh',
	));

	// RSS Feed Social Control
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ounox_rss_social_control', array(
		'section' => 'ounox_social_section',
		'settings' => 'ounox_rss_social',
		'type' => 'text',
		'description' => __( 'RSS Feed Profile URL' ),
	)));


}
add_action( 'customize_register','ounox_social_customizer' );