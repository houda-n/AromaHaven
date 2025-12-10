<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_global_color_setting_register' ) ) :
function pedicure_makeup_store_customizer_global_color_setting_register( $wp_customize ) {
 
 	$wp_customize->add_section(
        'pedicure_makeup_store_global_color_settings',
        array (
            'priority'      => 40,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Global Color Settings', 'pedicure-makeup-store' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_theme_color_settings', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_theme_color_settings', 
		array(
		    'label'       => esc_html__( 'Global Color Settings', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_global_color_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_theme_color_settings',
		) 
	));

	$wp_customize->add_setting('pedicure_makeup_store_global_color1',
        array(
            'type' => 'theme_mod',
            'default'           => '#B90763',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'pedicure_makeup_store_global_color1',
            array(
                'label'      => esc_html__( 'Global Color1', 'pedicure-makeup-store' ),
                'section'    => 'pedicure_makeup_store_global_color_settings',
                'settings'   => 'pedicure_makeup_store_global_color1',
            )
        )
    ); 

    $wp_customize->add_setting('pedicure_makeup_store_global_color2',
        array(
            'type' => 'theme_mod',
            'default'           => '#f9c0c0',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'pedicure_makeup_store_global_color2',
            array(
                'label'      => esc_html__( 'Global Color2', 'pedicure-makeup-store' ),
                'section'    => 'pedicure_makeup_store_global_color_settings',
                'settings'   => 'pedicure_makeup_store_global_color2',
            )
        )
    );  

    $wp_customize->add_setting('pedicure_makeup_store_global_color3',
        array(
            'type' => 'theme_mod',
            'default'           => '#FF5894',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'pedicure_makeup_store_global_color3',
            array(
                'label'      => esc_html__( 'Global Color2', 'pedicure-makeup-store' ),
                'section'    => 'pedicure_makeup_store_global_color_settings',
                'settings'   => 'pedicure_makeup_store_global_color3',
            )
        )
    );    

}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_global_color_setting_register' );