<?php get_header(); ?>

<section class="hero">
    <h1>AromaHaven</h1>
    <p>Huiles essentielles, coffrets bien-être, livres et diffuseurs naturels.</p>
</section>

<section class="featured">
    <h2>Nos produits phares</h2>
    <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity"]'); ?>
</section>

<section class="categories">
    <h2>Nos univers bien-être</h2>
    <div class="cats">
        <a href="#" class="cat">Huiles essentielles</a>
        <a href="#" class="cat">Diffuseurs</a>
        <a href="#" class="cat">Coffrets</a>
        <a href="#" class="cat">Livres & Guides</a>
    </div>
</section>

<?php get_footer(); ?>