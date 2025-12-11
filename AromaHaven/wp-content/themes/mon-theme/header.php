<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-inner">
        <h1 class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">AromaHaven</a>
        </h1>

        <div class="header-right">
            <nav class="main-nav">
                <?php 
                    wp_nav_menu([
                        'theme_location' => 'main_menu',
                        'container'      => false
                    ]); 
                ?>
            </nav>

            <div class="header-cart-wrapper">
                <?php 
                if ( function_exists( 'aromahaven_header_cart' ) ) {
                    aromahaven_header_cart();
                }
                ?>
            </div>
        </div>
    </div>
</header>

<main class="site-content">
