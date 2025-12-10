<?php
/**
 * Pedicure Makeup Store functions and definitions.
 *
 * @package Pedicure Makeup Store
 */

/**
 *  Defining Constants
 */

// Core Constants
define('PEDICURE_MAKEUP_STORE_REQUIRED_PHP_VERSION', '5.6' );
define('PEDICURE_MAKEUP_STORE_DIR_PATH', get_template_directory());
define('PEDICURE_MAKEUP_STORE_DIR_URI', get_template_directory_uri());
define('PEDICURE_MAKEUP_STORE_AUT','https://www.legacytheme.net/products/pedicure-makeup-store/');

if ( ! function_exists( 'pedicure_makeup_store_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pedicure_makeup_store_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // support alig-wide
    add_theme_support( 'align-wide' );

    add_theme_support( "wp-block-styles" );

    load_theme_textdomain( 'pedicure-makeup-store', get_template_directory() . '/languages' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'pedicure-makeup-store' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(      
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Gallery post format
    add_theme_support( 'post-formats', array( 'gallery' ));

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

}
endif;
    add_action( 'after_setup_theme', 'pedicure_makeup_store_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pedicure_makeup_store_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pedicure_makeup_store_content_width', 640 );
}
add_action( 'after_setup_theme', 'pedicure_makeup_store_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pedicure_makeup_store_widgets_init() {
	//Footer widget columns
    $pedicure_makeup_store_widget_num = absint(get_theme_mod( 'pedicure_makeup_store_footer_widgets', '4' ));
    for ( $i=1; $i <= $pedicure_makeup_store_widget_num; $i++ ) :
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Column', 'pedicure-makeup-store' ) . $i,
            'id'            => 'footer-' . $i,
            'description'   => '',
            'before_widget' => '<div id="%1$s" class="section %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title" itemprop="name">',
            'after_title'   => '</h4>',
        ) );
    endfor;

    register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'pedicure-makeup-store' ),
		'id'            => 'primary-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'pedicure-makeup-store' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 2', 'pedicure-makeup-store' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'pedicure-makeup-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 3', 'pedicure-makeup-store' ),
        'id'            => 'sidebar-3',
        'description'   => esc_html__( 'Add widgets here.', 'pedicure-makeup-store' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'pedicure_makeup_store_widgets_init' );

/** 
* Excerpt More
*/
function pedicure_makeup_store_excerpt_more( $more ) {
	if ( is_admin() ) {
		return $more;
	}
    return '&hellip;';
}
add_filter('excerpt_more', 'pedicure_makeup_store_excerpt_more');


/** 
* Custom excerpt length.
*/
function pedicure_makeup_store_excerpt_length() {
	$length= intval(get_theme_mod('pedicure_makeup_store_posts_excerpt_length',30));
    return $length;
}
add_filter('excerpt_length', 'pedicure_makeup_store_excerpt_length');

/*
script goes here
*/
function pedicure_makeup_store_scripts() {

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), '5.3.3');
    wp_enqueue_style( 'pedicure-makeup-store-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    wp_style_add_data('pedicure-makeup-store-style', 'rtl', 'replace');
	wp_enqueue_style( 'm-customscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', array(), '3.1.5');    
    wp_enqueue_style( 'elsie-google-fonts', 'https://fonts.googleapis.com/css2?family=Elsie:wght@400;900&display=swap', array(), '1.0');
    wp_enqueue_style( 'inter-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap', array(), '1.0');
    wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/css/owl.carousel' . '.css', array(), '2.3.4' );

    // Block stylesheet.
    wp_enqueue_style( 'pedicure-makeup-store-block-style', get_theme_file_uri( '/css/blocks-styles.css' ), array( 'pedicure-makeup-store-style' ), '1.0' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
	
	wp_enqueue_script( 'resize-sensor', get_template_directory_uri() . '/js/ResizeSensor.js',array(),'1.0.0', true );
	wp_enqueue_script( 'm-customscrollbar-js', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.js',array(),'3.1.5', true );	
    
	wp_enqueue_script( 'html5shiv',get_template_directory_uri().'/js/html5shiv.js',array(), '3.7.3');
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'respond', get_template_directory_uri().'/js/respond.js' );
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '5.3.3', true );

    wp_enqueue_script( 'pedicure-makeup-store-main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'customize-preview'), '1.0', true );
    wp_enqueue_script( 'owl-carouselscript', get_template_directory_uri() . '/js/owl.carousel' . '.js', array( 'jquery' ), '2.3.4', true );
    
}
add_action( 'wp_enqueue_scripts', 'pedicure_makeup_store_scripts' );


/**
* Custom search form
*/
function pedicure_makeup_store_search_form( $form ) {
    $form = '<form method="get" id="searchform" class="searchform" action="' . esc_url(home_url( '/' )) . '" >
    <div class="search">
      <input type="text" value="' . get_search_query() . '" class="blog-search" name="s" id="s" placeholder="'. esc_attr__( 'Search here','pedicure-makeup-store' ) .'">
      <label for="searchsubmit" class="search-icon"><i class="bi bi-search"></i></label>
      <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search','pedicure-makeup-store' ) .'" />
    </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'pedicure_makeup_store_search_form', 100 );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function pedicure_makeup_store_pingback_header() {
    if ( is_singular() && pings_open() ) {
       printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
    }
}
add_action( 'wp_head', 'pedicure_makeup_store_pingback_header' );

// Add WooCommerce support to the theme
function pedicure_makeup_store_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'pedicure_makeup_store_add_woocommerce_support' );

