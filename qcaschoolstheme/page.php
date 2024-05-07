<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package qca_schools
 */

get_header();
?>
<style>
	.site-main {
		margin-top: 132px;
	}

	@media screen and (max-width:1200px) {
		.site-main {
			margin-top: 98px;
		}
	}

	body:has(.main-header) .site-main {
		margin-top: 106px !important;
	}
</style>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();
		the_content();
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
