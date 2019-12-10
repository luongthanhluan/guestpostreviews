<?php

/**
 * Guest Post Reviews functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Guest_Post_Reviews
 */
if (!function_exists('guest_post_reviews_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function guest_post_reviews_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Guest Post Reviews, use a find and replace
         * to change 'guest-post-reviews' to the name of your theme in all the template files.
         */
        load_theme_textdomain('guest-post-reviews', get_template_directory() . '/languages');

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
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'guest-post-reviews'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('guest_post_reviews_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }

endif;
add_action('after_setup_theme', 'guest_post_reviews_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function guest_post_reviews_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('guest_post_reviews_content_width', 640);
}

add_action('after_setup_theme', 'guest_post_reviews_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function guest_post_reviews_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Home Contents', 'guest-post-reviews'),
        'id' => 'sidebar-home',
        'description' => esc_html__('Add widgets here.', 'guest-post-reviews'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="section-heading section-heading--bottom-border widget-title"><span><i class="fas fa-broadcast-tower" aria-hidden="true"></i>',
        'after_title' => '</span></h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'guest-post-reviews'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'guest-post-reviews'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'guest_post_reviews_widgets_init');

function html_widget_title($title) {
    //HTML tag opening/closing brackets
    $title = str_replace('[', '<', $title);
    $title = str_replace('[/', '</', $title);

    //<strong></strong>
    $title = str_replace('s]', 'strong>', $title);
    //<em></em>
    $title = str_replace('e]', 'em>', $title);

    return $title;
}

add_filter('widget_title', 'html_widget_title');

/**
 * Enqueue scripts and styles.
 */
function guest_post_reviews_scripts() {
//      wp_enqueue_style( 'guest-post-reviews-application', get_template_directory_uri().'/fonts/entypo/entypo.css');
    wp_enqueue_style('guest-post-reviews-main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('guest-post-reviews-application', get_template_directory_uri() . '/css/application.css');
    wp_enqueue_style('guest-post-reviews-style', get_stylesheet_uri());

//	wp_enqueue_script( 'guest-post-reviews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//	wp_enqueue_script( 'guest-post-reviews-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script('guest-post-reviews-application', get_template_directory_uri() . '/js/application.js', array(), '20151215', true);
//  wp_enqueue_script( 'guest-post-reviews-application', get_template_directory_uri() . '/js/guest_post_reviews.js', array(), '20191201', true );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'guest_post_reviews_scripts');

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

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

function comicpress_copyright() {
    global $wpdb;
    $copyright_dates = $wpdb->get_results("
SELECT
YEAR(min(post_date_gmt)) AS firstdate,
YEAR(max(post_date_gmt)) AS lastdate
FROM
$wpdb->posts
WHERE
post_status = 'publish'
");
    $output = '';
    if ($copyright_dates) {
        $copyright = "&copy; " . $copyright_dates[0]->firstdate;
        if ($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
            $copyright .= '-' . $copyright_dates[0]->lastdate;
        }
        $output = $copyright;
    }
    return $output;
}

// Woocommerce Hook
//Remove Add To Cart
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');