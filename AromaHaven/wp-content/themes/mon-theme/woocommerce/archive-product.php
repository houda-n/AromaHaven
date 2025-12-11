<?php
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="container shop-container">

    <header class="shop-header">
        <h1 class="shop-title"><?php woocommerce_page_title(); ?></h1>
        <p class="shop-subtitle">🌿 Découvrez nos produits bien-être</p>
    </header>

    <?php woocommerce_content(); ?>

</div>

<?php get_footer(); ?>
