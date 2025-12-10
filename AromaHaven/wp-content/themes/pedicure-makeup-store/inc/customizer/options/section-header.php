<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_header_register' ) ) :
function pedicure_makeup_store_customizer_header_register( $wp_customize ) {

    $wp_customize->add_section(
        'pedicure_makeup_store_home_header_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Header Settings', 'pedicure-makeup-store' )
        )
    );

    // topbar buttons

    $wp_customize->add_setting(
        'pedicure_makeup_store_shipping_text',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_shipping_text',
        array(
            'label'           => sprintf( esc_html__( 'Shipping Text', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_shipping_text' ,
            'type'            => 'text',
        )
    );

    $wp_customize->add_setting('pedicure_makeup_store_topbar_button_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_topbar_button_text',array(
        'label' => esc_html__('Shop Now Text','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_topbar_button_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_tpobar_button_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_tpobar_button_url',array(
        'label' => esc_html__('Sell Button url','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_tpobar_button_url',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_topbar1_wishlist_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_topbar1_wishlist_url',array(
        'label' => esc_html__('Wishlist Url','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_topbar1_wishlist_url',
        'type'  => 'url'
    ));

    // Title label
    $wp_customize->add_setting( 
        'pedicure_makeup_store_label_header_settings_title', 
        array(
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_header_settings_title', 
        array(
            'label'       => esc_html__( 'Tobar Buttons', 'pedicure-makeup-store' ),
            'section' => 'pedicure_makeup_store_home_header_settings',
            'type'        => 'pedicure-makeup-store-title',
            'settings'    => 'pedicure_makeup_store_label_header_settings_title',
        ) 
    ));


    $wp_customize->add_setting('pedicure_makeup_store_header_sell_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_header_sell_button',array(
        'label' => esc_html__('Sell Button Text','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_header_sell_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_header_sell_button_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_header_sell_button_url',array(
        'label' => esc_html__('Sell Button url','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_header_sell_button_url',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_header_tracking_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_header_tracking_button',array(
        'label' => esc_html__('Tracking Button Text','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_header_tracking_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_header_tracking_button_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_header_tracking_button_url',array(
        'label' => esc_html__('Tracking Button url','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_header_tracking_button_url',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_header_recent_view_button',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_header_recent_view_button',array(
        'label' => esc_html__('Viewed Button Text','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_header_recent_view_button',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('pedicure_makeup_store_header_recent_view_url',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('pedicure_makeup_store_header_recent_view_url',array(
        'label' => esc_html__('Viewed Button url','pedicure-makeup-store'),
        'section' => 'pedicure_makeup_store_home_header_settings',
        'setting' => 'pedicure_makeup_store_header_recent_view_url',
        'type'  => 'text'
    ));

    
    // Title label
    $wp_customize->add_setting( 
        'pedicure_makeup_store_label_social_meida_settings_title', 
        array(
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_social_meida_settings_title', 
        array(
            'label'       => esc_html__( 'Social Media Links', 'pedicure-makeup-store' ),
            'section' => 'pedicure_makeup_store_home_header_settings',
            'type'        => 'pedicure-makeup-store-title',
            'settings'    => 'pedicure_makeup_store_label_social_meida_settings_title',
        ) 
    ));

    // Facebook Link
    $wp_customize->add_setting(
        'pedicure_makeup_store_social_media1_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_social_media1_heading',
        array(
            'label'           => sprintf( esc_html__( 'Facebook Link', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_social_media1_heading' ,
            'type'            => 'url',
        )
    );

    // Instagram Link
    $wp_customize->add_setting(
        'pedicure_makeup_store_social_media2_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_social_media2_heading',
        array(
            'label'           => sprintf( esc_html__( 'Instagram Link', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_social_media2_heading' ,
            'type'            => 'url',
        )
    );

    // Twitter Link
    $wp_customize->add_setting(
        'pedicure_makeup_store_social_media3_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_social_media3_heading',
        array(
            'label'           => sprintf( esc_html__( 'Twitter Link', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_social_media3_heading' ,
            'type'            => 'url',
        )
    );

    // Youtube Link
    $wp_customize->add_setting(
        'pedicure_makeup_store_social_media4_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_social_media4_heading',
        array(
            'label'           => sprintf( esc_html__( 'Youtube Link', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_social_media4_heading' ,
            'type'            => 'url',
        )
    );

    // Pinterest Link
    $wp_customize->add_setting(
        'pedicure_makeup_store_social_media5_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_social_media5_heading',
        array(
            'label'           => sprintf( esc_html__( 'Pinterest Link', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_social_media5_heading' ,
            'type'            => 'url',
        )
    );

    // Linkedin Link
    $wp_customize->add_setting(
        'pedicure_makeup_store_social_media6_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_social_media6_heading',
        array(
            'label'           => sprintf( esc_html__( 'Linkedin Link', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_social_media6_heading' ,
            'type'            => 'url',
        )
    );


    // Title label
    $wp_customize->add_setting( 
        'pedicure_makeup_store_label_header_settings_title', 
        array(
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_header_settings_title', 
        array(
            'label'       => esc_html__( 'Phone Number', 'pedicure-makeup-store' ),
            'section' => 'pedicure_makeup_store_home_header_settings',
            'type'        => 'pedicure-makeup-store-title',
            'settings'    => 'pedicure_makeup_store_label_header_settings_title',
        ) 
    ));

    $wp_customize->add_setting(
        'pedicure_makeup_store_header_phone_head',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_header_phone_head',
        array(
            'label'           => sprintf( esc_html__( 'Calling Details Heading', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_header_phone_head' ,
            'type'            => 'text',
        )
    );

    // Phone Number
    $wp_customize->add_setting(
        'pedicure_makeup_store_header_phone_number',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_header_phone_number',
        array(
            'label'           => sprintf( esc_html__( 'Phone Number', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_header_settings',
            'settings'        => 'pedicure_makeup_store_header_phone_number' ,
            'type'            => 'text',
        )
    );
}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_header_register' );