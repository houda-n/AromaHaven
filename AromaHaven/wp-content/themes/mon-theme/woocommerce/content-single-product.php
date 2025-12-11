<?php
defined('ABSPATH') || exit;

global $product;
?>

<div class="product-container">

    <div class="product-gallery">
        <?php woocommerce_show_product_images(); ?>
    </div>

    <div class="product-info">
        <h1><?php the_title(); ?></h1>

        <div class="price">
            <?php echo wp_kses_post( $product->get_price_html() ); ?>
        </div>

        <?php woocommerce_template_single_add_to_cart(); ?>

        <div class="description">
            <?php woocommerce_template_single_excerpt(); ?>
        </div>

        <p class="benefits">🌿 Produit naturel – idéal pour votre rituel bien-être.</p>

        <?php woocommerce_output_product_data_tabs(); ?>
    </div>

</div>
