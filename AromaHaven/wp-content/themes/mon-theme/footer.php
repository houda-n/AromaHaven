</main>

<footer class="site-footer">
    <div class="container">
        <p>© <?php echo date('Y'); ?> AromaHaven – Bien-être & huiles essentielles.</p>

        <?php 
            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'container' => false
            ]);
        ?>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
