<?php
/**
 * Theme Customizer Controls
 *
 * @package Pedicure Makeup Store
 */

if ( ! function_exists( 'pedicure_makeup_store_customizer_blog_register' ) ) :
function pedicure_makeup_store_customizer_blog_register( $wp_customize ) {
	
	$wp_customize->add_panel(
        'pedicure_makeup_store_blog_settings_panel',
        array (
            'priority'      => 30,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Blog Settings', 'pedicure-makeup-store' ),
        )
    );

	// Section Posts
    $wp_customize->add_section(
        'pedicure_makeup_store_posts_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Posts', 'pedicure-makeup-store' ),
            'panel'          => 'pedicure_makeup_store_blog_settings_panel',
        )
    ); 

	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_post_meta_show', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_post_meta_show', 
		array(
		    'label'       => esc_html__( 'Posts Meta', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_posts_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_post_meta_show',
		) 
	));

	// Add an option to enable the date
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_posts_meta_date', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_posts_meta_date', 
		array(
		    'label'       => esc_html__( 'Show Date', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_posts_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_posts_meta_date',
		) 
	));

	// Add an option to enable the author
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_posts_meta_author', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_posts_meta_author', 
		array(
		    'label'       => esc_html__( 'Show Author', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_posts_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_posts_meta_author',
		) 
	));

	// Add an option to enable the comments
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_posts_meta_comments', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_posts_meta_comments', 
		array(
		    'label'       => esc_html__( 'Show Comments', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_posts_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_posts_meta_comments',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_sidebar_layout', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_sidebar_layout', 
		array(
		    'label'       => esc_html__( 'Sidebar', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_posts_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_sidebar_layout',
		) 
	));

	// Sidebar layout
    $wp_customize->add_setting(
        'pedicure_makeup_store_blog_sidebar_layout',
        array(
            'default'			=> 'right',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
            'sanitize_callback'	=> 'pedicure_makeup_store_sanitize_select'
        )
    );
    $wp_customize->add_control(
        new Pedicure_Makeup_Store_Radio_Image_Control( $wp_customize,'pedicure_makeup_store_blog_sidebar_layout',
            array(
                'settings'		=> 'pedicure_makeup_store_blog_sidebar_layout',
                'section'		=> 'pedicure_makeup_store_posts_settings',
                'label'			=> esc_html__( 'Sidebar Layout', 'pedicure-makeup-store' ),
                'choices'		=> array(
                    'right'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/cr.png',
                    'left' 	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/cl.png',
                    'three_colm'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/c3.png',
                    'four_colm'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/c4.png',
                    'grid_layout'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/c5.png',
                    'grid_left_sidebar'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/c6.png',
                    'grid_right_sidebar'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/c7.png',
                    'no' 	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/cn.png',
                )
            )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_blog_excerpt', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_blog_excerpt', 
		array(
		    'label'       => esc_html__( 'Post Excerpt', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_posts_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_blog_excerpt',
		) 
	));

	// add post excerpt textbox
    $wp_customize->add_setting(
        'pedicure_makeup_store_posts_excerpt_length',
        array(
            'type' => 'theme_mod',
            'default'           => 30,
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_number',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_posts_excerpt_length',
        array(
            'settings'      => 'pedicure_makeup_store_posts_excerpt_length',
            'section'       => 'pedicure_makeup_store_posts_settings',
            'type'          => 'number',
            'label'         => esc_html__( 'Post Excerpt Length', 'pedicure-makeup-store' ),
        )
    );

    // add readmore textbox
    $wp_customize->add_setting(
        'pedicure_makeup_store_posts_readmore_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'READ MORE', 'pedicure-makeup-store' ),
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_posts_readmore_text',
        array(
            'settings'      => 'pedicure_makeup_store_posts_readmore_text',
            'section'       => 'pedicure_makeup_store_posts_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Read More Text', 'pedicure-makeup-store' ),
        )
    );

    //=========================================================================

	// Section Single Post
    $wp_customize->add_section(
        'pedicure_makeup_store_single_post_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Single Post', 'pedicure-makeup-store' ),
            'panel'          => 'pedicure_makeup_store_blog_settings_panel',
        )
    ); 


    // Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_single_post_category_show', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_single_post_category_show', 
		array(
		    'label'       => esc_html__( 'Post Category', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_single_post_category_show',
		) 
	));

	// Add an option to enable the category
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_single_post_cat', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_single_post_cat', 
		array(
		    'label'       => esc_html__( 'Show Category', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_single_post_cat',
		) 
	));

	// add category textbox
    $wp_customize->add_setting(
        'pedicure_makeup_store_single_post_category_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Category:', 'pedicure-makeup-store' ),
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_single_post_category_text',
        array(
            'settings'      => 'pedicure_makeup_store_single_post_category_text',
            'section'       => 'pedicure_makeup_store_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Category Text', 'pedicure-makeup-store' ),
        )
    );

	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_single_post_tag_show', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_single_post_tag_show', 
		array(
		    'label'       => esc_html__( 'Post Tags', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_single_post_tag_show',
		) 
	));

	// Add an option to enable the tags
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_single_post_tags', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_single_post_tags', 
		array(
		    'label'       => esc_html__( 'Show Tags', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_single_post_tags',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_single_pos_meta_show', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_single_pos_meta_show', 
		array(
		    'label'       => esc_html__( 'Post Meta', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_single_pos_meta_show',
		) 
	));

	// Add an option to enable the date
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_single_post_meta_date', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_single_post_meta_date', 
		array(
		    'label'       => esc_html__( 'Show Date', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_single_post_meta_date',
		) 
	));

	// Add an option to enable the author
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_single_post_meta_author', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_single_post_meta_author', 
		array(
		    'label'       => esc_html__( 'Show Author', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_single_post_meta_author',
		) 
	));

	// Add an option to enable the comments
	$wp_customize->add_setting( 
		'pedicure_makeup_store_enable_single_post_meta_comments', 
		array(
		    'default'           => true,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Toggle_Control( $wp_customize, 'pedicure_makeup_store_enable_single_post_meta_comments', 
		array(
		    'label'       => esc_html__( 'Show Comments', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-toggle',
		    'settings'    => 'pedicure_makeup_store_enable_single_post_meta_comments',
		) 
	));

	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_single_pos_nav_show', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_single_pos_nav_show', 
		array(
		    'label'       => esc_html__( 'Post Navigation', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_single_pos_nav_show',
		) 
	));

    // add next article textbox
    $wp_customize->add_setting(
        'pedicure_makeup_store_single_post_next_article_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Next Article', 'pedicure-makeup-store' ),
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_single_post_next_article_text',
        array(
            'settings'      => 'pedicure_makeup_store_single_post_next_article_text',
            'section'       => 'pedicure_makeup_store_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Next Article Text', 'pedicure-makeup-store' ),
            'description'         => esc_html__( 'You can change the text displayed in the single post navigation', 'pedicure-makeup-store' ),
        )
    );

    // add previous article textbox
    $wp_customize->add_setting(
        'pedicure_makeup_store_single_post_previous_article_text',
        array(
            'type' => 'theme_mod',
            'default'           => esc_html__( 'Previous Article', 'pedicure-makeup-store' ),
            'sanitize_callback' => 'pedicure_makeup_store_sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'pedicure_makeup_store_single_post_previous_article_text',
        array(
            'settings'      => 'pedicure_makeup_store_single_post_previous_article_text',
            'section'       => 'pedicure_makeup_store_single_post_settings',
            'type'          => 'textbox',
            'label'         => esc_html__( 'Previous Article Text', 'pedicure-makeup-store' ),
            'description'         => esc_html__( 'You can change the text displayed in the single post navigation', 'pedicure-makeup-store' ),
        )
    );
    
	// Title label
	$wp_customize->add_setting( 
		'pedicure_makeup_store_label_single_sidebar_layout', 
		array(
		    'sanitize_callback' => 'pedicure_makeup_store_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Pedicure_Makeup_Store_Title_Info_Control( $wp_customize, 'pedicure_makeup_store_label_single_sidebar_layout', 
		array(
		    'label'       => esc_html__( 'Sidebar', 'pedicure-makeup-store' ),
		    'section'     => 'pedicure_makeup_store_single_post_settings',
		    'type'        => 'pedicure-makeup-store-title',
		    'settings'    => 'pedicure_makeup_store_label_single_sidebar_layout',
		) 
	));

	// Sidebar layout
    $wp_customize->add_setting(
        'pedicure_makeup_store_blog_single_sidebar_layout',
        array(
            'default'			=> 'no',
            'type'				=> 'theme_mod',
            'capability'		=> 'edit_theme_options',
            'sanitize_callback'	=> 'pedicure_makeup_store_sanitize_select'
        )
    );
    $wp_customize->add_control(
        new Pedicure_Makeup_Store_Radio_Image_Control( $wp_customize,'pedicure_makeup_store_blog_single_sidebar_layout',
            array(
                'settings'		=> 'pedicure_makeup_store_blog_single_sidebar_layout',
                'section'		=> 'pedicure_makeup_store_single_post_settings',
                'label'			=> esc_html__( 'Sidebar Layout', 'pedicure-makeup-store' ),
                'choices'		=> array(
                    'right'	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/cr.png',
                    'left' 	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/cl.png',
                    'no' 	        => PEDICURE_MAKEUP_STORE_DIR_URI . '/inc/customizer/assets/images/cn.png',
                )
            )
        )
    );
}
endif;

add_action( 'customize_register', 'pedicure_makeup_store_customizer_blog_register' );