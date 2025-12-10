<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_page_register' ) ) :
function pedicure_makeup_store_customizer_page_register( $wp_customize ) {
 
 	$wp_customize->add_section(
        'pedicure_makeup_store_page_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Page Settings', 'pedicure-makeup-store' )
        )
    );

    // Info label
     $wp_customize->add_setting( 
        'pedicure_makeup_store_label_page_title_hide_settings', 
        array(
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_page_title_hide_settings', 
        array(
            'label'       => esc_html__( 'Hide Page Title', 'pedicure-makeup-store' ),
            'section'     => 'pedicure_makeup_store_page_settings',
            'type'        => 'pedicure-makeup-store-title',
            'settings'    => 'pedicure_makeup_store_label_page_title_hide_settings',
        ) 
    ));  

    // Hide page title section
    $wp_customize->add_setting(
        'pedicure_makeup_store_enable_page_title',
        array(
            'type' => 'theme_mod',
            'default'           => true,
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox'
        )
    );

    $wp_customize->add_control(
        new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_page_title', 
        array(
            'settings'      => 'pedicure_makeup_store_enable_page_title',
            'section'       => 'pedicure_makeup_store_page_settings',
            'type'          => 'pedicure-makeup-store-toggle',
            'label'         => esc_html__( 'Show Page Title Section:', 'pedicure-makeup-store' ),
            'description'   => '',           
        )
    ));

    // Info label
    $wp_customize->add_setting( 
        'pedicure_makeup_store_label_page_title_bg_settings', 
        array(
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_page_title_bg_settings', 
        array(
            'label'       => esc_html__( 'Page Title Background', 'pedicure-makeup-store' ),
            'section'     => 'pedicure_makeup_store_page_settings',
            'type'        => 'title',
            'settings'    => 'pedicure_makeup_store_label_page_title_bg_settings',
            'active_callback' => 'pedicure_makeup_store_page_title_enable',
        ) 
    ));

    // Background selection
    $wp_customize->add_setting(
        'pedicure_makeup_store_page_bg_radio',
        array(
            'type' => 'theme_mod',
            'default'           => 'color',
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_select'
        )
    );

    $wp_customize->add_control(
    	new Pedicure_Makeup_Store_Text_Radio_Control( $wp_customize, 'pedicure_makeup_store_page_bg_radio',
        array(
            'settings'      => 'pedicure_makeup_store_page_bg_radio',
            'section'       => 'pedicure_makeup_store_page_settings',
            'type'          => 'radio',
            'label'         => esc_html__( 'Choose Page Title Background Color or Background Image:', 'pedicure-makeup-store' ),
            'description'   => esc_html__('This setting will change the background of the page title area.', 'pedicure-makeup-store'),
            'choices' => array(
                            'color' => esc_html__('Background Color','pedicure-makeup-store'),
                            'image' => esc_html__('Background Image','pedicure-makeup-store'),
                            ),
            'active_callback' => 'pedicure_makeup_store_page_title_enable',
        )
    ));

    // Background color
    $wp_customize->add_setting(
        'pedicure_makeup_store_page_bg_color',
        array(
            'type' => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'pedicure_makeup_store_page_bg_color',
            array(
                'label'      => esc_html__( 'Select Background Color', 'pedicure-makeup-store' ),
                'description'   => esc_html__('This setting will add background color to the page title area if Background Color was selected above.', 'pedicure-makeup-store'),
                'section'    => 'pedicure_makeup_store_page_settings',
                'settings'   => 'pedicure_makeup_store_page_bg_color',
                'active_callback' => 'pedicure_makeup_store_page_title_color_enable',
            )
        )
    );

    // Background image
    $wp_customize->add_setting(
        'pedicure_makeup_store_page_bg_image',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'esc_url_raw'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'pedicure_makeup_store_page_bg_image',
            array(
                'label'       => esc_html__( 'Upload Background Image', 'pedicure-makeup-store' ),
                'description' => esc_html__('This setting will add a background image to the page title area if Background Image was selected above.', 'pedicure-makeup-store'),
                'section'     => 'pedicure_makeup_store_page_settings',
                'settings'    => 'pedicure_makeup_store_page_bg_image',
                'active_callback' => 'pedicure_makeup_store_page_title_image_enable',
            )
        )
    );
    
}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_page_register' );