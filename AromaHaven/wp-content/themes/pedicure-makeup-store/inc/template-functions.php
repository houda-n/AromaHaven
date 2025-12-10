<?php
/**
 * @package Pedicure Makeup Store
 */


/**
 * Footer
 */
if (! function_exists( 'pedicure_makeup_store_footer_copyrights' ) ):
    function pedicure_makeup_store_footer_copyrights() {
        ?>
            <div class="row">
                <div class="copyrights">
                    <p>
                        <?php
                            if("" != esc_html(get_theme_mod( 'pedicure_makeup_store_footer_copyright_text'))) :
                                echo esc_html(get_theme_mod( 'pedicure_makeup_store_footer_copyright_text'));
                                if(get_theme_mod('pedicure_makeup_store_en_footer_credits',true)) :
                                    ?> 
                                    <span class="copyrg-link"><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_AUT); ?>" target="_blank" rel="nofollow noopener"><?php esc_html_e(' | Pedicure Makeup Store Theme','pedicure-makeup-store') ?></a><?php esc_html_e(' by Legacy Themes','pedicure-makeup-store') ?></span>
                                    <?php   
                                endif;
                            else :
                                echo date_i18n(
                                    /* translators: Copyright date format, see https://secure.php.net/date */
                                    _x( 'Y', 'copyright date format', 'pedicure-makeup-store' )
                                );
                                ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                                    <span class="copyrg-link"><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_AUT); ?>" target="_blank" rel="nofollow noopener"><?php esc_html_e(' | Pedicure Makeup Store Theme','pedicure-makeup-store') ?></a><?php esc_html_e(' by Legacy Themes','pedicure-makeup-store') ?></span>
                                <?php
                            endif;
                        ?>
                    </p>
                </div>
            </div>
        <?php    
    }
endif;
add_action( 'pedicure_makeup_store_action_footer', 'pedicure_makeup_store_footer_copyrights' );

/**
 * Page Title Settings
 */
if ( ! function_exists( 'pedicure_makeup_store_show_page_title' ) ) :
    function pedicure_makeup_store_show_page_title() {
        if ( ! is_front_page() ) {
            ?>
            <div class="page-title"> 
                <div class="content-section img-overlay">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="section-title"> 
                                    <?php
                                    // WooCommerce Pages
                                    if ( function_exists( 'is_shop' ) && is_shop() ) {
                                        // Shop Page
                                        echo '<h1 class="main-title">' . esc_html__( 'Shop Page', 'pedicure-makeup-store' ) . '</h1>';

                                    } elseif ( function_exists( 'is_product' ) && is_product() ) {
                                        // Single Product Page
                                        echo '<h1 class="main-title">' . esc_html__( 'Single Product Page', 'pedicure-makeup-store' ) . '</h1>';

                                    } elseif ( function_exists( 'is_checkout' ) && is_checkout() ) {
                                        // Checkout Page
                                        echo '<h1 class="main-title">' . esc_html__( 'Checkout', 'pedicure-makeup-store' ) . '</h1>';

                                    } elseif ( function_exists( 'is_account_page' ) && is_account_page() ) {
                                        // My Account Page
                                        echo '<h1 class="main-title">' . esc_html__( 'My Account', 'pedicure-makeup-store' ) . '</h1>';

                                    } elseif ( is_home() ) {
                                        // Blog Index Page
                                        echo '<h1 class="main-title">' . esc_html__( 'Blog Page', 'pedicure-makeup-store' ) . '</h1>';

                                    } elseif ( is_singular( 'post' ) ) {
                                        // Single Blog Post
                                        echo '<h1 class="main-title">' . get_the_title() . '</h1>';

                                    } elseif ( is_category() ) {
                                        echo '<h1 class="main-title">' . single_cat_title( '', false ) . '</h1>';

                                    } elseif ( is_tag() ) {
                                        echo '<h1 class="main-title">' . single_tag_title( '', false ) . '</h1>';

                                    } elseif ( is_author() ) {
                                        echo '<h1 class="main-title">' . get_the_author() . '</h1>';

                                    } elseif ( is_archive() ) {
                                        echo '<h1 class="main-title">' . get_the_archive_title() . '</h1>';

                                    } elseif ( is_search() ) {
                                        echo '<h1 class="main-title">' . esc_html__( 'Search Results', 'pedicure-makeup-store' ) . '</h1>';

                                    } elseif ( is_404() ) {
                                        echo '<h1 class="main-title">' . esc_html__( 'Page Not Found', 'pedicure-makeup-store' ) . '</h1>';

                                    } else {
                                        // Default for all other pages
                                        echo '<h1 class="main-title">' . get_the_title() . '</h1>';
                                    }
                                    ?>
                                </div>                      
                            </div>
                        </div>
                    </div>  
                </div>
            </div>  <!-- End page-title --> 
            <?php
        }
    }
