<?php
    $wp_customize->add_section('wpdevart_car_rental_wda_top_header_section',array(
		'title'	=> esc_html__('Top Header','car-rental-wda'),
		'priority'		=> 23
	));
	$wp_customize->add_setting( 'wpdevart_car_rental_wda_enable_top_header',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_enable_top_header',
        array(
        'label' => esc_html__( 'Hide Top Header', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_layout',
	array(
		'default' => esc_html('phoneleft'),
		'transport' => 'refresh',
		'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
	)
	);
	$wp_customize->add_control( new Wpdevart_Image_Radio_Button_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_layout',
	array(
		'label' => esc_html__( 'Top header layout', 'car-rental-wda' ),
		'description' => esc_html__( 'Select the position of the top header elements', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_top_header_section',
		'choices' => array(
		'phoneleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-left.png',
			'name' => esc_html__( 'Phone and email on the left side', 'car-rental-wda' )
		),
		'phonesocialcenter' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-social-center.png',
			'name' => esc_html__( 'Center', 'car-rental-wda' )
		),
		'phoneright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-right.png',
			'name' => esc_html__( 'Phone and email on the right side', 'car-rental-wda' )
		)
		)
	)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_bg_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_bg_color', array(
        'label' => esc_html__('Top header background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_gradient_type',
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
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_bg_gradient_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_bg_gradient_color', array(
        'label' => esc_html__('Top header gradient color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'wpdevart_car_rental_wda_enable_top_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_enable_top_header_border',
        array(
        'label' => esc_html__( 'Hide top header border', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_border_color', esc_html('#383838')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_border_color', array(
        'label' => esc_html__('Top header border color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_border_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_text_color', array(
        'label' => esc_html__('Top header text color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_text_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_phone_email_address_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_phone_email_address_icons_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_phone_email_address_icons_color', array(
        'label' => esc_html__('Phone/Email/Address icon color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_phone_email_address_icons_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_phone_number',array(
		'default'	=> esc_html('(555) 555-1234'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'wpdevart_car_rental_wda_top_header_phone_number',
            array(
                'label'    => esc_html__('Phone Number','car-rental-wda'),
                'section'  => 'wpdevart_car_rental_wda_top_header_section',
                'settings' => 'wpdevart_car_rental_wda_top_header_phone_number',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_email', array(
			'default'	=> esc_html('info@example.com'),
			'sanitize_callback' => 'sanitize_email'
		)
	);
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_email', array(
			'label' => esc_html__( 'Email', 'car-rental-wda' ),
			'section' => 'wpdevart_car_rental_wda_top_header_section',
			'settings' => 'wpdevart_car_rental_wda_top_header_email',
			'type' => 'email'
		)
	);
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_social_icons_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_social_icons_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_social_icons_color', array(
        'label' => esc_html__('Social icons color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_social_icons_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_social_icons_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_top_header_social_icons_bg_color', esc_html('#020202')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_top_header_social_icons_bg_color', array(
        'label' => esc_html__('Social icons background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'settings' => 'wpdevart_car_rental_wda_top_header_social_icons_bg_color'
    )));
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_twitter',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_twitter',
        array(
        'label' => esc_html__( 'Hide Twitter icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_twitter_url',array(
		'default'	=> esc_url('https://twitter.com'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_twitter_url',array(
			'label'	=> esc_html__('Twitter page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_twitter_url'
	));	

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_facebook',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_facebook',
        array(
        'label' => esc_html__( 'Hide Facebook icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_facebook_url',array(
		'default'	=> esc_url('https://www.facebook.com/'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_facebook_url',array(
			'label'	=> esc_html__('Facebook page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_facebook_url'
	));	

	$wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_linkedin',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_linkedin',
        array(
        'label' => esc_html__( 'Hide Linkedin icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_linkedin_url',array(
		'default'	=> esc_url('https://www.linkedin.com'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_linkedin_url',array(
			'label'	=> esc_html__('Linkedin page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_linkedin_url'
	));	

	$wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_youtube',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_youtube',
        array(
        'label' => esc_html__( 'Hide YouTube icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_youtube_url',array(
		'default'	=> esc_url('https://www.youtube.com/'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_youtube_url',array(
			'label'	=> esc_html__('YouTube page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_youtube_url'
	));	

	$wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_instagram',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_instagram',
        array(
        'label' => esc_html__( 'Hide Instagram icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_instagram_url',array(
		'default'	=> esc_url('https://www.instagram.com/'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_instagram_url',array(
			'label'	=> esc_html__('Instagram page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_instagram_url'
	));

	$wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_tiktok',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_tiktok',
        array(
        'label' => esc_html__( 'Hide TikTok icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_tiktok_url',array(
		'default'	=> esc_url('https://www.tiktok.com/'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_tiktok_url',array(
			'label'	=> esc_html__('TikTok page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_tiktok_url'
	));

	$wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_disable_pinterest',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'wpdevart_car_rental_wda_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Toggle_Switch_Custom_control( $wp_customize, 'wpdevart_car_rental_wda_top_header_disable_pinterest',
        array(
        'label' => esc_html__( 'Hide Pinterest icon', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section'
        )
    ) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_top_header_pinterest_url',array(
		'default'	=> esc_url('https://www.pinterest.com/'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_url_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_top_header_pinterest_url',array(
			'label'	=> esc_html__('Pinterest page URL','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_top_header_section',
			'setting'	=> 'wpdevart_car_rental_wda_top_header_pinterest_url'
	));