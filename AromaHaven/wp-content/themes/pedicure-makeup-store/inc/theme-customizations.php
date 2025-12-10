<?php
// Enqueue theme styles and custom inline CSS
function pedicure_makeup_store_enqueue_styles() {
    wp_enqueue_style('pedicure-makeup-store-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pedicure_makeup_store_enqueue_styles');

// custom header
    add_theme_support('custom-header', array(
            'width'                  => 1920, 
            'height'                 => 400,  
            'flex-height'            => true,
            'flex-width'             => true,
            'header-text'            => true, // Enable or disable header text
            'default-text-color'     => '000000', // Default header text color
            'wp-head-callback'       => 'pedicure_makeup_store_header_style',
        ) );

// custom-background
    add_theme_support( 'custom-background', array(
          'default-color' => 'ffffff',
        ));

// Style the header
function pedicure_makeup_store_header_style() {
    $pedicure_makeup_store_header_image = get_header_image();    
    $pedicure_makeup_store_header_text_color = get_header_textcolor();
   
     if (get_theme_support('custom-header', 'default-text-color') !== $pedicure_makeup_store_header_text_color || !empty($pedicure_makeup_store_header_image)) {
            ?>
        <style type="text/css" id="entr-header-css">
            <?php
            // Has a Custom Header been added?
            if (!empty($pedicure_makeup_store_header_image)) :
                ?>
                 #custom-header {
                    background-image: url(<?php header_image(); ?>);
                    background-repeat: no-repeat;
                    background-position: 50% 50%;
                    -webkit-background-size: cover;
                    -moz-background-size:    cover;
                    -o-background-size:      cover;
                    background-size:         cover;
                }
            <?php endif; ?> 
            <?php
                if ('blank' === $pedicure_makeup_store_header_text_color) :
                ?>
                    .site-title a,.site-description {
                        color: #<?php echo esc_attr( $pedicure_makeup_store_header_text_color ); ?>;
                    }
                <?php elseif ('' !== $pedicure_makeup_store_header_text_color) : ?>
                    .site-title a,.site-description {
                        color: #<?php echo esc_attr($pedicure_makeup_store_header_text_color); ?>;
                    }            
                <?php endif; ?>
        </style>
    <?php
        }
    }
// site-title-checkbox
// Remove "Display Site Title and Tagline" checkbox from Customizer
function pedicure_makeup_store_remove_header_text_display_checkbox( $wp_customize ) {
    $wp_customize->remove_control( 'display_header_text' ); // Removes the checkbox
}
add_action( 'customize_register', 'pedicure_makeup_store_remove_header_text_display_checkbox', 11 );

/**
* Custom logo
*/
function pedicure_makeup_store_logo_setup(){
    add_theme_support('custom-logo', array(
        'height' => 65,
        'width' => 350,
        'flex-height' => true,
        'flex-width' => true,
    ));
}
add_action('after_setup_theme', 'pedicure_makeup_store_logo_setup');

