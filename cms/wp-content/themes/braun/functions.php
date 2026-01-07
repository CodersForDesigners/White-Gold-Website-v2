<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Braun E. Fridge
 *
 */

require_once ABSPATH . '/../lib/providers/wordpress.php';
define( 'THEME_SETTINGS_PATH', get_template_directory() . '/settings' );



require get_template_directory() . '/lib/utils.php';

\BFS\CMS\WordPress::setupHooks();



require_once THEME_SETTINGS_PATH . '/routing.php';
require_once THEME_SETTINGS_PATH . '/authentication.php';
require_once THEME_SETTINGS_PATH . '/url-auto-correction.php';
require_once THEME_SETTINGS_PATH . '/dequeue-defaults.php';
require_once THEME_SETTINGS_PATH . '/gutenberg-block-categories.php';
require_once THEME_SETTINGS_PATH . '/unhide-reusable-blocks-post-type.php';

add_action( 'after_setup_theme', function () {

	// Theme supports
	require_once THEME_SETTINGS_PATH . '/theme-supports.php';
	// Document Title
	require_once THEME_SETTINGS_PATH . '/document-title.php';
	// Media settings
	require_once THEME_SETTINGS_PATH . '/media.php';
	// Custom Gutenberg Blocks
	require_once THEME_SETTINGS_PATH . '/custom-gutenberg-blocks.php';
	// Gutenberg Block editor settings
	require_once THEME_SETTINGS_PATH . '/gutenberg-block-editor.php';
	// Admin dashboard settings
	require_once THEME_SETTINGS_PATH . '/admin-dashboard/settings-options-page.php';
	require_once THEME_SETTINGS_PATH . '/admin-dashboard/gold-rate-parameters-settings-page.php';

} );



require_once __ROOT__ . '/types/cards/cards.php';
require_once __ROOT__ . '/types/branches/branches.php';
require_once __ROOT__ . '/types/faqs/faqs.php';
require_once __ROOT__ . '/types/videos/videos.php';

use \BFS\Types;

/* ~ Cards ~ */
Types\Cards::setupGutenbergBlocks();
Types\Cards::setupContentInputForm();
Types\Cards::enqueueAssets();
Types\Cards::onSavingInstance();

/* ~ Branches ~ */
Types\Branches::setupGutenbergBlocks();
Types\Branches::setupContentInputForm();
Types\Branches::enqueueAssets();
Types\Branches::onSavingInstance();

/* ~ FAQs ~ */
Types\FAQs::setupGutenbergBlocks();
Types\FAQs::setupContentInputForm();
Types\FAQs::enqueueAssets();
Types\FAQs::onSavingInstance();

/* ~ Videos ~ */
Types\Videos::setupGutenbergBlocks();
Types\Videos::setupContentInputForm();
Types\Videos::enqueueAssets();
Types\Videos::onSavingInstance();




//Change Default Wordpress logo and link
  function my_custom_login_logo() {
  echo '<style type="text/css">
  h1 a { background-image:url(/media/whitegold-logo-light.svg) !important; width: 221px !important; background-size:100% !important;}
  body, html{ background-color:#0047a7;}
  .login form {background:#ffffff !important; border:0 !important;}
  .login label{ color:#000 !important;}
  </style>';
  }
  add_action('login_head', 'my_custom_login_logo');




// Remove /category/ from category URLs
add_filter('term_link', 'remove_category_slug', 10, 3);
function remove_category_slug($termlink, $term, $taxonomy) {
    if ($taxonomy === 'category') {
        return home_url($term->slug);
    }
    return $termlink;
}

// Remove /tag/ from tag URLs
add_filter('post_link', 'remove_tag_slug', 10, 3);
add_filter('post_type_link', 'remove_tag_slug', 10, 3);
function remove_tag_slug($permalink, $post, $leavename) {
    if (strpos($permalink, '/tag/') !== false) {
        $permalink = str_replace('/tag/', '/', $permalink);
    }
    return $permalink;
}


// Remove "View" option for categories
function remove_category_view_link($actions, $term) {
    if ($term->taxonomy === 'category') {
        unset($actions['view']);
    }
    return $actions;
}
add_filter('category_row_actions', 'remove_category_view_link', 10, 2);


function custom_html_language_attributes( $output ) {
    return 'lang="en-IN"';
}
add_filter( 'language_attributes', 'custom_html_language_attributes' );

function custom_yoast_og_locale( $locale ) {
    return 'en_IN'; // Replace 'en_IN' with your desired locale
}
add_filter( 'wpseo_locale', 'custom_yoast_og_locale' );



function remove_locale_presenter( $presenters ) {
    return array_map( function( $presenter ) {
        if ( ! $presenter instanceof Yoast\WP\SEO\Presenters\Open_Graph\Locale_Presenter ) {
            return $presenter;
        }
    }, $presenters );
}

add_action( 'wpseo_frontend_presenters', 'remove_locale_presenter' );


function custom_og_locale_tag() {
    // Remove existing og:locale if added elsewhere
    remove_action( 'wp_head', 'wpseo_opengraph' );

    // Add custom og:locale tag
    echo '<meta property="og:locale" content="en_IN" />' . "\n";
}
add_action( 'wp_head', 'custom_og_locale_tag', 1 );


if( function_exists('acf_add_options_page') ) {

    $page = acf_add_options_page(array(
        'page_title' 	=> __('My Theme Options', 'productify'),
        'menu_title' 	=> __('Options', 'productify'),
        'menu_slug' 	=> 'my-theme-options',
        'capability' 	=> 'edit_posts',
        'redirect' 	    => false
    ));

}


function add_page_id_body_class( $classes ) {
    if ( is_page() ) {
        $page_id = get_the_ID();
        $classes[] = 'page-id-' . $page_id;  // Add class like: page-id-123
    }
    return $classes;
}
add_filter( 'body_class', 'add_page_id_body_class' );


