<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qca_schools
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
	<link href="<?php echo get_template_directory_uri() . '/js/aos/aos.css' ?>" rel="stylesheet">

	<?php wp_head();
	include 'assets/css/theme_options.php';
	?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- <div id="preloader"></div> -->

	<div id="page" class="site">
		<header id="main-header" class="main-header py-2">
			<div class="container">

				<!-- Desktop Menu -->
				<div class="desktop-wrapper d-flex justify-content-between align-items-center">
					<?php echo the_custom_logo(); ?>
					<nav id="navbar-main" class="navbar-main">
						<?php
						$args = array(
							'theme_location' => 'primary',
						);
						?>
						<?php wp_nav_menu($args); ?>
					</nav>
					<div class="d-flex landing-page-button">
						<div class="main-header-button-girls">
							<a href="http://qca-for-girls.52.180.157.125.nip.io/">
								<img src="<?php echo get_template_directory_uri() . "/images/female-user-one.png" ?>" alt="Description of the image">
							</a>
						</div>
						<div class="main-header-button-boys">
							<a href="http://qca-for-boys.52.180.157.125.nip.io/">
								<img src="<?php echo get_template_directory_uri() . "/images/boys-user.png" ?>" alt="Description of the image">
							</a>
						</div>
						<!-- <div class="main-header-button-boys"><a href="http://localhost/Wordpress-Multisite/qca-boys-girls/qca-for-boys/" target="_blank">QCA For Boys</a></div>
						<div class="main-header-button-girls"><a href="http://localhost/Wordpress-Multisite/qca-boys-girls/qca-for-girls/" target="_blank">QCA For Girls</a></div>-->
						<div class="donate-now-buttons"><a href="https://payments.madinaapps.com/epicmasjid/d8e26e4c-4dc6-4553-92a4-8644fca5746e" target="_blank">Donate Now</a></div>
					</div>
					<div class="btn-toggler-wrapper"><button class="btn-toggler" type="button">
							<i class="fa-solid fa-bars-staggered"></i>
						</button>
					</div>
				</div>

				<!-- Mobile Menu -->
				<div class="mobile-nav">
					<nav id="navbar-main" class="navbar-main">
						<?php
						$args = array(
							'theme_location' => 'primary',
						);
						?>
						<?php wp_nav_menu(); ?>
					</nav>
					<div class="main-header-button-boys"><a href="http://qca-for-boys.52.180.157.125.nip.io/" target="_blank">QCA For Boys</a></div>
					<div class="main-header-button-girls"><a href="http://qca-for-girls.52.180.157.125.nip.io/" target="_blank">QCA For Girls</a></div>
				</div>
			</div>
		</header>