// logo-resizer
function pedicure_makeup_store_logo_dynamic_css() {
    $pedicure_makeup_store_logo_width = get_theme_mod( 'pedicure_makeup_store_logo_width', 150 );
    ?>
    <style type="text/css">
        .logo .custom-logo {
            max-width: <?php echo esc_attr( $pedicure_makeup_store_logo_width ); ?>px;
            height: auto;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'pedicure_makeup_store_logo_dynamic_css' );

// buttons
function pedicure_makeup_store_custom_button_styles() {
    $pedicure_makeup_store_radius = get_theme_mod( 'pedicure_makeup_store_button_border_radius', '0px' );
    $pedicure_makeup_store_padding = get_theme_mod( 'pedicure_makeup_store_button_padding', '10px 20px' );
    ?>
    <style type="text/css">
        .btn,
        .button,
        button,
        input[type="submit"],
        .wp-block-button__link,#blog-section .read-more a,.read-more a {
            border-radius: <?php echo esc_attr($pedicure_makeup_store_radius); ?>;
            padding: <?php echo esc_attr($pedicure_makeup_store_padding); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'pedicure_makeup_store_custom_button_styles' );

function pedicure_makeup_store_customize_fonts() {
    $pedicure_makeup_store_body_font = get_theme_mod('pedicure_makeup_store_body_font_family', 'Inter, sans-serif');
    $pedicure_makeup_store_heading_font = get_theme_mod('pedicure_makeup_store_heading_font_family', 'Elsie, sans-serif');

    // Extract Google font names (e.g., Roboto from "Roboto, sans-serif")
    $pedicure_makeup_store_body_font_name = trim(explode(',', $pedicure_makeup_store_body_font)[0]);
    $pedicure_makeup_store_heading_font_name = trim(explode(',', $pedicure_makeup_store_heading_font)[0]);

    // Generate Google Fonts URL
    $pedicure_makeup_store_google_font_url = 'https://fonts.googleapis.com/css2?family=' . urlencode($pedicure_makeup_store_body_font_name) . '&family=' . urlencode($pedicure_makeup_store_heading_font_name) . '&display=swap';

    // Enqueue fonts
    wp_enqueue_style('pedicure-makeup-store-fonts', $pedicure_makeup_store_google_font_url, array(), null);

    // Custom inline style for font application
    $custom_css = "
        body, p, span, label, div {
            font-family: {$pedicure_makeup_store_body_font};
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: {$pedicure_makeup_store_heading_font};
        }
    ";
    wp_add_inline_style('pedicure-makeup-store-fonts', $custom_css);
}
add_action('wp_enqueue_scripts', 'pedicure_makeup_store_customize_fonts');

// page title box
function pedicure_makeup_store_page_title_dynamic_styles() {
    $bg_type = get_theme_mod('pedicure_makeup_store_page_bg_radio', '');
    $bg_color = get_theme_mod('pedicure_makeup_store_page_bg_color', '');
    $bg_image = get_theme_mod('pedicure_makeup_store_page_bg_image', '');

    $pedicure_makeup_store_dynamic_css = '';

    if ($bg_type === 'image' && !empty($bg_image)) {
        $pedicure_makeup_store_dynamic_css .= '.page-title {';
        $pedicure_makeup_store_dynamic_css .= 'background-image: url("' . esc_url($bg_image) . '");';
        $pedicure_makeup_store_dynamic_css .= 'background-size: cover;';
        $pedicure_makeup_store_dynamic_css .= 'background-position: center;';
        $pedicure_makeup_store_dynamic_css .= '}';
    } elseif ($bg_type === 'color' && !empty($bg_color)) {
        $pedicure_makeup_store_dynamic_css .= '.page-title {';
        $pedicure_makeup_store_dynamic_css .= 'background-color: ' . esc_attr($bg_color) . ';';
        $pedicure_makeup_store_dynamic_css .= '}';
    }

    if (!empty($pedicure_makeup_store_dynamic_css)) {
        echo '<style type="text/css">' . $pedicure_makeup_store_dynamic_css . '</style>';
    }
}
add_action('wp_head', 'pedicure_makeup_store_page_title_dynamic_styles', 20);

/*---------------------------Global Color-------------------*/

function pedicure_makeup_store_global_color() {

    $css  = '';
    $alpha = get_theme_mod( 'pedicure_makeup_store_global_color1' );
    $beta  = get_theme_mod( 'pedicure_makeup_store_global_color2' );
    $gama  = get_theme_mod( 'pedicure_makeup_store_global_color3' );

    $root_vars = '';
    if ( $alpha ) {
        $root_vars .= '--alpha-color: ' . esc_attr( $alpha ) . ' !important;';
    }
    if ( $beta ) {
        $root_vars .= '--beta-color: ' . esc_attr( $beta ) . ' !important;';
    }
    if ( $gama ) {
        $root_vars .= '--gama-color: ' . esc_attr( $gama ) . ' !important;';
    }

    if ( $root_vars !== '' ) {
        $css .= ':root {' . $root_vars . '}';
    }

    if ( $css !== '' ) {
        // Replace these handles with your theme's main & WooCommerce stylesheet handles.
        wp_add_inline_style( 'pedicure-makeup-store-style', $css );
        wp_add_inline_style( 'pedicure-makeup-store-woocommerce-css', $css );
    }
}
add_action( 'wp_enqueue_scripts', 'pedicure_makeup_store_global_color', 20 );