endif;

// Register page title action globally
add_action( 'pedicure_makeup_store_get_page_title', 'pedicure_makeup_store_show_page_title' );


/**
 * Home Banner Section
 */
if (! function_exists( 'pedicure_makeup_store_home_banner_section' ) ):
    function pedicure_makeup_store_home_banner_section() {
        ?>
        <?php if (get_theme_mod('pedicure_makeup_store_activities_section_setting', false) != '') { ?>
          <section class="featured pb-5 pt-4">
            <div class="container">
              <div class="heading text-center mb-4">
                <?php if(get_theme_mod('pedicure_makeup_store_popular_heading') != ''){ ?>
                  <h4 class="main-heading mb-3 mt-3"><?php echo esc_html(get_theme_mod('pedicure_makeup_store_popular_heading')); ?></h4>
                <?php }?>
              </div>
              <div class="owl-carousel m-0 ser-box">
                <?php if (class_exists('woocommerce')) { ?>
                  <?php
                    $pedicure_makeup_store_prod_categories = get_terms('product_cat', array(
                      'orderby'    => 'name',
                      'order'      => 'ASC',
                      'hide_empty' => 0
                    ));
                    foreach ($pedicure_makeup_store_prod_categories as $pedicure_makeup_store_prod_cat) :
                    $pedicure_makeup_store_cat_thumb_id = get_term_meta($pedicure_makeup_store_prod_cat->term_id, 'thumbnail_id', true);
                    $pedicure_makeup_store_cat_thumb_url = $pedicure_makeup_store_cat_thumb_id ? wp_get_attachment_thumb_url($pedicure_makeup_store_cat_thumb_id) : ''; 
                    $pedicure_makeup_store_term_link = get_term_link($pedicure_makeup_store_prod_cat, 'product_cat');
                  ?>
                  <div class="service-box">
                      <div class="feature-box m-0">
                        <div class="ser-content">
                          <div class="service-icon">
                            <?php if ($pedicure_makeup_store_cat_thumb_url) : ?>
                              <img src="<?php echo esc_url($pedicure_makeup_store_cat_thumb_url); ?>" alt="<?php echo esc_html($pedicure_makeup_store_prod_cat->name); ?>" />
                            <?php else : ?>
                              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/banner.png"/>
                            <?php endif; ?>
                          </div>
                          <h4 class="mb-0 mt-3"><a href="<?php echo esc_url($pedicure_makeup_store_term_link); ?>"><?php echo esc_html($pedicure_makeup_store_prod_cat->name); ?></a></h4>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; wp_reset_query(); ?>
                <?php } ?>  
              </div>
            </div>
          </section>
        <?php }?>
        <?php
    }
endif;
add_action( 'pedicure_makeup_store_action_home_banner', 'pedicure_makeup_store_home_banner_section' );


/**
 * Home product Section
 */
