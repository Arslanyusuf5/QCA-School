<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qcagirlstheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();
	?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="header-boys" class="header-boys">
			<div class="container-fluid p-0">
				<div class="secondary__menu">
					<nav class="sec-nav-boys">
						<?php
						$args = array(
							'theme_location' => 'secondary-menu-boys',
						);
						?>
						<?php wp_nav_menu($args); ?>
					</nav>
					<div class="main-boys-header-button"><a href="https://payments.madinaapps.com/epicmasjid/d8e26e4c-4dc6-4553-92a4-8644fca5746e" target="_blank">Donate Now</a></div>
				</div>
			</div>
			<style>
				.site-logo-redirection {

					width: 200px;
				}

			</style>
			<div class="container">
				<div class="wrapper d-flex justify-content-between align-items-center">
					<?php //echo the_custom_logo(); 
					?>
					<a href="http://localhost/Wordpress-Multisite/qca-boys-girls/">
						<img class="site-logo-redirection" src="<?php echo get_stylesheet_directory_uri() . '/boys-images/image-logo.png' ?>" alt="Site Logo">
					</a>
					<nav id="navbar-boys" class="navbar-boys">
						<?php
						$args = array(
							'theme_location' => 'primary-menu-boys',
						);
						?>
						<?php wp_nav_menu($args); ?>
					</nav>

					<div class="toggler_and_switch_wrapper">
						<div class="switches-container">
							<input type="radio" id="switchMonthly" name="switchPlan" value="Monthly" checked="checked" />
							<label for="switchMonthly" id="monthlyLabel">
								<a href="" id="boysLink">Boys</a>
							</label>

							<input type="radio" id="switchYearly" name="switchPlan" value="Yearly" />
							<label for="switchYearly" id="yearlyLabel">
								<a href="" id="girlsLink">Girls</a>
							</label>

							<div class="switch-wrapper">
								<div class="switch">
									<a href="" id="boysLinkImg"><img src="<?php echo get_stylesheet_directory_uri() . '/boys-images/Face.jpg' ?>" alt=""></a>
									<a href="" id="girlsLinkImg"><img src="<?php echo get_stylesheet_directory_uri() . '/boys-images/female-user.png' ?>" alt=""></a>
								</div>
							</div>

						</div>


						<?php

						$girls_site_url = get_field('girls_site_url', 'option');
						//print_r($girls_site_url);
						$boys_site_base_url = esc_url(home_url('/', get_current_blog_id()));
						//print_r($boys_site_base_url);exit;

						echo '<script>';
						echo 'var girlsSiteUrl = "' . $girls_site_url . '";';
						echo 'var boysSiteBaseUrl = "' . $boys_site_base_url . '";';
						echo '</script>';

						?>

						<div class="btn-toggler-wrapper">
							<button class="btn-toggler" type="button">
								<i class="fa-solid fa-bars-staggered"></i>
							</button>
						</div>
					</div>
				</div>


				<div class="mobile-nav">
					<nav id="navbar-boys-mobile" class="navbar-boys-mobile">
						<?php
						$args = array(
							'theme_location' => 'mobile-menu-boys',
						);
						?>
						<?php wp_nav_menu($args); ?>
					</nav>
					<div class="main-boys-header-button"><a href="https://payments.madinaapps.com/epicmasjid/d8e26e4c-4dc6-4553-92a4-8644fca5746e" target="_blank">Donate Now</a></div>
				</div>
			</div>
		</header>