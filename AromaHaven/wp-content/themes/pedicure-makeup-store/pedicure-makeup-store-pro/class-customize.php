<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Pedicure_Makeup_Store_Pro_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
			get_template_part( 'pedicure-makeup-store-pro/section-pro' );

		// Register custom section types.
		$manager->register_section_type( 'Pedicure_Makeup_Store_Pro_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Pedicure_Makeup_Store_Pro_Customize_Section_Pro(
				$manager,
				'pedicure_makeup_store_buy',
				array(
					'priority'      => 10,
					'title'    => esc_html__( 'Pedicure Makeup Store Pro', 'pedicure-makeup-store' ),
					'pro_text' => esc_html__( 'Upgrade to Pro', 'pedicure-makeup-store' ),
					'pro_url'  => 'https://www.legacytheme.net/products/makeup-wordpress-theme/'
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'pedicure-makeup-store-customize-controls', trailingslashit( get_template_directory_uri() ) . 'pedicure-makeup-store-pro/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'pedicure-makeup-store-customize-controls', trailingslashit( get_template_directory_uri() ) . 'pedicure-makeup-store-pro/customize-controls.css' );
	}

}

// Doing this customizer thang!
Pedicure_Makeup_Store_Pro_Customize::get_instance();
