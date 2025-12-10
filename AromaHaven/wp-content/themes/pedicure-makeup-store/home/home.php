<?php
/**
 * Template Name: Home
 */

get_header();
?>

<main id="primary">
        
    <?php
        /**
         * Hook - pedicure_makeup_store_action_home_banner.
         *
         * @hooked pedicure_makeup_store_home_banner_section - 10
         */
        do_action( 'pedicure_makeup_store_action_home_banner' );

        /**
         * Hook - pedicure_makeup_store_action_home_product.
         *
         * @hooked pedicure_makeup_store_home_product_section - 10
         */
        do_action( 'pedicure_makeup_store_action_home_product' );

        /**
         * Hook - pedicure_makeup_store_action_home_extra.
         *
         * @hooked pedicure_makeup_store_home_extra_section - 10
         */
        do_action( 'pedicure_makeup_store_action_home_extra' );
    ?>
    
</main>

<?php
get_footer();