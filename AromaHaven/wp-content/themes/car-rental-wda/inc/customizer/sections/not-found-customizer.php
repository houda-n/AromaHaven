<?php
    $wp_customize->add_section('wpdevart_car_rental_wda_not_found_section',array(
		'title'	=> esc_html__('404 Page','car-rental-wda'),					
		'priority'		=> 31
	));
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_page_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_not_found_page_bg_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_not_found_page_bg_color', array(
        'label' => esc_html__('404 Page background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_not_found_section',
        'settings' => 'wpdevart_car_rental_wda_not_found_page_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/wpdevart-default-404.png')),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wpdevart_car_rental_wda_not_found_image', array(
        'label' => esc_html__('404 page Image','car-rental-wda'),
		'description' => esc_html__( 'Recommended image size ~1080*550', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_not_found_section',
        'settings' => 'wpdevart_car_rental_wda_not_found_image',
        'button_labels' => array(
                    'select' =>  esc_html__('Select Image', 'car-rental-wda'),
                    'remove' =>  esc_html__('Remove Image', 'car-rental-wda'),
                    'change' =>  esc_html__('Change Image', 'car-rental-wda'),
                    )
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_page_title',array(
		'default'	=> esc_html('Oops! Page Not Found'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_car_rental_wda_not_found_page_title',
            array(
                'label'    => esc_html__('404 page title','car-rental-wda'),
                'section'  => 'wpdevart_car_rental_wda_not_found_section',
                'settings' => 'wpdevart_car_rental_wda_not_found_page_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_page_description',array(
		'default'	=> esc_html('The page or URL you are trying to access was not found. Use the homepage link below to navigate to the homepage. You can also use the search function.'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_not_found_page_description',array(
			'label'	=> esc_html__('404 page description','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_not_found_section',
			'setting'	=> 'wpdevart_car_rental_wda_not_found_page_description'
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_page_button_text',array(
		'default'	=> esc_html('Back to Homepage'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_not_found_page_button_text',array(
			'label'	=> esc_html__('404 page button text','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_not_found_section',
			'setting'	=> 'wpdevart_car_rental_wda_not_found_page_button_text'
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_page_button_url',array(
		'default'	=> esc_url(get_home_url()),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_not_found_page_button_url',array(
			'label'	=> esc_html__('404 page button URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_not_found_section',
			'setting'	=> 'wpdevart_car_rental_wda_not_found_page_button_url'
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_not_found_page_button_style',array(
		'default'	=> esc_html('wpdevart_car_rental_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_not_found_page_button_style',array(
			'label'	=> esc_html__('Back to Homepage button color','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_not_found_section',
			'setting'	=> 'wpdevart_car_rental_wda_not_found_page_button_style',
			'type' => 'select',
			'choices' => array(
				'wpdevart_car_rental_wda_primary_button_slide primary_btn_slide_right' => esc_html__('Custom Primary', 'car-rental-wda'),
				'wpdevart_car_rental_wda_secondary_button_slide secondary_btn_slide_right' => esc_html__('Custom Secondary', 'car-rental-wda'),
				'wpdevart_car_rental_wda_first_button_slide first_btn_slide_right' => esc_html__('WpDevArt Color', 'car-rental-wda'),
				'wpdevart_car_rental_wda_second_button_slide second_btn_slide_right' => esc_html__('Grapefruit Red', 'car-rental-wda'),
				'wpdevart_car_rental_wda_third_button_slide third_btn_slide_right' => esc_html__('Blue', 'car-rental-wda'),
				'wpdevart_car_rental_wda_fourth_button_slide fourth_btn_slide_right' => esc_html__('Dark', 'car-rental-wda'),
				'wpdevart_car_rental_wda_fifth_button_slide fifth_btn_slide_right' => esc_html__('Green', 'car-rental-wda'),
				'wpdevart_car_rental_wda_sixth_button_slide sixth_btn_slide_right' => esc_html__('Yellow', 'car-rental-wda'),
				'wpdevart_car_rental_wda_seventh_button_slide seventh_btn_slide_right' => esc_html__('Custom Green', 'car-rental-wda'),
				'wpdevart_car_rental_wda_eighth_button_slide eighth_btn_slide_right' => esc_html__('White', 'car-rental-wda'),
				)
	));	