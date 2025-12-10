<?php
	$wp_customize->get_setting( 'custom_logo' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogname' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_header_logo_max_height',
    array(
    'default' => esc_html('40'),
    'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_header_logo_max_height',
        array(
        'label' => esc_html__( 'Logo (image) max-height (px)', 'car-rental-wda' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('30'),
            'max' => esc_html('200'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_header_logo_mobile_max_height',
    array(
    'default' => esc_html('70'),
    'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_header_logo_mobile_max_height',
        array(
        'label' => esc_html__( 'Mobile Logo (image) max-height (px)', 'car-rental-wda' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('30'),
            'max' => esc_html('200'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting('wpdevart_car_rental_wda_header_logo_text_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_logo_text_color', esc_html('#e03100')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_logo_text_color', array(
        'label' => esc_html__('Text Logo color','car-rental-wda'),
        'section' => 'title_tagline',
        'settings' => 'wpdevart_car_rental_wda_header_logo_text_color'
    )));
    $wp_customize->add_setting('wpdevart_car_rental_wda_header_logo_gradient_type',array(
        'default'	=> esc_html('to right'),
        'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
    ));
    $wp_customize->add_control('wpdevart_car_rental_wda_header_logo_gradient_type',array(
            'label'	=> esc_html__('Text Logo gradient type','car-rental-wda'),
            'section'	=> 'title_tagline',
            'setting'	=> 'wpdevart_car_rental_wda_header_logo_gradient_type',
            'type' => 'select',
            'choices' => array(
                'to right' => esc_html__('To right','car-rental-wda'),
                'to left' => esc_html__('To left','car-rental-wda'),
                'to bottom' => esc_html__('To bottom','car-rental-wda'),
                'to top' => esc_html__('To top','car-rental-wda'),
                'to bottom right' => esc_html__('To bottom right','car-rental-wda'),
                'to bottom left' => esc_html__('To bottom left','car-rental-wda'),
                'to top right' => esc_html__('To top right','car-rental-wda'),
                'to top left' => esc_html__('To top left','car-rental-wda'),
                )
    ));	
    $wp_customize->add_setting('wpdevart_car_rental_wda_header_logo_gradient_color',array(
        'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_logo_gradient_color', esc_html('#e03100')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_logo_gradient_color', array(
        'label' => esc_html__('Text Logo gradient color','car-rental-wda'),
        'section' => 'title_tagline',
        'settings' => 'wpdevart_car_rental_wda_header_logo_gradient_color'
    )));