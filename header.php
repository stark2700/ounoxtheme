<?php
// Header
// --------------------------
?>

<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo( 'name' ); ?> <?php wp_title( ' | ' ); ?></title>
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<?php wp_head(); ?>
	<head>

	<!-- Body with Ounox Class -->
	<body <?php body_class(array('ounox-class')); ?>>
		
		<!-- Header Starts -->
		<header>

			<!-- Header Topbar -->
			<?php if(get_theme_mod( 'ounox_topbar_display' ) == 'Yes' ) { ?>
				<div class="ounox-topbar">
					<?php echo get_theme_mod( 'ounox_topbar_text' ); ?>
				</div>
			<?php } ?>

			<!-- Navigation Wrapper -->
			<div class="header-wrapper">

				<!-- Inner Wrapper -->
				<div class="header-inner">

					<!-- Three Way Column  -->
					<div class="header-column">
						Social Medias
					</div>

					<!-- Three Way Column -->
					<div class="header-column">

						<!-- Checks if have Custom Logo -->
						<?php if( get_theme_mod( 'ounox_logo_upload' ) ) { ?>
							<img class="custom-logo-image" src="<?php echo get_theme_mod( 'ounox_logo_upload' );?>">
						<?php
						}
						else { ?>
							<a class="custom-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						<?php } ?>

					</div>

					<!-- Three Way Column -->
					<div class="header-column">
						<div class="search-form-container">
							<?php get_search_form(); ?>
						</div>
					</div>

				</div>
			</div>
			
			<!-- Primary Navigation or Main Menu -->
			<?php wp_nav_menu( array( 
				'theme_location'=>'primary',
				'container' => false,
				'menu_class' => 'nav navbar-nav navbar-right',
			)); ?>

			<!-- Breadcrumbs -->
			<?php if(get_theme_mod( 'ounox_breadcrumbs_display' ) == 'Yes' ) { ?>
				<div class="ounox-breadcrumbs">
					Breadcrumbs Section
				</div>
			<?php } ?>

		</header>


