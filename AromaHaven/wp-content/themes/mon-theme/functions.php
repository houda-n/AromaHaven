<?php

// 1. Charger les fichiers CSS & JS
function aromahaven_enqueue_assets() {
    wp_enqueue_style('aromahaven-style', get_stylesheet_uri());
    wp_enqueue_style('aromahaven-custom', get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_script('aromahaven-js', get_template_directory_uri() . '/assets/js/main.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'aromahaven_enqueue_assets');


// 2. Déclarer les menus
function aromahaven_register_menus() {
    register_nav_menus([
        'main_menu' => 'Menu principal',
        'footer_menu' => 'Menu pied de page'
    ]);
}
add_action('init', 'aromahaven_register_menus');


// 3. Activer WooCommerce
add_action('after_setup_theme', function() {
    add_theme_support('woocommerce');
});


// 4. HOOK PERSONNALISÉ 1 : message sur la boutique
add_action('woocommerce_before_shop_loop', function() {
    echo '<p class="shop-message">🌿 Découvrez nos produits bien-être</p>';
});

// 5. HOOK PERSONNALISÉ 2 : customiser le bouton ajouter au panier
add_filter('woocommerce_product_single_add_to_cart_text', function() {
    return 'Ajouter à mon rituel bien-être 🌱';
});