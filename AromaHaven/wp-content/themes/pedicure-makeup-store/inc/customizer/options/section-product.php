<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_home_product_register' ) ) :
function pedicure_makeup_store_customizer_home_product_register( $wp_customize ) {

    $wp_customize->add_section(
        'pedicure_makeup_store_home_product_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Product Settings', 'pedicure-makeup-store' )
        )
    );

    // Title label
    $wp_customize->add_setting( 
        'pedicure_makeup_store_label_product_settings_title', 
        array(
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_product_settings_title', 
        array(
            'label'       => esc_html__( 'Product Settings', 'pedicure-makeup-store' ),
            'section'     => 'pedicure_makeup_store_home_product_settings',
            'type'        => 'pedicure-makeup-store-title',
            'settings'    => 'pedicure_makeup_store_label_product_settings_title',
        ) 
    ));


$wp_customize->add_setting(
    'pedicure_makeup_store_product_main_heading',
    array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'pedicure_makeup_store_product_main_heading',
    array(
        'label'    => esc_html__( 'Product Heading', 'pedicure-makeup-store' ),
        'section'  => 'pedicure_makeup_store_home_product_settings',
        'settings' => 'pedicure_makeup_store_product_main_heading',
        'type'     => 'text',
    )
);

$wp_customize->add_setting(
    'pedicure_makeup_store_product_main_content',
    array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'pedicure_makeup_store_product_main_content',
    array(
        'label'    => esc_html__( 'Product Sub Heading', 'pedicure-makeup-store' ),
        'section'  => 'pedicure_makeup_store_home_product_settings',
        'settings' => 'pedicure_makeup_store_product_main_content',
        'type'     => 'text',
    )
);

// Get all product categories to populate the dropdown
$args = array(
    'taxonomy'   => 'product_cat',
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => false,
);

$categories = get_terms( $args );
$cats = array();

if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
    foreach ( $categories as $category ) {
        $cats[ $category->slug ] = $category->name;
    }
}

$wp_customize->add_setting(
    'pedicure_makeup_store_product_category',
    array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'pedicure_makeup_store_product_category',
    array(
        'label'    => esc_html__( 'Select Product Category', 'pedicure-makeup-store' ),
        'section'  => 'pedicure_makeup_store_home_product_settings',
        'settings' => 'pedicure_makeup_store_product_category',
        'type'     => 'select',
        'choices'  => $cats,
    )
);

$wp_customize->add_setting( 'pedicure_makeup_store_product_count', array(
    'default'           => 4,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'pedicure_makeup_store_product_count', array(
    'label'       => esc_html__( 'Number of Products to Display', 'pedicure-makeup-store' ),
    'section'     => 'pedicure_makeup_store_home_product_settings',
    'type'        => 'number',
    'input_attrs' => array(
        'min' => 1,
        'max' => 8,
    ),
) );

$wp_customize->add_section(
    'pedicure_makeup_store_home_collection_settings',
    array (
        'priority'      => 25,
        'capability'    => 'edit_theme_options',
        'title'         => esc_html__( 'Featured Collections Settings', 'pedicure-makeup-store' )
    )
);

// Number of Cards
$wp_customize->add_setting( 'pedicure_makeup_store_card_number', array(
    'default'           => 0,
    'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( 'pedicure_makeup_store_card_number', array(
    'label'       => esc_html__( 'Number of Product Cards', 'pedicure-makeup-store' ),
    'section'     => 'pedicure_makeup_store_home_collection_settings',
    'type'        => 'number',
    'input_attrs' => array(
        'min' => 1,
        'max' => 3,
    ),
) );

// Add fields for each card
$pedicure_makeup_store_card_count = get_theme_mod( 'pedicure_makeup_store_card_number', );
for ( $i = 1; $i <= $pedicure_makeup_store_card_count; $i++ ) {

    // Main Heading
    $wp_customize->add_setting( 'pedicure_makeup_store_card_main_heading' . $i, array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'pedicure_makeup_store_card_main_heading' . $i, array(
        'label'   => sprintf( esc_html__( 'Card %d Main Heading', 'pedicure-makeup-store' ), $i ),
        'section' => 'pedicure_makeup_store_home_collection_settings',
        'type'    => 'text',
    ) );

    // Sub Heading
    $wp_customize->add_setting( 'pedicure_makeup_store_card_sub_heading' . $i, array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'pedicure_makeup_store_card_sub_heading' . $i, array(
        'label'   => sprintf( esc_html__( 'Card %d Sub Heading', 'pedicure-makeup-store' ), $i ),
        'section' => 'pedicure_makeup_store_home_collection_settings',
        'type'    => 'text',
    ) );

    // Button Text
    $wp_customize->add_setting( 'pedicure_makeup_store_card_button_text' . $i, array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control( 'pedicure_makeup_store_card_button_text' . $i, array(
        'label'   => sprintf( esc_html__( 'Card %d Button Text', 'pedicure-makeup-store' ), $i ),
        'section' => 'pedicure_makeup_store_home_collection_settings',
        'type'    => 'text',
    ) );

    // Button URL
    $wp_customize->add_setting( 'pedicure_makeup_store_card_button_url' . $i, array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( 'pedicure_makeup_store_card_button_url' . $i, array(
        'label'   => sprintf( esc_html__( 'Card %d Button URL', 'pedicure-makeup-store' ), $i ),
        'section' => 'pedicure_makeup_store_home_collection_settings',
        'type'    => 'url',
    ) );

    // Image Upload
    $wp_customize->add_setting( 'pedicure_makeup_store_card_products_image' . $i, array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pedicure_makeup_store_card_products_image' . $i, array(
        'label'   => sprintf( esc_html__( 'Card %d Product Image', 'pedicure-makeup-store' ), $i ),
        'section' => 'pedicure_makeup_store_home_collection_settings',
    ) ) );
}
}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_home_product_register' );