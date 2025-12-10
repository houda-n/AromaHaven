<?php

    $wp_customize->register_section_type( 'Wpdevart_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_car_rental_wda_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'car-rental-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_car_rental_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-rental-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'car-rental-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'car-rental-wda' ),
					esc_html__( 'Preloader', 'car-rental-wda' ),
                    esc_html__( 'Button Animation', 'car-rental-wda' ),
                    esc_html__( '+6 Beautiful Patterns', 'car-rental-wda' ),
					esc_html__( 'Customizable Search Overlay', 'car-rental-wda' ),
					esc_html__( 'Back To Top Button', 'car-rental-wda' ),
					esc_html__( '... and Other Premium Features', 'car-rental-wda' ),
				),
				'panel'         => 'wpdevart_car_rental_wda_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_car_rental_wda_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'car-rental-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_car_rental_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-rental-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'car-rental-wda' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'car-rental-wda' ),
                    esc_html__( 'Logo Animations', 'car-rental-wda' ),
					esc_html__( 'Search Button Animations', 'car-rental-wda' ),
                    esc_html__( 'Woo Cart Animations', 'car-rental-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'car-rental-wda' ),
					esc_html__( '... and Other Premium Features', 'car-rental-wda' ),
				),
				'panel'         => 'wpdevart_car_rental_wda_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_car_rental_wda_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'car-rental-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_car_rental_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-rental-theme')),
				'premium_features_list' => array(
					esc_html__( '+6 Beautiful Patterns', 'car-rental-wda' ),
                    esc_html__( 'Post/Page Title Animations', 'car-rental-wda' ),
					esc_html__( 'Post/Page Banner Animations', 'car-rental-wda' ),
                    esc_html__( '4 Animated Banner Elements', 'car-rental-wda' ),
					esc_html__( 'Animated Elements Colors', 'car-rental-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'car-rental-wda' ),
					esc_html__( '... and Other Premium Features', 'car-rental-wda' ),
				),
				'panel'         => 'wpdevart_car_rental_wda_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_car_rental_wda_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'car-rental-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_car_rental_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-rental-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'car-rental-wda' ),
					esc_html__( 'Archive/Search Page Title Animations', 'car-rental-wda' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'car-rental-wda' ),
					esc_html__( '4 Animated Elements', 'car-rental-wda' ),
                    esc_html__( 'Animated Elements Colors', 'car-rental-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'car-rental-wda' ),
					esc_html__( '... and Other Premium Features', 'car-rental-wda' ),
				),
				'panel'         => 'wpdevart_car_rental_wda_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_car_rental_wda_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'car-rental-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_car_rental_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-rental-theme')),
				'premium_features_list' => array(
                    esc_html__( '+4 Beautiful Banner Themes', 'car-rental-wda' ),
                    esc_html__( 'Homepage Sections Positions', 'car-rental-wda' ),
					esc_html__( 'WooCommerce Section', 'car-rental-wda' ),
					esc_html__( 'Sales Section', 'car-rental-wda' ),
                    esc_html__( 'Benefits of Ordering Section', 'car-rental-wda' ),
                    esc_html__( 'Our Partners Section', 'car-rental-wda' ),
                    esc_html__( 'Shop by Category Section', 'car-rental-wda' ),
					esc_html__( 'Achievements Section', 'car-rental-wda' ),
					esc_html__( 'Advantages Section', 'car-rental-wda' ),
					esc_html__( 'Services Section', 'car-rental-wda' ),
					esc_html__( 'Sections Description Color', 'car-rental-wda' ),
					esc_html__( 'Sections Title Lines Color', 'car-rental-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'car-rental-wda' ),
					esc_html__( '... and Other Premium Features', 'car-rental-wda' ),
				),
				'panel'         => 'wpdevart_car_rental_wda_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Wpdevart_Premium_Features_List(
			$wp_customize,
			'wpdevart_car_rental_wda_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'car-rental-wda' ),
                'upsell_link'  => apply_filters( 'parent_wpdevart_car_rental_wda_premium_features_url', esc_url('https://wpdevart.com/wordpress-car-rental-theme')),
				'premium_features_list' => array(
                    esc_html__( 'WooCommerce Search Bar Section', 'car-rental-wda' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'car-rental-wda' ),
					esc_html__( 'WooCommerce Shop/Category Structure', 'car-rental-wda' ),
					esc_html__( 'WooCommerce Premium Sections', 'car-rental-wda' ),
					esc_html__( 'WooCommerce Breadcrumbs', 'car-rental-wda' ),
					esc_html__( 'WooCommerce Header Cart Design', 'car-rental-wda' ),
                    esc_html__( 'WooCommerce Button Animation', 'car-rental-wda' ),
					esc_html__( 'WooCommerce Sidebar Options', 'car-rental-wda' ),
					esc_html__( 'Wide and Full-Width Layouts', 'car-rental-wda' ),
					esc_html__( '... and Other Premium Features', 'car-rental-wda' ),
				),
				'panel'         => 'wpdevart_car_rental_wda_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization',
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Logo Animation', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo Font-size', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo Font Weight', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Site Description Color', 'car-rental-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Site Description Font-size', 'car-rental-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_font_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_primary_button_settings',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Button Animation', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_woo_primary_button_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_woo_primary_button_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'woocommerce_primary_button_colors_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'WooCommerce Button Animation', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_single_post_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+6 Beautiful Patterns', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'car-rental-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'car-rental-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_single_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+6 Beautiful Patterns', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'car-rental-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'car-rental-wda' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'wpdevart_car_rental_wda_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'car-rental-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'car-rental-wda' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'car-rental-wda' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Ordering of Metas', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_custom_homepage_banner_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_custom_homepage_banner_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_custom_homepage_banner_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Banner Themes', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'wpdevart_car_rental_wda_footer_premium_features',
    array(
        'sanitize_callback' => 'wpdevart_car_rental_wda_text_sanitization'
    )
    );
    $wp_customize->add_control( new Wpdevart_Premium_Features_Control_List( $wp_customize, 'wpdevart_car_rental_wda_footer_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'car-rental-wda' ),
        'section' => 'wpdevart_car_rental_wda_footer_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+4 Beautiful Footer Themes', 'car-rental-wda' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Copyright Section Image', 'car-rental-wda' )
            ),
            'feature3' => array(
                'name' => esc_html__( '... and Other Premium Features', 'car-rental-wda' )
            ),
        )
    )
    ) );