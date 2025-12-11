    </main>

    <footer class="site-footer">
        <div class="container site-footer__inner">
            <p class="site-footer__copy">
                © <?php echo date_i18n('Y'); ?> AromaHaven – Bien-être &amp; huiles essentielles.
            </p>

            <nav class="footer-menu" aria-label="<?php esc_attr_e( 'Menu de pied de page', 'aromahaven' ); ?>">
                <?php 
                    wp_nav_menu([
                        'theme_location' => 'footer_menu',
                        'container'      => false,
                        'menu_class'     => 'footer-menu__list',
                        'fallback_cb'    => false,
                    ]);
                ?>
            </nav>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>