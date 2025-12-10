<?php
/*
Plugin Name: AromaHaven Custom Plugin
Description: CPT + hook personnalisé pour le site AromaHaven.
Version: 1.0
Author: Houda
*/

if (!defined('ABSPATH')) exit;

// 1. CPT : Guides bien-être
function aromahaven_register_cpt() {
    register_post_type('guide', [
        'label' => 'Guides Bien-être',
        'public' => true,
        'menu_icon' => 'dashicons-book-alt',
        'supports' => ['title', 'editor', 'thumbnail']
    ]);
}
add_action('init', 'aromahaven_register_cpt');

// 2. Hook personnalisé (filtre)
add_filter('the_title', function($title) {
    if (get_post_type() === 'guide') {
        return "📘 " . $title;
    }
    return $title;
});
