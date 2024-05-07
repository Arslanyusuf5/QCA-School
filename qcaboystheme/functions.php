<?php
/**
 * QCA Boys functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package QCA Boys 
 */

// ======================= QCA Register Custom Blocks With ACF =====================

function boys_qca_custom_acf_init()
{
	if (function_exists('acf_register_block')){
		acf_register_block(
			array(
				'name' => 'boys-unique-block',
				'title' => __('Boys unique Block'),
				'description' => __('QCA Boys unique Block'),
				'render_template' => '/template-parts/boys-unique-block/boys-unique-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('QCA-boys-unique-script',  get_template_directory_uri() . '/template-parts/boys-unique-block/home_hero_block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCABoysUniqueBlock', 'QcaBoys', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);
	}
}
add_action('acf/init', 'boys_qca_custom_acf_init');

// Navigation Menus

register_nav_menus(array(
	'primary-menu-boys' => __( 'Primary Menu For Boys' ),
	'secondary-menu-boys' => __( 'Secondary Menu For Boys' ),
	'mobile-menu-boys' => __( 'Mobile Menu For Boys' ),
));

// ACF Fields Json Files
function my_acf_json_boys_save_point($path)
{
	return get_stylesheet_directory_uri() . '/boys-acf-json';
}
add_filter('acf/settings/save_json', 'my_acf_json_boys_save_point');


function enqueue_custom_script()
{
	wp_enqueue_script('customboystheme', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');





