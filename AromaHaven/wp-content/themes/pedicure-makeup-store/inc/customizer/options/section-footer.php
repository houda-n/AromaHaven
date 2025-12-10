<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_footer_register' ) ) :
function pedicure_makeup_store_customizer_footer_register( $wp_customize ) {
 	
 	$wp_customize->add_section(
        'pedicure_makeup_store_footer_settings',
        array (
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Footer Settings', 'pedicure-makeup-store' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_footer_settings_title', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_footer_settings_title', 
		array(
		    'label'       => esc_html__( 'Footer Settings', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_footer_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_footer_settings_title',
		) 
	));

	// Copyright text
    $wp_customize->add_setting(
        'pedicure_makeup_store_footer_copyright_text',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_textarea_field'
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_footer_copyright_text',
        array(
            'settings'      => 'pedicure_makeup_store_footer_copyright_text',
            'section'       => 'pedicure_makeup_store_footer_settings',
            'type'          => 'textarea',
            'label'         => esc_html__( 'Footer Copyright Text', 'pedicure-makeup-store' )
        )
    );
}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_footer_register' );