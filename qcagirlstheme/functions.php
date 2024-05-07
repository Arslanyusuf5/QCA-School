<?php

/**
 * QCA Girls functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package QCA Girls 
 */

// ======================= QCA Register Custom Blocks With ACF =====================

function girls_qca_custom_acf_init()
{
	if (function_exists('acf_register_block')) {
		acf_register_block(
			array(
				'name' => 'Girls-unique-block',
				'title' => __('Girls unique Block'),
				'description' => __('QCA girls unique Block'),
				'render_template' => '/template-parts/girls-unique-block/girls-unique-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('QCA-girls-unique-script',  get_template_directory_uri() . '/template-parts/girls-unique-block/home_hero_block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCAgirlsUniqueBlock', 'Qcagirls', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);
	}
}
add_action('acf/init', 'girls_qca_custom_acf_init');

// Navigation Menus

register_nav_menus(array(
	'primary-menu-girls' => __('Primary Menu For Girls'),
	'secondary-menu-girls' => __('Secondary Menu For Girls'),
	'mobile-menu-girls' => __('Mobile Menu For Girls'),
));


// ACF Fields Json Files
function my_acf_json_girls_save_point($path)
{
	return get_stylesheet_directory_uri() . '/girls-acf-json';
}
add_filter('acf/settings/save_json', 'my_acf_json_girls_save_point');


function enqueue_custom_script()
{
	wp_enqueue_script('customgirlstheme', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');
