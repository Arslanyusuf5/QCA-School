<?php

/**
 * qca_schools functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package qca_schools
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function qca_schools_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on qca_schools, use a find and replace
		* to change 'qca_schools' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('qca_schools', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'qca_schools'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'qca_schools_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'qca_schools_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function qca_schools_content_width()
{
	$GLOBALS['content_width'] = apply_filters('qca_schools_content_width', 640);
}
add_action('after_setup_theme', 'qca_schools_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function qca_schools_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Donation', 'qca_schools'),
			'id'            => 'donation',
			'description'   => esc_html__('Add widgets here.', 'qca_schools'),
			'before_widget' => '<div class="card-body">',
			'after_widget'  => '</div>',
			'before_title'  => ' <h5 class="card-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action('widgets_init', 'qca_schools_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function qca_scripts()
{
	// Enqueue Stylesheets
	wp_enqueue_style('font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
	wp_enqueue_style('bootstrap-style', get_template_directory_uri() .  '/assets/css/bootstrap.min.css', array(), '5.0.2');
	wp_enqueue_style('aos-animation-style', get_template_directory_uri() .  '/js/aos/aos.css');
	wp_enqueue_style('qca-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('qca-style', 'rtl', 'replace');
	wp_enqueue_style('swiperbundlestyle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css');

	// Enqueue the external jQuery
	wp_enqueue_script('jquerybundle', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', );
	wp_enqueue_script('swiperbundle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js');
	wp_enqueue_script('bootstrap', get_template_directory_uri() .  '/js/bootstrap.bundle.min.js');
	wp_enqueue_script('qca-navigation', get_template_directory_uri() .  '/js/navigation.js', array(), _S_VERSION, true);
	wp_enqueue_script('customjavascript', get_template_directory_uri() . '/js/custom.js');
}

add_action('wp_enqueue_scripts', 'qca_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ======================= QCA Register Custom Blocks With ACF =====================


function qca_custom_acf_init()
{
	if (function_exists('acf_register_block')) {
		acf_register_block(
			array(
				'name' => 'home-hero-block',
				'title' => __('Home Hero Block'),
				'description' => __('QCA Home Hero Block'),
				'render_template' => '/block-templates/landing-page-blocks/home-hero-block/home_hero_block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('QCA-home-script',  get_template_directory_uri() . '/block-templates/landing-page-blocks/home-hero-block/home_hero_block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCAHomeHeroBlock', 'HomeHero', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-programms-block',
				'title' => __('QCA Programms Block'),
				'description' => __('QCA Programms Block'),
				'render_template' => '/block-templates/landing-page-blocks/qca-programms-block/qca-programms-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('QCA-programms-script', get_template_directory_uri() . '/block-templates/landing-page-blocks/qca-programms-block/qca-programms-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCAProgrammsBlock', 'QCAProgramms', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'join-us-now-block',
				'title' => __('Join Us Now Block'),
				'description' => __('Join Us Now Block'),
				'render_template' => '/block-templates/landing-page-blocks/join-us-now-block/join-us-now-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('QCA-join-us-script', get_template_directory_uri() . '/block-templates/landing-page-blocks/join-us-now-block/join-us-now-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('JoinUsBlock', 'JoinUs', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'our-testimonial-block',
				'title' => __('Our Testimonial Block'),
				'description' => __('Our Testimonial Block'),
				'render_template' => '/block-templates/landing-page-blocks/our-testimonial-block/our-testimonial-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('Our-testimonial-script', get_template_directory_uri() . '/block-templates/landing-page-blocks/our-testimonial-block/our-testimonial-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Our Testimonial', 'Our Testimonial', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'epic-gallery-block',
				'title' => __('Epic Gallery Block'),
				'description' => __('Epic Gallery Block'),
				'render_template' => '/block-templates/landing-page-blocks/epic-gallery-block/epic-gallery-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('epic-gallery-script', get_template_directory_uri() . '/block-templates/landing-page-blocks/epic-gallery-block/epic-gallery-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Epic Gallery', 'Epic Gallery', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'hero-section-block',
				'title' => __('Hero Section Block'),
				'description' => __('Hero Section Block'),
				'render_template' => '/block-templates/common-blocks/hero-section-block/hero-section-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('hero-section-script', '/block-templates/common-blocks/hero-section-block/hero-section-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Hero Section', 'Hero Section', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'hero-card-block',
				'title' => __('Hero cards Block'),
				'description' => __('Hero cards Block'),
				'render_template' => '/block-templates/common-blocks/hero-card-block/hero-card-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('hero-cards-script', '/block-templates/common-blocks/hero-card-block/hero-card-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Hero cards', 'Hero cards', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'about-us-block',
				'title' => __('About Us Block'),
				'description' => __('About Us Block'),
				'render_template' => '/block-templates/common-blocks/about-us-block/about-us-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('about-us-script', '/block-templates/common-blocks/about-us-block/about-us-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('About Us', 'About Us', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);


		acf_register_block(
			array(
				'name' => 'advanceEd-block',
				'title' => __('Advance ED Block'),
				'description' => __('Advance ED Block'),
				'render_template' => '/block-templates/common-blocks/advanceEd-block/advanceEd-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('advance-ed-script', '/block-templates/common-blocks/advanceEd-block/advanceEd-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Advance ED', 'Advance ED', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'our-gallery-block',
				'title' => __('Our Gallery Block'),
				'description' => __('Our Gallery Block'),
				'render_template' => '/block-templates/common-blocks/our-gallery-block/our-gallery-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('our-gallery-script', '/block-templates/common-blocks/our-gallery-block/our-gallery-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Our Gallery', 'Our Gallery', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'support-qca-block',
				'title' => __('Support QCA Block'),
				'description' => __('Support QCA Block'),
				'render_template' => '/block-templates/common-blocks/support-qca-block/support-qca-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('support-qca-script', '/block-templates/common-blocks/support-qca-block/support-qca-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Support QCA', 'Support QCA', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-location-block',
				'title' => __('QCA Location Block'),
				'description' => __('QCA Location Block'),
				'render_template' => '/block-templates/common-blocks/qca-location-block/qca-location-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('qca-location-script', '/block-templates/common-blocks/qca-location-block/qca-location-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Location', 'QCA Location', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'admission-and-fee-hero-block',
				'title' => __('Admission And Fee Hero Block'),
				'description' => __('Admission And Fee Hero Block'),
				'render_template' => '/block-templates/common-blocks/admission-and-fee-hero-block/admission-and-fee-hero-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('admission-and-fee-hero-script', '/block-templates/common-blocks/admission-and-fee-hero-block/admission-and-fee-hero-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Admission And Fee Hero Block', 'Admission And Fee Hero Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'admission-fee-structure',
				'title' => __('Admission Fee Structure Block'),
				'description' => __('Admission Fee Structure Block'),
				'render_template' => '/block-templates/common-blocks/admission-fee-structure/admission-fee-structure.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('admission-fee-structure-script', '/block-templates/common-blocks/admission-fee-structure/admission-fee-structure.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Admission Fee Structure Block', 'Admission Fee Structure Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'admission-details-block',
				'title' => __('Admission Details Block'),
				'description' => __('Admission Details Block'),
				'render_template' => '/block-templates/common-blocks/admission-details-block/admission-details-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('admission-details-block-script', '/block-templates/common-blocks/admission-details-block/admission-details-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Admission Details Block', 'Admission Details Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'admission-events-block',
				'title' => __('Admission Events Block'),
				'description' => __('Admission Events Block'),
				'render_template' => '/block-templates/common-blocks/admission-events-block/admission-events-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('admission-events-block-script', '/block-templates/common-blocks/admission-events-block/admission-events-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Admission Events Block', 'Admission Events Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'application-process-block',
				'title' => __('Application Process Block'),
				'description' => __('Application Process Block'),
				'render_template' => '/block-templates/common-blocks/application-process-block/application-process-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('application-process-block-script', '/block-templates/common-blocks/application-process-block/application-process-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Application Process Block', 'Application Process Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'our-courses-block',
				'title' => __('Our Courses Block'),
				'description' => __('Our Courses Block'),
				'render_template' => '/block-templates/common-blocks/our-courses-block/our-courses-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('our-courses-block-script', '/block-templates/common-blocks/our-courses-block/our-courses-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Our Courses Block', 'Our Courses Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'common-title-heading-block',
				'title' => __('Heading With Title'),
				'description' => __('Common Title heading Block'),
				'render_template' => '/block-templates/common-blocks/common-title-heading-block/common-title-heading-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('common-title-heading-block-script', '/block-templates/common-blocks/common-title-heading-block/common-title-heading-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Common Title heading Block', 'Common Title heading Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'academic-callender-block',
				'title' => __('Academic Callender Block'),
				'description' => __('Academic Callender Block'),
				'render_template' => '/block-templates/common-blocks/academic-callender-block/academic-callender-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('academic-callender-block-script', '/block-templates/common-blocks/academic-callender-block/academic-callender-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Academic Callender Block', 'Academic Callender Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'what-is-qca-block',
				'title' => __('What Is QCA'),
				'description' => __('What Is QCA'),
				'render_template' => '/block-templates/common-blocks/what-is-qca-block/what-is-qca-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('what-is-qca-block-script', '/block-templates/common-blocks/what-is-qca-block/what-is-qca-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('What Is QCA', 'What Is QCA', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-values',
				'title' => __('QCA Values'),
				'description' => __('QCA Values'),
				'render_template' => '/block-templates/common-blocks/qca-values/qca-values.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('qca-values-script', '/block-templates/common-blocks/qca-values/qca-values.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Values', 'QCA Values', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'giving-back-service-learning',
				'title' => __('Giving Back Service Learning'),
				'description' => __('Giving Back Service Learning'),
				'render_template' => '/block-templates/common-blocks/giving-back-service-learning/giving-back-service-learning.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('giving-back-service-learning-script', '/block-templates/common-blocks/giving-back-service-learning/giving-back-service-learning.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Giving Back Service Learning', 'Giving Back Service Learning', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'common-cta-footer',
				'title' => __('Common Footer CTA'),
				'description' => __('Common Footer CTA'),
				'render_template' => '/block-templates/common-blocks/common-cta-footer/common-cta-footer.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('common-cta-footer-script', '/block-templates/common-blocks/common-cta-footer/common-cta-footer.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Common Footer CTA', 'Common Footer CTA', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'student-experience-block',
				'title' => __('Student Experience Block'),
				'description' => __('Student Experience Block'),
				'render_template' => '/block-templates/common-blocks/student-experience-block/student-experience-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('student-experience-block-script', '/block-templates/common-blocks/student-experience-block/student-experience-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Student Experience Block', 'Student Experience Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'belongings-block',
				'title' => __('Belongings At QCA Block'),
				'description' => __('Belongings At QCA Block'),
				'render_template' => '/block-templates/common-blocks/belongings-block/belongings-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('belongings-block-script', '/block-templates/common-blocks/belongings-block/belongings-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Belongings At QCA Block', 'Belongings At QCA Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'sisterhood-block',
				'title' => __('Sisterhood Block'),
				'description' => __('Sisterhood Block'),
				'render_template' => '/block-templates/common-blocks/sisterhood-block/sisterhood-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('sisterhood-block-script', '/block-templates/common-blocks/sisterhood-block/sisterhood-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Sisterhood Block', 'Sisterhood Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-community-block',
				'title' => __('QCA Community Block'),
				'description' => __('QCA Community Block'),
				'render_template' => '/block-templates/common-blocks/qca-community-block/qca-community-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('qca-community-block-script', '/block-templates/common-blocks/qca-community-block/qca-community-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Community Block', 'QCA Community Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'community-cards-block',
				'title' => __('Community Cards Block'),
				'description' => __('Community Cards Block'),
				'render_template' => '/block-templates/common-blocks/community-cards-block/community-cards-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('community-cards-block-script', '/block-templates/common-blocks/community-cards-block/community-cards-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Community Cards Block', 'Community Cards Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'leading-accordian-block',
				'title' => __('Leading Accordian Block'),
				'description' => __('Leading Accordian Block'),
				'render_template' => '/block-templates/common-blocks/leading-accordian-block/leading-accordian-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('leading-accordian-block-script', '/block-templates/common-blocks/leading-accordian-block/leading-accordian-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Leading Accordian Block', 'Leading Accordian Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'leading-school-grads',
				'title' => __('Leading School Grads Block'),
				'description' => __('Leading School Grads Block'),
				'render_template' => '/block-templates/common-blocks/leading-school-grads/leading-school-grads.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('leading-school-grads-script', '/block-templates/common-blocks/leading-school-grads/leading-school-grads.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Leading School Grads Block', 'Leading School Grads Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'half-width-block',
				'title' => __('Half Width Block'),
				'description' => __('Half Width Block'),
				'render_template' => '/block-templates/common-blocks/half-width-block/half-width-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('half-width-block-script', '/block-templates/common-blocks/half-width-block/half-width-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Half Width Block', 'Half Width Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'technology-cards-block',
				'title' => __('Technology Cards'),
				'description' => __('Technology Cards'),
				'render_template' => '/block-templates/common-blocks/technology-cards-block/technology-cards-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('technology-cards-block-script', '/block-templates/common-blocks/technology-cards-block/technology-cards-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Technology Cards', 'Technology Cards', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-mission-block',
				'title' => __('QCA Mission Block'),
				'description' => __('QCA Mission Block'),
				'render_template' => '/block-templates/landing-page-blocks/qca-mission-block/qca-mission-block.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('qca-mission-script', '/block-templates/landing-page-blocks/qca-mission-block/qca-mission-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Mission', 'QCA Mission', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-vission-block',
				'title' => __('QCA Vission Block'),
				'description' => __('QCA Vission Block'),
				'render_template' => '/block-templates/landing-page-blocks/qca-vission-block/qca-vission-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('qca-vission-script', '/block-templates/landing-page-blocks/qca-vission-block/qca-vission-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Vission', 'QCA Vission', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-marquee-slider-block',
				'title' => __('QCA Marquee Slider Block'),
				'description' => __('QCA Marquee Slider Block'),
				'render_template' => '/block-templates/landing-page-blocks/qca-marquee-slider-block/qca-marquee-slider-block.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('qca-slider-script', '/block-templates/landing-page-blocks/qca-marquee-slider-block/qca-marquee-slider-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Marquee Slider', 'QCA Marquee Slider', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-milestones-block',
				'title' => __('QCA Milestones Block'),
				'description' => __('QCA Milestones Block'),
				'render_template' => '/block-templates/landing-page-blocks/qca-milestones-block/qca-milestones-block.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('qca-milestones-script', '/block-templates/landing-page-blocks/qca-milestones-block/qca-milestones-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA Milestones', 'QCA Milestones', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-academy-block',
				'title' => __('QCA Academy Block'),
				'description' => __('QCA Academy Block'),
				'render_template' => '/block-templates/landing-page-blocks/qca-academy-block/qca-academy-block.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('qca-academy-script', '/block-templates/landing-page-blocks/qca-academy-block/qca-academy-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('QCA academy', 'QCA academy', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'common-title-heading-hero-block',
				'title' => __('Common Title Heading Hero Block'),
				'description' => __('Common Title Heading Hero Block'),
				'render_template' => '/block-templates/landing-page-blocks/common-title-heading-hero-block/common-title-heading-hero-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('commo-title-heading-hero-block-script', '/block-templates/landing-page-blocks/common-title-heading-hero-block/common-title-heading-hero-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Common Title Heading Hero', 'Common Title Heading Hero', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'tabs-searchbar-block',
				'title' => __('Searchbar With Tabs Block'),
				'description' => __('Searchbar With Tabs Block'),
				'render_template' => '/block-templates/landing-page-blocks/tabs-searchbar-block/tabs-searchbar-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('tabs-searchbar-script', '/block-templates/landing-page-blocks/tabs-searchbar-block/tabs-searchbar-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Searchbar With Tabs', 'Searchbar With Tabs', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'accreditation-block',
				'title' => __('Accreditation Block'),
				'description' => __('Accreditation Block Block'),
				'render_template' => '/block-templates/landing-page-blocks/accreditation-block/accreditation-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('accreditation-block-script', '/block-templates/landing-page-blocks/accreditation-block/accreditation-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Accreditation Block', 'Accreditation Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'contact-us-form-block',
				'title' => __('Contact Us Form Block'),
				'description' => __('Contact Us Form Block Block'),
				'render_template' => '/block-templates/landing-page-blocks/contact-us-form-block/contact-us-form-block.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('contact-us-form-block-script', '/block-templates/landing-page-blocks/contact-us-form-block/contact-us-form-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Contact Us Form Block', 'Contact Us Form Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'contact-us-hero-section',
				'title' => __('Contact Us Hero Block'),
				'description' => __('Contact Us Hero Block'),
				'render_template' => '/block-templates/landing-page-blocks/contact-us-hero-section/contact-us-hero-section.php',
				'enqueue_assets' => function () {
					wp_enqueue_script('contact-us-hero-section-script', '/block-templates/landing-page-blocks/contact-us-hero-section/contact-us-hero-section.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Contact Us Hero Block', 'Contact Us Hero Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'hero-section',
				'title' => __('Common Hero Section'),
				'description' => __('Hero Section Block'),
				'render_template' => '/block-templates/landing-page-blocks/hero-section/hero-section.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('hero-section-script', '/block-templates/landing-page-blocks/hero-section/hero-section.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Hero Section Block', 'Hero Section Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'main-page-common-heading',
				'title' => __('Main Page Common Heading'),
				'description' => __('Main Page Common Heading'),
				'render_template' => '/block-templates/landing-page-blocks/main-page-common-heading/main-page-common-heading.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('main-page-common-heading-script', '/block-templates/landing-page-blocks/main-page-common-heading/main-page-common-heading.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Main Page Common Heading', 'Main Page Common Heading', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'hiring-process-cards',
				'title' => __('Hiring Process Cards'),
				'description' => __('Hiring Process cards'),
				'render_template' => '/block-templates/landing-page-blocks/hiring-process-cards/hiring-process-cards.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('hiring-process-cards-script', '/block-templates/landing-page-blocks/hiring-process-cards/hiring-process-cards.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Hiring Process cards', 'Hiring Process cards', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'open-positions',
				'title' => __('Open Positions'),
				'description' => __('Open Positions'),
				'render_template' => '/block-templates/landing-page-blocks/open-positions/open-positions.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('open-positions-script', '/block-templates/landing-page-blocks/open-positions/open-positions.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Open Positions', 'Open Positions', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'qca-benefits-block',
				'title' => __('Qca Benefits'),
				'description' => __('Qca Benefits'),
				'render_template' => '/block-templates/landing-page-blocks/qca-benefits-block/qca-benefits-block.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('qca-benefits-block-script', '/block-templates/landing-page-blocks/qca-benefits-block/qca-benefits-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Qca Benefits', 'Qca Benefits', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'tradition-and-event-tabs-block',
				'title' => __('Tradition And Events Tabs'),
				'description' => __('Tradition and Events Tabs'),
				'render_template' => '/block-templates/common-blocks/tradition-and-event-tabs-block/tradition-and-event-tabs-block.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('tradition-and-event-tabs-block-script', '/block-templates/common-blocks/tradition-and-event-tabs-block/tradition-and-event-tabs-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Tradition and Events Tabs', 'Tradition and Events Tabs', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'schedule-booking-form',
				'title' => __('Schedule Booking Form'),
				'description' => __('Schedule Booking Form'),
				'render_template' => '/block-templates/common-blocks/schedule-booking-form/schedule-booking-form.php',
				'enqueue_assets' => function () {
					// wp_enqueue_script('schedule-booking-form-script', '/block-templates/common-blocks/schedule-booking-form/schedule-booking-form.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Schedule Booking Form', 'Schedule Booking Form', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);

		acf_register_block(
			array(
				'name' => 'color-code-block',
				'title' => __('Color Code Block'),
				'description' => __('Color Code Block'),
				'render_template' => '/block-templates/common-blocks/color-code-block/color-code-block.php',
				'enqueue_assets' => function () {
					//wp_enqueue_script('color-code-block-script', '/block-templates/common-blocks/color-code-block/color-code-block.js');
				},
				'category' => 'blocks',
				'icon' => 'welcome-add-page',
				'keywords' => array('Color Code Block', 'Color Code Block', ''),
				'multiple' => true,
				'mode' => 'edit',
			)
		);
	}
}
add_action('acf/init', 'qca_custom_acf_init');


// ACF Fields Json Files
function my_acf_json_save_point($path)
{
	return get_stylesheet_directory() . '/parent-acf-json';
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');


// Navigation Menus

register_nav_menus(array(
	'primary' => __('Primary Menu'),
));


// Filter to Disable P tag from contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');


function my_custom_mime_types($mimes)
{

	// New allowed mime types.
	#$mimes['svg']  = 'image/svg+xml';
	#$mimes['svgz'] = 'image/svg+xml';
	$mimes['json']  = 'application/json';

	// Optional. Remove a mime type.
	#unset( $mimes['exe'] );

	return $mimes;
}

add_filter('upload_mimes', 'my_custom_mime_types');




