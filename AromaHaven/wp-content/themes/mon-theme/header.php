<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <h1 class="logo">
            <a href="<?php echo home_url(); ?>">AromaHaven</a>
        </h1>

        <nav class="main-nav">
            <?php 
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false
                ]); 
            ?>
        </nav>
    </div>
</header>

<main class="site-content">