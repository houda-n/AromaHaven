<?php
/*
Plugin Name: AromaHaven – Rituels Bien-Être
Description: Plugin personnalisé ajoutant un CPT "Rituels bien-être" + un hook WooCommerce + un shortcode.
Version: 1.0
Author: Ton Nom
*/

if ( ! defined('ABSPATH') ) exit;

/**
 * 1. REGISTER CPT — Rituels bien-être
 */
function ah_register_cpt_rituels() {

    $labels = [
        'name'               => 'Rituels bien-être',
        'singular_name'      => 'Rituel bien-être',
        'menu_name'          => 'Rituels bien-être',
        'add_new'            => 'Ajouter un rituel',
        'add_new_item'       => 'Ajouter un nouveau rituel',
        'edit_item'          => 'Modifier le rituel',
        'new_item'           => 'Nouveau rituel',
        'view_item'          => 'Voir le rituel',
        'search_items'       => 'Rechercher un rituel',
        'not_found'          => 'Aucun rituel trouvé',
        'not_found_in_trash' => 'Aucun rituel dans la corbeille',
    ];

    $args = [
        'labels'        => $labels,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => [ 'slug' => 'rituels-bien-etre' ],
        'menu_icon'     => 'dashicons-leaf',
        'supports'      => [ 'title', 'editor', 'thumbnail' ],
        'show_in_rest'  => true, // Éditeur Gutenberg + API
    ];

    register_post_type('rituel_bien_etre', $args);
}
add_action('init', 'ah_register_cpt_rituels');


/*
 * 2. HOOK WOOCOMMERCE — Afficher un rituel
 */
function ah_display_random_rituel_on_product() {

    if ( ! is_product() ) return;

    // Récupère 1 rituel au hasard
    $rituel = new WP_Query([
        'post_type'      => 'rituel_bien_etre',
        'posts_per_page' => 1,
        'orderby'        => 'rand'
    ]);

    if ( ! $rituel->have_posts() ) return;

    echo '<section class="ah-rituel-block">';
    echo '<h2 class="ah-rituel-title">Suggestion de rituel bien-être</h2>';

    while ( $rituel->have_posts() ) {
        $rituel->the_post();

        echo '<div class="ah-rituel">';
            echo '<h3>' . get_the_title() . '</h3>';
            echo '<div class="ah-rituel-content">';
                the_content();
            echo '</div>';
        echo '</div>';
    }

    echo '</section>';

    wp_reset_postdata();
}
add_action('woocommerce_after_single_product_summary', 'ah_display_random_rituel_on_product', 12);



function ah_shortcode_rituels( $atts ) {
    $atts = shortcode_atts([
        'limit' => 3
    ], $atts );

    $rituels = new WP_Query([
        'post_type'      => 'rituel_bien_etre',
        'posts_per_page' => intval($atts['limit']),
        'orderby'        => 'date',
        'order'          => 'DESC',
    ]);

    if ( ! $rituels->have_posts() ) {
        return '<p>Aucun rituel bien-être disponible.</p>';
    }

    ob_start();

    echo '<div class="ah-rituels-list">';
    while ( $rituels->have_posts() ) {
        $rituels->the_post();

        echo '<article class="ah-rituel-item">';
        echo '<h3>' . get_the_title() . '</h3>';
        echo '<div class="ah-rituel-excerpt">';
        the_excerpt();
        echo '</div>';
        echo '</article>';
    }
    echo '</div>';

    wp_reset_postdata();

    return ob_get_clean();
}
add_shortcode('rituels_bien_etre', 'ah_shortcode_rituels');
