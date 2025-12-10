<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package Pedicure Makeup Store
 */

?>

<section class="no-results not-found">
    <div class="search-content">
        <h1 class="page-search"><?php esc_html_e('Nothing Found','pedicure-makeup-store');?> </h1>
    </div> <!--page-header -->
    
    <div class="page-content">
        <?php
        if ( is_home() && current_user_can('publish_posts')) : ?>

            <p>
                <?php 
                
                $pedicure_makeup_store_link = sprintf(
                    esc_html__(/* translators: %1$s: Link to create a new post */ 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pedicure-makeup-store' ),
                    esc_url( admin_url( 'post-new.php' ) )
                );
                echo wp_kses( $pedicure_makeup_store_link, array( 'a' => array( 'href' => array() ) ) );
                ?>
            </p>

        <?php elseif(is_search()) : ?>

            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pedicure-makeup-store' ); ?></p>
			<?php get_search_form(); ?>
			<?php
        else : ?>

            p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pedicure-makeup-store' ); ?></p>
            <?php
                get_search_form();

		endif; ?>
    </div><!--.page-content-->
</section><!-- .no-results -->