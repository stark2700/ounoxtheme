<?php

// Output Customize CSS
function ounox_customize_css() { ?>

	<style type="text/css">

		/** Body Section **/
		body {
			color: <?php echo get_theme_mod('ounox_body_fonts_color'); ?> !important;
			font-family: <?php echo get_theme_mod('ounox_body_fonts_display'); ?>;
			font-weight: <?php echo get_theme_mod('ounox_body_fonts_weight'); ?>;
			font-size: <?php echo get_theme_mod('ounox_body_fonts_size'); ?>px;
		}

		/** Headings Section **/
		h1, h2, h3, h4, h5, h6 {
			color: <?php echo get_theme_mod('ounox_headings_fonts_color'); ?> !important;
			font-family: <?php echo get_theme_mod('ounox_headings_fonts_display'); ?>;
			font-weight: <?php echo get_theme_mod('ounox_headings_fonts_weight'); ?>;
		}

		h1 { font-size: <?php echo get_theme_mod('ounox_h1_headings_fonts_size'); ?>px; }
		h2 { font-size: <?php echo get_theme_mod('ounox_h2_headings_fonts_size'); ?>px; }
		h3 { font-size: <?php echo get_theme_mod('ounox_h3_headings_fonts_size'); ?>px; }
		h4 { font-size: <?php echo get_theme_mod('ounox_h4_headings_fonts_size'); ?>px; }
		h5 { font-size: <?php echo get_theme_mod('ounox_h5_headings_fonts_size'); ?>px; }
		h6 { font-size: <?php echo get_theme_mod('ounox_h6_headings_fonts_size'); ?>px; }

		h1 { letter-spacing: <?php echo get_theme_mod('ounox_h1_headings_letter_spacing'); ?>px; }
		h2 { letter-spacing: <?php echo get_theme_mod('ounox_h2_headings_letter_spacing'); ?>px; }
		h3 { letter-spacing: <?php echo get_theme_mod('ounox_h3_headings_letter_spacing'); ?>px; }
		h4 { letter-spacing: <?php echo get_theme_mod('ounox_h4_headings_letter_spacing'); ?>px; }
		h5 { letter-spacing: <?php echo get_theme_mod('ounox_h5_headings_letter_spacing'); ?>px; }
		h6 { letter-spacing: <?php echo get_theme_mod('ounox_h6_headings_letter_spacing'); ?>px; }

		/** Topbar Section **/
		.ounox-topbar {
			background-color: <?php echo get_theme_mod('ounox_topbar_background_color'); ?>;
		}

		/** Logo Section **/
		.custom-logo {
			color: <?php echo get_theme_mod('ounox_logo_fonts_color'); ?> !important;
			font-family: <?php echo get_theme_mod('ounox_logo_fonts_display'); ?>;
			font-weight: <?php echo get_theme_mod('ounox_logo_fonts_weight'); ?>;
			letter-spacing: <?php echo get_theme_mod('ounox_logo_letter_spacing'); ?>px;
			font-size: <?php echo get_theme_mod('ounox_logo_fonts_size'); ?>px;
		}

		<?php
			if(get_theme_mod( 'ounox_logo_italic' ) == 'Yes' ) {
				echo "
					.custom-logo {
						font-style: italic;
					}";
			} else {
				echo "
					.custom-logo {
						font-style: normal;
					}";
			}
		?>
		
		<?php
			if(get_theme_mod( 'ounox_logo_uppercase' ) == 'Yes' ) {
				echo "
					.custom-logo {
						text-transform: uppercase;
					}";
			} else {
				echo "
					.custom-logo {
						text-transform: none;
					}";
			}
		?>

		.custom-logo-image {
			width: <?php echo get_theme_mod('ounox_logo_width'); ?>px;
		}
		
		/** Navigation Section **/
		.nav li a {
			font-family: <?php echo get_theme_mod('ounox_navigation_fonts_display'); ?>;
			padding: 10px <?php echo get_theme_mod('ounox_navigation_space'); ?>px;
			font-weight: <?php echo get_theme_mod('ounox_navigation_fonts_weight'); ?>;
			color: <?php echo get_theme_mod('ounox_navigation_fonts_color'); ?>;
			font-size: <?php echo get_theme_mod('ounox_navigation_fonts_size'); ?>px;
			letter-spacing: <?php echo get_theme_mod('ounox_navigation_letter_spacing');?>px;
		}

		#menu-main-navigation li a:hover {
			color: <?php echo get_theme_mod('ounox_navigation_fonts_hover_color'); ?>;
		}

		#menu-main-navigation {
			height: <?php echo get_theme_mod('ounox_navigation_height'); ?>px;
		}

		<?php
			if(get_theme_mod( 'ounox_navigation_uppercase' ) == 'Yes' ) {
				echo "
					#menu-main-navigation li a {
						text-transform: uppercase;
					}";
			} else {
				echo "
					#menu-main-navigation li a {
						text-transform: none;
					}";
			}
		?>

		<?php
			if(get_theme_mod( 'ounox_navigation_italic' ) == 'Yes' ) {
				echo "
					#menu-main-navigation li a {
						font-style: italic;
					}";
			} else {
				echo "
					#menu-main-navigation li a {
						font-style: normal;
					}";
			}
		?>

		<?php
		// CSS for Navigation 
			if(get_theme_mod( 'ounox_navigation_position' ) == 'Static' ) {
				echo "
					#menu-main-navigation {
						position: static;
					}";
			} else {
				echo "
					#menu-main-navigation {
						position: fixed;
						width: 100%;
						background-color: #fff;
					}";
			}
		?>

		/** Search Display **/
		<?php
			if(get_theme_mod( 'ounox_search_display' ) == 'Yes' ) {
				echo "
					.search-form-container {
						display: initial;
					}";
			} else {
				echo "
					.search-form-container {
						display: none;
					}";
			}
		?>
		
	</style>

<?php }
add_action('wp_head', 'ounox_customize_css');

// Customizer Title Function
// --------------------------
function css_customizer_styles() { ?>
	<style>

		.customize-control-title {
			width: 120%;
			margin-left: -10px;
			background-color: #fff;
			font-size: 10px;
			text-transform: uppercase;
			letter-spacing: 2px;
			border-top: 1px solid #d4d4d4;
			border-bottom: 1px solid #d4d4d4;
			padding: 8px 10px;
			margin-bottom: 10px !important;
			margin-top: 20px;
		}

		.description.customize-control-description {
			font-size: 14px;
			font-weight: 600;
			font-style: normal;
			display: block;
			line-height: 22px;
		}
	</style>
	<?php

}
add_action( 'customize_controls_print_styles', 'css_customizer_styles', 999 );