if (! function_exists( 'pedicure_makeup_store_home_product_section' ) ):
    function pedicure_makeup_store_home_product_section() {
        ?>
        <section id="product-wrap" class="py-5">
            <div class="container">
                <div class="inner-wrap px-lg-5 px-md-5">
                    <div class="product-head text-center">
                        <?php
                            $pedicure_makeup_store_product_main_heading = get_theme_mod( 'pedicure_makeup_store_product_main_heading', '' );
                            if ( ! empty( $pedicure_makeup_store_product_main_heading ) ) { ?>
                            <h3 class="mb-0"><?php echo esc_html( $pedicure_makeup_store_product_main_heading ); ?></h3>
                        <?php } ?>
                        <?php
                            $pedicure_makeup_store_product_main_content = get_theme_mod( 'pedicure_makeup_store_product_main_content', '' );
                            if ( ! empty( $pedicure_makeup_store_product_main_content ) ) { ?>
                            <p class="py-2"><?php echo esc_html( $pedicure_makeup_store_product_main_content ); ?></p>
                        <?php } ?>
                    </div>
                    <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                        <div class="product-box">
                            <div class="owl-carousel">    
                                <?php
                                    $pedicure_makeup_store_selected_category = get_theme_mod('pedicure_makeup_store_product_category', '');
                                    
                                    $pedicure_makeup_store_product_count = get_theme_mod('pedicure_makeup_store_product_count', 4);
                                    $args = array(
                                        'post_type'      => 'product',
                                        'posts_per_page' => $pedicure_makeup_store_product_count,
                                        'order'          => 'ASC',
                                        'tax_query'      => !empty($pedicure_makeup_store_selected_category) ? array(
                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field'    => 'slug',
                                                'terms'    => $pedicure_makeup_store_selected_category,),) : '',
                                    );                                
                                    $loop = new WP_Query( $args );
                                    while ( $loop->have_posts() ) : $loop->the_post(); global $product;

                                    // Get the current post index to assign a dynamic class
                                    $pedicure_makeup_store_product_index = $loop->current_post + 1; // current_post is zero-based, so +1 to start from default-1
                                    
                                    // Generate the dynamic class
                                    $pedicure_makeup_store_different_class = 'default-' . $pedicure_makeup_store_product_index;

                                ?>                            
                                <div class="product-inn inner-project text-center p-2 mb-3 mt-2 mx-2 position-relative">
                                    <div class="product-thumb"><figure class="slider-image <?php echo esc_attr($pedicure_makeup_store_different_class); ?>">
                                        <?php 
                                            if ( has_post_thumbnail( $loop->post->ID ) ) {
                                                echo get_the_post_thumbnail( $loop->post->ID, '' );
                                            } else {
                                                echo '<img src="' . esc_url( wc_placeholder_img_src() ) . '" />';
                                            }
                                        ?></figure>
                                    </div>
                                    <h3 class="product-text mb-0 pt-1">
                                        <a href="<?php echo esc_url( get_permalink( $loop->post->ID ) ); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <span class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?> price-prod"><?php echo $product->get_price_html(); ?></span>
                                </div>   
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                    <div class="cart-container">
                        <div class="row cart-space">
                            <?php 
                            $pedicure_makeup_store_card = get_theme_mod('pedicure_makeup_store_card_number',3);
                            for ($i = 1; $i <= $pedicure_makeup_store_card; $i++) {
                                // Get all necessary values
                                $pedicure_makeup_store_main_heading = get_theme_mod('pedicure_makeup_store_card_main_heading' . $i);
                                $pedicure_makeup_store_sub_heading = get_theme_mod('pedicure_makeup_store_card_sub_heading' . $i);
                                $pedicure_makeup_store_button_text = get_theme_mod('pedicure_makeup_store_card_button_text' . $i);
                                $pedicure_makeup_store_button_url = get_theme_mod('pedicure_makeup_store_card_button_url' . $i);
                                $pedicure_makeup_store_product_image = get_theme_mod('pedicure_makeup_store_card_products_image' . $i);
                                if (!empty($pedicure_makeup_store_main_heading) || !empty($pedicure_makeup_store_sub_heading) || !empty($pedicure_makeup_store_button_text) || !empty($pedicure_makeup_store_product_image)) { ?>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-12 mt-5 product-card">
                                    <div class="row product-pad">
                                        <div class="col-xl-5 col-lg-12 col-md-6 col-12 align-items-center">
                                            <div class="text-side mt-md-4">
                                                <div class="left">
                                                    <?php if (!empty($pedicure_makeup_store_main_heading)) : ?>
                                                        <h2 class="main-head mb-0"><?php echo esc_html($pedicure_makeup_store_main_heading); ?></h2>
                                                    <?php endif; ?>

                                                    <?php if (!empty($pedicure_makeup_store_sub_heading)) : ?>
                                                        <h6 class="small-head"><?php echo esc_html($pedicure_makeup_store_sub_heading); ?></h6>
                                                    <?php endif; ?>

                                                    <?php if (!empty($pedicure_makeup_store_button_text) && !empty($pedicure_makeup_store_button_url)) : ?>
                                                        <div class="shop-btn">
                                                            <a href="<?php echo esc_url($pedicure_makeup_store_button_url); ?>">
                                                                <?php echo esc_html($pedicure_makeup_store_button_text); ?>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if (!empty($pedicure_makeup_store_product_image)) : ?>
                                            <div class="col-xl-7 col-lg-12 col-md-6 col-sm-12 col-12 d-flex align-items-center justify-content-center">
                                                <img src="<?php echo esc_url($pedicure_makeup_store_product_image); ?>" class="img-fluid">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php 
                                }
                            }
                            ?>
                        </div>
                    </div>
            </div>
        </section>
        <?php    
    }
endif;
add_action( 'pedicure_makeup_store_action_home_product', 'pedicure_makeup_store_home_product_section' );

/**
 * Home page another adding Section
 */
if (! function_exists( 'pedicure_makeup_store_home_extra_section' ) ):
    function pedicure_makeup_store_home_extra_section() {
        ?>
        <div id="custom-home-extra-content" class="py-3">
            <div class="container">
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            </div>
        </div>
        <?php    
    }
endif;
add_action( 'pedicure_makeup_store_action_home_extra', 'pedicure_makeup_store_home_extra_section' );