// Change the number of product columns in WooCommerce shop page
function pedicure_makeup_store_change_woocommerce_shop_columns( $columns ) {
    $columns = 3; // Change this number to your desired column count (e.g., 2, 3, 4, etc.)
    return $columns;
}
add_filter( 'loop_shop_columns', 'pedicure_makeup_store_change_woocommerce_shop_columns', 999 );

function pedicure_makeup_store_custom_woocommerce_cart_icon() {
    
    if ( class_exists( 'WooCommerce' ) && WC()->cart ) {
        
        $pedicure_makeup_store_cart_count = WC()->cart->get_cart_contents_count();
        $pedicure_makeup_store_cart_url = wc_get_cart_url();
        ?>
        
        <span class="cart-icon-wrapper">
            <a class="cart-contents" href="<?php echo esc_url($pedicure_makeup_store_cart_url); ?>">
                <i class="bi bi-bag"></i>
                <?php if ($pedicure_makeup_store_cart_count > 0) { ?>
                    <span class="cart-count"><?php echo esc_html($pedicure_makeup_store_cart_count); ?></span>
                <?php } ?>
            </a>
        </span>
        
        <?php
    }
}

add_filter( 'woocommerce_add_to_cart_fragments', 'pedicure_makeup_store_custom_woocommerce_cart_icon_fragments' );

function pedicure_makeup_store_custom_woocommerce_cart_icon_fragments( $fragments ) {
    
    if ( class_exists( 'WooCommerce' ) ) {
        ob_start();
        pedicure_makeup_store_custom_woocommerce_cart_icon();
        $fragments['div.cart-icon-wrapper'] = ob_get_clean();
    }
    return $fragments;
}

/**
 * Customizer additions.
 */
require get_parent_theme_file_path() . '/inc/customizer/customizer.php';

/**
 * Template functions
 */
require get_parent_theme_file_path() . '/inc/template-functions.php';

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path() . '/inc/template-tags.php';

/**
 * Custom template hooks for this theme.
 */
require get_parent_theme_file_path() . '/inc/template-hooks.php';

/**
 * Extra classes for this theme.
 */
require get_parent_theme_file_path() . '/inc/extras.php';

/**
 * Upgrade to Pro
 */
require_once( trailingslashit( get_template_directory() ) . 'pedicure-makeup-store-pro/class-customize.php' );

/**
 * Theme TGM.
 */
require get_template_directory() . '/inc/tgm/tgm.php';

/**
 * Notices
 */
require_once get_parent_theme_file_path( '/inc/activation-notice/class-welcome-notice.php' );

/**
 * Theme DEMO IMPORT.
 */
require get_template_directory() . '/inc/quick-start-page.php';

// extra customization
require_once get_template_directory() . '/inc/theme-customizations.php';

 /**getstart*/
require get_template_directory() . '/inc/pedicure-makeup-store-get-theme-info.php';

if ( ! function_exists( 'pedicure_makeup_store_admin_scripts' ) ) :
    function pedicure_makeup_store_admin_scripts($hook) {
        wp_enqueue_style( 'pedicure-makeup-store-get-theme-info-css', get_template_directory_uri() . '/css/pedicure-makeup-store-get-theme-info.css', false ); 
    }
endif;
add_action( 'admin_enqueue_scripts', 'pedicure_makeup_store_admin_scripts' );

// Add this function to  theme for the deprecated error
function pedicure_makeup_store_get_page_id_by_title($title) {
    $query = new WP_Query(array(
        'post_type'      => 'page',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        's'              => $title,
    ));

    if ($query->have_posts()) {
        foreach ($query->posts as $post) {
            if (strcasecmp($post->post_title, $title) === 0) {
                return $post->ID;
            }
        }
    }

    return false; // Return false if not found
}

add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );