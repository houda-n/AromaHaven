<?php
	$wp_customize->add_panel( 'wpdevart_car_rental_wda_header_panel', 
	array(
		'title'	=> esc_html__('Header','car-rental-wda'),			
		'description'	=> esc_html__('Customize the theme header options','car-rental-wda'),		
		'priority'		=> 24
	) 
	);
    $wp_customize->add_section('wpdevart_car_rental_wda_header_section',array(
		'title'	=> esc_html__('General','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_header_panel'
	));

	$wp_customize->add_setting( 'wpdevart_car_rental_wda_header_layout',
	array(
		'default' => esc_html('headerlayoutone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_header_layout',
	array(
		'label' => esc_html__( 'Header layout', 'car-rental-wda' ),
		'description' => esc_html__( 'Select the position of the header elements', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_header_section',
		'choices' => array(
		'headerlayoutone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-one.jpg',
			'name' => esc_html__( 'All header elements on one line', 'car-rental-wda' )
		),
		'headerlayouttwo' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-two.jpg',
			'name' => esc_html__( 'Logo at the top of the menu', 'car-rental-wda' )
		),
		'headerlayoutthree' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-three.jpg',
			'name' => esc_html__( 'Logo in the center', 'car-rental-wda' )
		),
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_bg_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_bg_color', array(
        'label' => esc_html__('Header background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_section',
        'settings' => 'wpdevart_car_rental_wda_header_bg_color'
    )));

	$wp_customize->add_setting('wpdevart_car_rental_wda_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_header_gradient_type',
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
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_bg_gradient_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_bg_gradient_color', array(
        'label' => esc_html__('Header gradient color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_section',
        'settings' => 'wpdevart_car_rental_wda_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_rental_wda_enable_main_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_enable_main_header_border',
        array(
        'label' => esc_html__( 'Hide the header border', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_border_color', esc_html('#383838')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_border_color', array(
        'label' => esc_html__('Header border color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_border_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_rental_wda_header_show_action_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_header_show_action_button',
        array(
        'label' => esc_html__( 'Hide the action button', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_action_button_text',array(
		'default'	=> esc_html('Rent Now'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_car_rental_wda_header_action_button_text',
            array(
                'label'    => esc_html__('Header action button text','car-rental-wda'),
                'section'  => 'wpdevart_car_rental_wda_header_section',
                'settings' => 'wpdevart_car_rental_wda_header_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_header_action_button_url',array(
			'label'	=> esc_html__('Header action button URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_header_action_button_url'
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_action_button_style',array(
		'default'	=> esc_html('wpdevart_car_rental_wda_primary_button_slide primary_btn_slide_right'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_header_action_button_style',array(
			'label'	=> esc_html__('Header action button color','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_header_action_button_style',
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

	$wp_customize->add_section('wpdevart_car_rental_wda_header_menu_search_section',array(
		'title'	=> esc_html__('Menu and Search','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_header_panel'
	));
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_search_button_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_search_button_color', array(
        'label' => esc_html__('Search button color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_header_search_button_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_menu_items_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_menu_items_color', array(
        'label' => esc_html__('Menu items color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_header_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_sub_menu_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_sub_menu_bg_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_sub_menu_bg_color', array(
        'label' => esc_html__('Sub menu background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_sub_menu_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_sub_menu_items_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_sub_menu_items_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_sub_menu_items_color', array(
        'label' => esc_html__('Sub menu items color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_sub_menu_items_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_sub_menu_top_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_sub_menu_top_border_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_sub_menu_top_border_color', array(
        'label' => esc_html__('Sub menu border color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_sub_menu_top_border_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_mobile_menu_background_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile toolbar background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_mobile_menu_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_mobile_menu_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_header_menu_search_section',
			'setting'	=> 'wpdevart_car_rental_wda_mobile_menu_bg_gradient_type',
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
	$wp_customize->add_setting('wpdevart_car_rental_wda_mobile_menu_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_mobile_menu_bg_gradient_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_mobile_menu_bg_gradient_color', array(
        'label' => esc_html__('Mobile toolbar background gradient color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_mobile_menu_bg_gradient_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_header_descktop_search_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_descktop_search_button_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_descktop_search_button_color', array(
        'label' => esc_html__('Mobile search button color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_header_descktop_search_button_color'
    )));

	$wp_customize->add_setting('wpdevart_car_rental_wda_header_mobile_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_header_mobile_menu_button_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_header_mobile_menu_button_color', array(
        'label' => esc_html__('Mobile menu button color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_header_mobile_menu_button_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_mobile_menu_background_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile menu background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_mobile_menu_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_mobile_menu_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_mobile_menu_link_color', array(
        'label' => esc_html__('Mobile menu link color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_mobile_menu_link_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_mobile_menu_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_mobile_menu_border_color', esc_html('#433e37')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_mobile_menu_border_color', array(
        'label' => esc_html__('Mobile menu borders color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_mobile_menu_border_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_bg_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_bg_color', array(
        'label' => esc_html__('Mobile sub-menu button BG color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_color', esc_html('#fffcfc')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_color', array(
        'label' => esc_html__('Mobile sub-menu button color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'settings' => 'wpdevart_car_rental_wda_main_header_mobile_sub_menu_button_color'
    )));

	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_section('wpdevart_car_rental_wda_header_woo_cart',array(
			'title'	=> esc_html__('WooCommerce','car-rental-wda'),					
			'priority'		=> null,
			'panel'         => 'wpdevart_car_rental_wda_header_panel'
		));
		$wp_customize->add_setting('wpdevart_car_rental_wda_woocommerce_account_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_woocommerce_account_icon_color', esc_html('#e03100')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_woocommerce_account_icon_color', array(
			'label' => esc_html__('WooCommerce account icon color','car-rental-wda'),
			'section' => 'wpdevart_car_rental_wda_header_woo_cart',
			'settings' => 'wpdevart_car_rental_wda_woocommerce_account_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_car_rental_wda_woocommerce_cart_icon_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_woocommerce_cart_icon_color', esc_html('#e03100')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_woocommerce_cart_icon_color', array(
			'label' => esc_html__('WooCommerce cart icon color','car-rental-wda'),
			'section' => 'wpdevart_car_rental_wda_header_woo_cart',
			'settings' => 'wpdevart_car_rental_wda_woocommerce_cart_icon_color'
		)));
		$wp_customize->add_setting('wpdevart_car_rental_wda_woocommerce_cart_icon_number_color',array(
			'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_woocommerce_cart_icon_number_color', esc_html('#fffcfc')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_woocommerce_cart_icon_number_color', array(
			'label' => esc_html__('WooCommerce cart number color','car-rental-wda'),
			'section' => 'wpdevart_car_rental_wda_header_woo_cart',
			'settings' => 'wpdevart_car_rental_wda_woocommerce_cart_icon_number_color'
		)));
	};