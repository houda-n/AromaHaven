<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_general_setting_register' ) ) :
function pedicure_makeup_store_customizer_general_setting_register( $wp_customize ) {
 
 	$wp_customize->add_section(
        'pedicure_makeup_store_general_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'General Settings', 'pedicure-makeup-store' )
        )
    );

 	// Add general Panel for preloader and scrolltop
    $wp_customize->add_panel(
        'pedicure_makeup_store_general_settings_panel',
        array(
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'General Settings', 'pedicure-makeup-store' ),
        )
    );

    // Section preloader
    $wp_customize->add_section(
        'pedicure_makeup_store_prelodr_settings',
        array(
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Preloader', 'pedicure-makeup-store' ),
            'panel'         => 'pedicure_makeup_store_general_settings_panel',
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_preloader_settings', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_preloader_settings', 
		array(
		    'label'       => esc_html__( 'Preloader Settings', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_prelodr_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_preloader_settings',
		) 
	));

	// Add an option to enable the preloader
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_preloader', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_preloader', 
		array(
		    'label'       => esc_html__( 'Show Preloader', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_prelodr_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_preloader',
		) 
	));


    // Section Body Typography
    $wp_customize->add_section(
        'pedicure_makeup_store_scrol_settings',
        array(
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Scroll Top', 'pedicure-makeup-store' ),
            'panel'         => 'pedicure_makeup_store_general_settings_panel',
        )
    );


	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_scroll_top_settings', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_scroll_top_settings', 
		array(
		    'label'       => esc_html__( 'Scroll Top Settings', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_scrol_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_scroll_top_settings',
		) 
	));

	// Add an option to enable the scrolltop
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_scrolltop', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_scrolltop', 
		array(
		    'label'       => esc_html__( 'Show Scroll Top', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_scrol_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_scrolltop',
		) 
	));

	 $wp_customize->add_section(
        'pedicure_makeup_store_button_settings',
        array(
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Buttons', 'pedicure-makeup-store' ),
            'panel'         => 'pedicure_makeup_store_general_settings_panel',
        )
    );

	 // Border Radius Setting
	$wp_customize->add_setting(
	    'pedicure_makeup_store_button_border_radius',
	    array(
	        'default'           => '0px',
	        'sanitize_callback' => 'sanitize_text_field',
	        'transport'         => 'refresh',
	    )
	);

	$wp_customize->add_control(
	    'pedicure_makeup_store_button_border_radius',
	    array(
	        'type'     => 'text',
	        'label'    => esc_html__( 'Button Border Radius (e.g. 4px, 50%)', 'pedicure-makeup-store' ),
	        'section'  => 'pedicure_makeup_store_button_settings',
	    )
	);

	// Button Padding Setting
	$wp_customize->add_setting(
	    'pedicure_makeup_store_button_padding',
	    array(
	        'default'           => '10px 20px',
	        'sanitize_callback' => 'sanitize_text_field',
	        'transport'         => 'refresh',
	    )
	);

	$wp_customize->add_control(
	    'pedicure_makeup_store_button_padding',
	    array(
	        'type'     => 'text',
	        'label'    => esc_html__( 'Button Padding (e.g. 10px 20px)', 'pedicure-makeup-store' ),
	        'section'  => 'pedicure_makeup_store_button_settings',
	    )
	);


}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_general_setting_register' );