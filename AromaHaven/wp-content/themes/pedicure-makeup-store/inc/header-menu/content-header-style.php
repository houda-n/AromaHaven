<?php
/**
 * Template part for displaying header menu
 *
 * @package Pedicure Makeup Store
 */

?>
<?php
    $pedicure_makeup_store_page_val= is_front_page() ? 'home':'page' ;
    $pedicure_makeup_store_topbar_button_text = get_theme_mod('pedicure_makeup_store_topbar_button_text');
    $pedicure_makeup_store_tpobar_button_url = get_theme_mod('pedicure_makeup_store_tpobar_button_url');
?>

<header id="<?php echo esc_attr($pedicure_makeup_store_page_val);?>-inner" class="elementer-menu-anchor theme-menu-wrapper full-width-menu style1 page" role="banner">
    <?php
        if(true===get_theme_mod('pedicure_makeup_store_enable_highlighted area',true) && is_front_page()){
            ?><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('skip to content','pedicure-makeup-store'); ?> </a> <?php
        }
        else{
        ?><a class="skip-link screen-reader-text" href="#main"><?php esc_html_e('skip to content','pedicure-makeup-store');?></a> <?php
    }
    ?>
    <div id="header-main" class="header-wrapper">
        <div id="topbar">
            <div class="container py-2 px-4">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12 align-self-center">
                        <?php $pedicure_makeup_store_shipping_text = get_theme_mod('pedicure_makeup_store_shipping_text', '' );
                                    if ( ! empty( $pedicure_makeup_store_shipping_text ) ) { ?>
                            <p class="tbr-adrs mb-0"><?php echo esc_html( $pedicure_makeup_store_shipping_text ); ?><a class="topbar-btn" href="<?php echo esc_url($pedicure_makeup_store_tpobar_button_url); ?>"><?php esc_html_e('Shop Now','pedicure-makeup-store'); ?></a></p>
                        <?php } ?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 align-self-center text-lg-right">
                       <div class="follow-us my-2 my-lg-0">
                            <?php
                                $pedicure_makeup_store_social_media1_heading = get_theme_mod( 'pedicure_makeup_store_social_media1_heading', '' );
                                if ( ! empty( $pedicure_makeup_store_social_media1_heading ) ) { ?>
                                <a href="<?php echo esc_url( $pedicure_makeup_store_social_media1_heading ); ?>"><i class="bi bi-facebook me-4"></i></a>
                            <?php } ?>
                            <?php
                                $pedicure_makeup_store_social_media2_heading = get_theme_mod( 'pedicure_makeup_store_social_media2_heading', '' );
                                if ( ! empty( $pedicure_makeup_store_social_media2_heading ) ) { ?>
                                <a href="<?php echo esc_url( $pedicure_makeup_store_social_media2_heading ); ?>"><i class="bi bi-instagram me-4"></i></a>
                            <?php } ?>
                            <?php
                                $pedicure_makeup_store_social_media3_heading = get_theme_mod( 'pedicure_makeup_store_social_media3_heading', '' );
                                if ( ! empty( $pedicure_makeup_store_social_media3_heading ) ) { ?>
                                <a href="<?php echo esc_url( $pedicure_makeup_store_social_media3_heading ); ?>"><i class="bi bi-twitter-x me-4"></i></a>
                            <?php } ?>
                            <?php
                                $pedicure_makeup_store_social_media4_heading = get_theme_mod( 'pedicure_makeup_store_social_media4_heading', '' );
                                if ( ! empty( $pedicure_makeup_store_social_media4_heading ) ) { ?>
                                <a href="<?php echo esc_url( $pedicure_makeup_store_social_media4_heading ); ?>"><i class="bi bi-youtube me-4"></i></a>
                            <?php } ?>
                            <?php
                                $pedicure_makeup_store_social_media5_heading = get_theme_mod( 'pedicure_makeup_store_social_media5_heading', '' );
                                if ( ! empty( $pedicure_makeup_store_social_media5_heading ) ) { ?>
                                <a href="<?php echo esc_url( $pedicure_makeup_store_social_media5_heading ); ?>"><i class="bi bi-pinterest me-4"></i></a>
                            <?php } ?>
                            <?php
                                $pedicure_makeup_store_social_media6_heading = get_theme_mod( 'pedicure_makeup_store_social_media6_heading', '' );
                                if ( ! empty( $pedicure_makeup_store_social_media6_heading ) ) { ?>
                                <a href="<?php echo esc_url( $pedicure_makeup_store_social_media6_heading ); ?>"><i class="bi bi-linkedin me-4"></i></a>
                            <?php } ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div id="custom-header">
            <?php if ( display_header_text() ) : ?>
            <div id="topbar2">
                <div class="container">
                    <div class="row py-3 borders">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-12 align-self-center text-center text-lg-start text-md-start">
                            <div class="logo <?php echo (has_custom_logo() ? 'has-logo' : 'no-logo'); ?>" itemscope itemtype="https://schema.org/Organization">
                                <?php 
                                    // Display custom logo if available
                                    if ( has_custom_logo() ) {
                                        pedicure_makeup_store_custom_logo();
                                    }

                                    // Display sticky header logo if enabled
                                    if ( get_theme_mod( 'pedicure_makeup_store_enable_logo_stickyheader', false ) ) {
                                        $pedicure_makeup_store_alt_logo = esc_url( get_theme_mod( 'pedicure_makeup_store_logo_stickyheader' ) );
                                        if ( ! empty( $pedicure_makeup_store_alt_logo ) ) {
                                            ?>
                                            <a id="logo-alt" class="logo-alt" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <img src="<?php echo esc_url( $pedicure_makeup_store_alt_logo ); ?>" alt="<?php esc_attr_e( 'logo', 'pedicure-makeup-store' ); ?>">
                                            </a>
                                            <?php
                                        }
                                    }

                                    // Site title and tagline settings
                                    $pedicure_makeup_store_show_title   = get_theme_mod( 'pedicure_makeup_store_display_site_title', true );
                                    $pedicure_makeup_store_show_tagline = get_theme_mod( 'pedicure_makeup_store_display_site_tagline', false );
                                    $pedicure_makeup_store_header_class = $pedicure_makeup_store_show_title ? 'site-title' : 'screen-reader-text';

                                    // Display site title
                                    if ( $pedicure_makeup_store_show_title && get_bloginfo( 'name' ) ) {
                                        if ( is_front_page() ) {
                                            ?>
                                            <h1 class="<?php echo esc_attr( $pedicure_makeup_store_header_class ); ?>">
                                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
                                            </h1>
                                            <?php
                                        } else {
                                            ?>
                                            <p class="<?php echo esc_attr( $pedicure_makeup_store_header_class ); ?>">
                                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
                                            </p>
                                            <?php
                                        }
                                    }

                                    // Display tagline
                                    if ( $pedicure_makeup_store_show_tagline ) {
                                        $pedicure_makeup_store_description = get_bloginfo( 'description', 'display' );
                                        if ( $pedicure_makeup_store_description || is_customize_preview() ) {
                                            ?>
                                            <p class="site-description"><?php echo esc_html( $pedicure_makeup_store_description ); ?></p>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-8 col-12 align-self-center">
                            <div class="topbr-search-box">
                                <form method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
                                    <div class="search-field-wrapper"> 
                                        <?php if (class_exists('woocommerce')) { ?>
                                            <span>            
                                                <select name="product_cat" id="product_cat" class="search-category-dropdown">
                                                    <option value=""><?php esc_html_e('All Categories', 'pedicure-makeup-store'); ?></option>
                                                    <?php 
                                                    $categories = get_terms(array(
                                                        'taxonomy' => 'product_cat',
                                                        'hide_empty' => true,
                                                    ));

                                                    if (!is_wp_error($categories) && !empty($categories)) {
                                                        foreach ($categories as $category) {
                                                            if (is_object($category) && isset($category->slug)) {
                                                                echo '<option value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </span>
                                        <?php } ?>           
                                        <span>
                                            <input type="search" class="search-field px-3" placeholder="<?php echo esc_attr__('Search...', 'pedicure-makeup-store'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                            <input type="hidden" name="post_type" value="product" />
                                        </span>
                                        <span>            
                                            <button type="submit" value="<?php echo esc_attr__('Search', 'pedicure-makeup-store'); ?>" class="search-submit">
                                                <i class="bi bi-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-12 align-self-center text-lg-start text-center text-md-start">
                            <?php $pedicure_makeup_store_header_phone_number = get_theme_mod('pedicure_makeup_store_header_phone_number', '' );
                                $pedicure_makeup_store_header_phone_head = get_theme_mod('pedicure_makeup_store_header_phone_head', '' );
                            if ( ! empty( $pedicure_makeup_store_header_phone_number ) ) { ?>
                                <div class="row call-detail mb-3 mb-lg-0 mb-md-0">
                                    <div class="col-lg-3 col-md-3 col-4 r8-call-icn align-self-center text-end pe-3">
                                        <i class="bi bi-telephone-fill call-icn"></i>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-8 align-self-center r8-call">
                                        <p class="hd-call mb-1">
                                        <?php echo esc_html( $pedicure_makeup_store_header_phone_head ); ?></p>
                                        <p class="hd-call-no mb-0">
                                        <?php echo esc_html( $pedicure_makeup_store_header_phone_number ); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-12 align-self-center text-lg-end text-center text-md-end hdr-icns">
                            <span class="tbr2-account">
                                <?php if(class_exists('woocommerce')){ ?>
                                    <?php if ( is_user_logged_in() ) { ?>
                                        <a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','pedicure-makeup-store'); ?>"><i class="bi bi-person"></i></a>
                                    <?php }
                                    else { ?>
                                        <a class="my-account" href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','pedicure-makeup-store'); ?>"><?php esc_html_e( 'Login / Register','pedicure-makeup-store' );?></a>
                                    <?php } ?>
                                <?php }?>
                            </span>
                            <span class="wish-btn">
                                <?php if ( get_theme_mod('pedicure_makeup_store_topbar1_wishlist_url') != "" ) {?>
                                        <a href="<?php echo esc_url(get_theme_mod('pedicure_makeup_store_topbar1_wishlist_url')); ?>"><i class="bi bi-heart"></i></a>
                                <?php }?>
                            </span>
                            <span class="tbr2-cart pe-lg-3">
                                <?php pedicure_makeup_store_custom_woocommerce_cart_icon(); ?>
                            </span>
                        </div>
                    </div>
                </div>            
            </div>
         <?php endif; ?>
        </div>
        <div id="content-header">
            <div class="container">
                <div class="row py-2">
                    <div class="col-lg-5 col-md-1 col-12 align-self-center">
                        <div class="top-menu-wrapper">
                            <div class="navigation_header">
                                <div class="toggle-nav mobile-menu">
                                    <button onclick="pedicure_makeup_store_openNav()"><i class="bi bi-list"></i></button>
                                </div>
                                <div id="mySidenav" class="nav sidenav">
                                    <nav id="site-navigation" class="main-navigation navbar navbar-expand-xl" aria-label="<?php esc_attr_e( 'Top Menu', 'pedicure-makeup-store' ); ?>">
                                        <?php {
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'primary',
                                                        'container_class' => 'navi clearfix navbar-nav' ,
                                                        'menu_class'     => 'menu clearfix', 
                                                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                        'fallback_cb' => 'wp_page_menu',
                                                    )
                                                );
                                            } ?>
                                    </nav>
                                    <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="pedicure_makeup_store_closeNav()"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-11 col-12 btn-detail">
                        <?php if ( get_theme_mod('pedicure_makeup_store_header_sell_button') != "" || get_theme_mod('pedicure_makeup_store_header_sell_button_url') != ""  ) {?>
                           <span class="main-header-btn me-3"><i class="bi bi-house-fill me-2"></i><a href="<?php echo esc_url(get_theme_mod('pedicure_makeup_store_header_sell_button_url')); ?>"><?php echo esc_html(get_theme_mod('pedicure_makeup_store_header_sell_button')); ?></a></span>
                        <?php }?>
                        <?php if ( get_theme_mod('pedicure_makeup_store_header_tracking_button') != "" || get_theme_mod('pedicure_makeup_store_header_tracking_button_url') != ""  ) {?>
                            <span class="main-header-btn me-3"><i class="bi bi-bag-fill me-2"></i><a href="<?php echo esc_url(get_theme_mod('pedicure_makeup_store_header_tracking_button_url')); ?>"><?php echo esc_html(get_theme_mod('pedicure_makeup_store_header_tracking_button')); ?></a></span>
                        <?php }?>
                        <?php if ( get_theme_mod('pedicure_makeup_store_header_recent_view_button') != "" || get_theme_mod('pedicure_makeup_store_header_recent_view_url') != ""  ) {?>
                            <span class="main-header-btn me-3"><a href="<?php echo esc_url(get_theme_mod('pedicure_makeup_store_header_recent_view_url')); ?>"><?php echo esc_html(get_theme_mod('pedicure_makeup_store_header_recent_view_button')); ?></a></span>
                        <?php }?>
                        <span>
                        <?php if(class_exists('WOOCS')){ ?>
                            <span class="currency">
                                <?php echo do_shortcode('[woocs]');?>
                            </span>
                        <?php }?>
                        </span>
                        <span class="text-center translate-btn">
                            <?php if(class_exists('GTranslate')){ ?>
                                <?php echo do_shortcode('[gtranslate]', 'pedicure-makeup-store');?>
                            <?php }?>
                        </span>
                    </div>
                </div>                
            </div>
        </div>
    </div>    
</header>

<div class="clearfix"></div>
<div id="content" class="elementor-menu-anchor"></div>

<div class="content-wrap">