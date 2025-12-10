<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_home_banner_register' ) ) :
function pedicure_makeup_store_customizer_home_banner_register( $wp_customize ) {
 	
 	$wp_customize->add_section(
        'pedicure_makeup_store_home_cat_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Popular Categories Settings', 'pedicure-makeup-store' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_banner_settings_title', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_banner_settings_title', 
		array(
		    'label'       => esc_html__( 'Popular Categories Settings', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_home_cat_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_banner_settings_title',
		) 
	));

    // Display Site Title
        $wp_customize->add_setting( 
            'pedicure_makeup_store_activities_section_setting', 
            array(
                'default'           => false,
                'type'              => 'theme_mod',
                'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
            ) 
        );
        $wp_customize->add_control( 
            new Pedicure_Makeup_Store_Toggle_Control( 
                $wp_customize, 
                'pedicure_makeup_store_activities_section_setting', 
                array(
                    'label'    => esc_html__( 'Enable Disable Categories', 'pedicure-makeup-store' ),
                    'section'  => 'pedicure_makeup_store_home_cat_settings',
                    'settings' => 'pedicure_makeup_store_activities_section_setting',
                ) 
            )
        );


    // Banner sm-hd
    $wp_customize->add_setting(
        'pedicure_makeup_store_popular_heading',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_popular_heading',
        array(
            'label'           => sprintf( esc_html__( 'Categories Heading', 'pedicure-makeup-store' ), ),
            'section'         => 'pedicure_makeup_store_home_cat_settings',
            'settings'        => 'pedicure_makeup_store_popular_heading' ,
            'type'            => 'text',
        )
    );


}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_home_banner_register' );