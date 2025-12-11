<?php

function aromahaven_enqueue_assets() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style(
        'aromahaven-style',
        get_stylesheet_uri(),
        [],
        $theme_version
    );

    wp_enqueue_style(
        'aromahaven-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        ['aromahaven-style'],
        $theme_version
    );

    wp_enqueue_script(
        'aromahaven-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'aromahaven_enqueue_assets');



function aromahaven_register_menus() {
    register_nav_menus([
        'main_menu'   => 'Menu principal',
        'footer_menu' => 'Menu pied de page',
    ]);
}
add_action('init', 'aromahaven_register_menus');


function aromahaven_theme_setup() {
    add_theme_support('woocommerce');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'aromahaven_theme_setup');


// Message en haut de la boutique
function aromahaven_shop_message() {
    echo '<p class="shop-message">🌿 Découvrez nos produits bien-être</p>';
}
add_action('woocommerce_before_shop_loop', 'aromahaven_shop_message');

// Texte du bouton sur la fiche produit
function aromahaven_single_add_to_cart_text() {
    return 'Ajouter à mon rituel bien-être 🌱';
}
add_filter('woocommerce_product_single_add_to_cart_text', 'aromahaven_single_add_to_cart_text');

// Tailles d’images produits
function aromahaven_wc_thumbnail_size( $size ) {
    return [
        'width'  => 600,
        'height' => 600,
        'crop'   => true,
    ];
}
add_filter( 'woocommerce_get_image_size_thumbnail', 'aromahaven_wc_thumbnail_size' );

function aromahaven_wc_single_size( $size ) {
    return [
        'width'  => 1000,
        'height' => 1000,
        'crop'   => true,
    ];
}
add_filter( 'woocommerce_get_image_size_single', 'aromahaven_wc_single_size' );

function aromahaven_header_cart() {
    if ( ! function_exists( 'WC' ) ) {
        return;
    }

    $count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
    $url   = wc_get_cart_url();
    ?>
    <a class="header-cart" href="<?php echo esc_url( $url ); ?>">
        <span class="header-cart__icon">🛒</span>
        <span class="header-cart__count"><?php echo intval( $count ); ?></span>
    </a>
    <?php
}

// Mettre à jour le nombre d’articles sans recharger la page
function aromahaven_header_cart_fragment( $fragments ) {
    ob_start();
    aromahaven_header_cart();
    $fragments['a.header-cart'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'aromahaven_header_cart_fragment' );
