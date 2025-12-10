<?php 
	$wp_customize->add_panel( 'wpdevart_car_rental_wda_general_settings_panel', 
    array(
		'title'	=> esc_html__('General','car-rental-wda'),			
        'description'	=> esc_html__('General Settings','car-rental-wda'),		
		'priority'		=> 21
    ) 
	);

	##################------ Fonts ------##################

	$wp_customize->add_section('wpdevart_car_rental_wda_fonts_section',array(
		'title'	=> esc_html__('Fonts','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_general_settings_panel'
	));
		
	$wp_customize->add_setting('wpdevart_car_rental_wda_global_fonts',array(
		'default'	=> esc_html('Alegreya'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
  
	$wp_customize->add_control('wpdevart_car_rental_wda_global_fonts',array(
			'label'	=> esc_html__('Select the font','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_fonts_section',
			'setting'	=> 'wpdevart_car_rental_wda_global_fonts',
			'type' => 'select',
			'choices' => array(
				'Roboto' => esc_html__('Roboto', 'car-rental-wda'),
				'Poppins' => esc_html__('Poppins', 'car-rental-wda'),
				'Open Sans' => esc_html__('Open Sans', 'car-rental-wda'),
				'Alegreya' => esc_html__('Alegreya', 'car-rental-wda'),
				'Alegreya Sans' => esc_html__('Alegreya Sans', 'car-rental-wda'),
				'Lato' => esc_html__('Lato', 'car-rental-wda'),
				'Montserrat' => esc_html__('Montserrat', 'car-rental-wda'),
				'Oswald' => esc_html__('Oswald', 'car-rental-wda'),
				'Raleway' => esc_html__('Raleway', 'car-rental-wda'),
				'Inknut Antiqua' => esc_html__('Inknut Antiqua', 'car-rental-wda'),
				)
	));

    ##################------ Primary Button ------##################

	$wp_customize->add_section('wpdevart_car_rental_wda_primary_button_settings',array(
		'title'	=> esc_html__('Primary Button','car-rental-wda'),
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_car_rental_wda_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_primary_button_bg_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_primary_button_bg_color', array(
        'label' => esc_html__('Primary button background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'settings' => 'wpdevart_car_rental_wda_primary_button_bg_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_primary_button_border_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_primary_button_border_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_primary_button_border_color', array(
        'label' => esc_html__('Primary button border color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'settings' => 'wpdevart_car_rental_wda_primary_button_border_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_primary_button_link_color', esc_html('#fffcfc')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_primary_button_link_color', array(
        'label' => esc_html__('Primary button text color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'settings' => 'wpdevart_car_rental_wda_primary_button_link_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_primary_button_bg_hover_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_primary_button_bg_hover_color', array(
        'label' => esc_html__('Primary button background hover color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'settings' => 'wpdevart_car_rental_wda_primary_button_bg_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_primary_button_border_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_primary_button_border_hover_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_primary_button_border_hover_color', array(
        'label' => esc_html__('Primary button border hover color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'settings' => 'wpdevart_car_rental_wda_primary_button_border_hover_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_primary_button_link_hover_color', esc_html('#e03100')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_primary_button_link_hover_color', array(
        'label' => esc_html__('Primary button text hover color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'settings' => 'wpdevart_car_rental_wda_primary_button_link_hover_color'
    )));

    ##################------ Colors ------##################

	$wp_customize->add_section('wpdevart_car_rental_wda_main_colors_settings',array(
		'title'	=> esc_html__('Colors','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_bg_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_bg_color', array(
        'label' => esc_html__('Main container background color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_main_colors_settings',
        'settings' => 'wpdevart_car_rental_wda_main_container_bg_color'
    )));
	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_heading_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_color', array(
        'label' => esc_html__('Main container heading color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_main_colors_settings',
        'settings' => 'wpdevart_car_rental_wda_main_container_heading_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_text_color', array(
        'label' => esc_html__('Main container text color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_main_colors_settings',
        'settings' => 'wpdevart_car_rental_wda_main_container_text_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_link_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_link_color', array(
        'label' => esc_html__('Main container link color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_main_colors_settings',
        'settings' => 'wpdevart_car_rental_wda_main_container_link_color'
    )));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_link_hover_color', array(
        'label' => esc_html__('Main container link hover color','car-rental-wda'),
        'section' => 'wpdevart_car_rental_wda_main_colors_settings',
        'settings' => 'wpdevart_car_rental_wda_main_container_link_hover_color'
    )));

	##################------ Sidebar Colors ------##################

	$wp_customize->add_section('wpdevart_car_rental_wda_sidebar_colors_settings',array(
		'title'	=> esc_html__('Sidebar Colors','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_general_settings_panel'
	));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_sidebar_bg_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_sidebar_bg_color', esc_html('#070506')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_sidebar_bg_color', array(
		'label' => esc_html__('Widgets background color','car-rental-wda'),
		'section' => 'wpdevart_car_rental_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_car_rental_wda_main_container_sidebar_bg_color'
	)));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_sidebar_shadow_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_sidebar_shadow_color', esc_html('#343434')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_sidebar_shadow_color', array(
		'label' => esc_html__('Widgets shadow color','car-rental-wda'),
		'section' => 'wpdevart_car_rental_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_car_rental_wda_main_container_sidebar_shadow_color'
	)));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_sidebar_heading_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_sidebar_heading_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_sidebar_heading_color', array(
		'label' => esc_html__('Sidebar headings color','car-rental-wda'),
		'section' => 'wpdevart_car_rental_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_car_rental_wda_main_container_sidebar_heading_color'
	)));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_sidebar_text_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_sidebar_text_color', esc_html('#d5d5d5')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_sidebar_text_color', array(
		'label' => esc_html__('Sidebar text color','car-rental-wda'),
		'section' => 'wpdevart_car_rental_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_car_rental_wda_main_container_sidebar_text_color'
	)));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_sidebar_link_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_sidebar_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_sidebar_link_color', array(
		'label' => esc_html__('Sidebar link color','car-rental-wda'),
		'section' => 'wpdevart_car_rental_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_car_rental_wda_main_container_sidebar_link_color'
	)));
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_sidebar_link_hover_color',array(
		'default'	=> apply_filters( 'parent_wpdevart_car_rental_wda_main_container_sidebar_link_hover_color', esc_html('#efb33f')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_sidebar_link_hover_color', array(
		'label' => esc_html__('Sidebar link hover color','car-rental-wda'),
		'section' => 'wpdevart_car_rental_wda_sidebar_colors_settings',
		'settings' => 'wpdevart_car_rental_wda_main_container_sidebar_link_hover_color'
	)));

	##################------ Typography ------##################

	$wp_customize->add_section('wpdevart_car_rental_wda_text_link_typography_settings',array(
		'title'	=> esc_html__('Typography','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_text_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_text_font_size',
		array(
		'label' => esc_html__( 'Main container text font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_link_font_size',
    array(
       'default' => esc_html('17'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_link_font_size',
		array(
		'label' => esc_html__( 'Main container link font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_link_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_link_font_weight',array(
			'label'	=> esc_html__('Link font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_link_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_link_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_link_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_link_font_style',array(
			'label'	=> esc_html__('Link font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_link_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_link_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	

	##################------ Typography H1 ------##################

	$wp_customize->add_section('wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',array(
		'title'	=> esc_html__('Typography H1, H2, H3, H4, H5, H6','car-rental-wda'),					
		'priority'		=> null,
		'panel'         => 'wpdevart_car_rental_wda_general_settings_panel'
	));

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_heading_h1_font_size',
    array(
       'default' => esc_html('40'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Heading H1 font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('70'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h1_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h1_font_weight',array(
			'label'	=> esc_html__('Heading H1 font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h1_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h1_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h1_font_style',array(
			'label'	=> esc_html__('Heading H1 font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h1_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h1_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h1_font_transform',array(
			'label'	=> esc_html__('Heading H1 font transform','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h1_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'capitalize' => esc_html__('Capitalize','car-rental-wda'),
				'uppercase' => esc_html__('Uppercase','car-rental-wda'),
				'lowercase' => esc_html__('Lowercase','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h1_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h1_font_decoration',array(
			'label'	=> esc_html__('Heading H1 font decoration','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h1_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'underline' => esc_html__('Underline','car-rental-wda'),
				'line-through' => esc_html__('Line-through','car-rental-wda'),
				'overline' => esc_html__('Overline','car-rental-wda'),
				)
	));	

	##################------ Typography H2 ------##################

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_heading_h2_font_size',
    array(
       'default' => esc_html('28'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_h2_font_size',
		array(
		'label' => esc_html__( 'Heading H2 font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h2_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h2_font_weight',array(
			'label'	=> esc_html__('Heading H2 font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h2_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h2_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h2_font_style',array(
			'label'	=> esc_html__('Heading H2 font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h2_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h2_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h2_font_transform',array(
			'label'	=> esc_html__('Heading H2 font transform','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h2_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'capitalize' => esc_html__('Capitalize','car-rental-wda'),
				'uppercase' => esc_html__('Uppercase','car-rental-wda'),
				'lowercase' => esc_html__('Lowercase','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h2_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h2_font_decoration',array(
			'label'	=> esc_html__('Heading H2 font decoration','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h2_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'underline' => esc_html__('Underline','car-rental-wda'),
				'line-through' => esc_html__('Line-through','car-rental-wda'),
				'overline' => esc_html__('Overline','car-rental-wda'),
				)
	));	

	##################------ Typography H3 ------##################

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_heading_h3_font_size',
    array(
       'default' => esc_html('24'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_h3_font_size',
		array(
		'label' => esc_html__( 'Heading H3 font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h3_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h3_font_weight',array(
			'label'	=> esc_html__('Heading H3 font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h3_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h3_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h3_font_style',array(
			'label'	=> esc_html__('Heading H3 font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h3_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h3_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h3_font_transform',array(
			'label'	=> esc_html__('Heading H3 font transform','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h3_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'capitalize' => esc_html__('Capitalize','car-rental-wda'),
				'uppercase' => esc_html__('Uppercase','car-rental-wda'),
				'lowercase' => esc_html__('Lowercase','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h3_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h3_font_decoration',array(
			'label'	=> esc_html__('Heading H3 font decoration','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h3_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'underline' => esc_html__('Underline','car-rental-wda'),
				'line-through' => esc_html__('Line-through','car-rental-wda'),
				'overline' => esc_html__('Overline','car-rental-wda'),
				)
	));	

	##################------ Typography H4 ------##################

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_heading_h4_font_size',
    array(
       'default' => esc_html('23'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_h4_font_size',
		array(
		'label' => esc_html__( 'Heading H4 font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h4_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h4_font_weight',array(
			'label'	=> esc_html__('Heading H4 font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h4_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h4_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h4_font_style',array(
			'label'	=> esc_html__('Heading H4 font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h4_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h4_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h4_font_transform',array(
			'label'	=> esc_html__('Heading H4 font transform','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h4_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'capitalize' => esc_html__('Capitalize','car-rental-wda'),
				'uppercase' => esc_html__('Uppercase','car-rental-wda'),
				'lowercase' => esc_html__('Lowercase','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h4_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h4_font_decoration',array(
			'label'	=> esc_html__('Heading H4 font decoration','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h4_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'underline' => esc_html__('Underline','car-rental-wda'),
				'line-through' => esc_html__('Line-through','car-rental-wda'),
				'overline' => esc_html__('Overline','car-rental-wda'),
				)
	));	

	##################------ Typography H5 ------##################

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_heading_h5_font_size',
    array(
       'default' => esc_html('22'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_h5_font_size',
		array(
		'label' => esc_html__( 'Heading H5 font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h5_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h5_font_weight',array(
			'label'	=> esc_html__('Heading H5 font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h5_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h5_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h5_font_style',array(
			'label'	=> esc_html__('Heading H5 font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h5_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h5_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h5_font_transform',array(
			'label'	=> esc_html__('Heading H5 font transform','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h5_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'capitalize' => esc_html__('Capitalize','car-rental-wda'),
				'uppercase' => esc_html__('Uppercase','car-rental-wda'),
				'lowercase' => esc_html__('Lowercase','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h5_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h5_font_decoration',array(
			'label'	=> esc_html__('Heading H5 font decoration','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h5_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'underline' => esc_html__('Underline','car-rental-wda'),
				'line-through' => esc_html__('Line-through','car-rental-wda'),
				'overline' => esc_html__('Overline','car-rental-wda'),
				)
	));	

	##################------ Typography H6 ------##################

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_main_container_heading_h6_font_size',
    array(
       'default' => esc_html('20'),
       'sanitize_callback' => 'wpdevart_car_rental_wda_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Wpdevart_Slider_Custom_Control( $wp_customize, 'wpdevart_car_rental_wda_main_container_heading_h6_font_size',
		array(
		'label' => esc_html__( 'Heading H6 font-size (px)', 'car-rental-wda' ),
		'section' => 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h6_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'	
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h6_font_weight',array(
			'label'	=> esc_html__('Heading H6 font weight','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h6_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','car-rental-wda'),
				'400' => esc_html__('Normal 400','car-rental-wda'),
				'600' => esc_html__('Semi-Bold 600','car-rental-wda'),
				'800' => esc_html__('Extra-Bold 800','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h6_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h6_font_style',array(
			'label'	=> esc_html__('Heading H6 font style','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h6_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','car-rental-wda'),
				'italic' => esc_html__('Italic','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h6_font_transform',array(
		'default'	=> esc_html('uppercase'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h6_font_transform',array(
			'label'	=> esc_html__('Heading H6 font transform','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h6_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'capitalize' => esc_html__('Capitalize','car-rental-wda'),
				'uppercase' => esc_html__('Uppercase','car-rental-wda'),
				'lowercase' => esc_html__('Lowercase','car-rental-wda'),
				)
	));	
	$wp_customize->add_setting('wpdevart_car_rental_wda_main_container_heading_h6_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'wpdevart_car_rental_wda_text_sanitization'
	));
	$wp_customize->add_control('wpdevart_car_rental_wda_main_container_heading_h6_font_decoration',array(
			'label'	=> esc_html__('Heading H6 font decoration','car-rental-wda'),
			'section'	=> 'wpdevart_car_rental_wda_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'wpdevart_car_rental_wda_main_container_heading_h6_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','car-rental-wda'),
				'underline' => esc_html__('Underline','car-rental-wda'),
				'line-through' => esc_html__('Line-through','car-rental-wda'),
				'overline' => esc_html__('Overline','car-rental-wda'),
				)
	));