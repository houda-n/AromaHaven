<?php

/**
 * Welcome Notice class.
 */
class Pedicure_Makeup_Store_Welcome_Notice {

	/**
	** Constructor.
	*/
	public function __construct() {
		// Render Notice
		add_action( 'admin_notices', [$this, 'pedicure_makeup_store_render_notice'] );

		// Enque AJAX Script
		add_action( 'admin_enqueue_scripts', [$this, 'pedicure_makeup_store_admin_enqueue_scripts'], 5 );

		// Dismiss
		add_action( 'admin_enqueue_scripts', [$this, 'pedicure_makeup_store_notice_enqueue_scripts'], 5 );
		add_action( 'wp_ajax_pedicure_makeup_store_dismissed_handler', [$this, 'pedicure_makeup_store_dismissed_handler'] );

		// Reset
		add_action( 'switch_theme', [$this, 'pedicure_makeup_store_reset_notices'] );
		add_action( 'after_switch_theme', [$this, 'pedicure_makeup_store_reset_notices'] );

	}

	/**
	** Render Notice
	*/
	public function pedicure_makeup_store_render_notice() {
	global $pagenow;

	$pedicure_makeup_store_screen = get_current_screen();

	if (
		$pedicure_makeup_store_screen &&
		$pedicure_makeup_store_screen->id !== 'appearance_page_pedicure-makeup-store-theme-info' &&
		$pedicure_makeup_store_screen->id !== 'appearance_page_pedicure-makeup-store-demo'
	) {
		$pedicure_makeup_store_transient_name = sprintf('%s_activation_notice', get_template());

		if ( ! get_transient($pedicure_makeup_store_transient_name) ) {
			?>
			<div class="pedicure-makeup-store-notice notice notice-info is-dismissible" data-notice="<?php echo esc_attr($pedicure_makeup_store_transient_name); ?>">
				<button type="button" class="notice-dismiss"></button>

				<?php $this->pedicure_makeup_store_render_notice_content(); ?>
			</div>
			<?php
		}
	}
}

	/**
	** Render Notice Content
	*/
	public function pedicure_makeup_store_render_notice_content() {
		$pedicure_makeup_store_action = 'install-activate';
		$pedicure_makeup_store_redirect_url = 'admin.php?page=pedicure-makeup-store-theme-info';
		$pedicure_makeup_store_demo_redirect_url = 'themes.php?page=pedicure-makeup-store-demo';
		$pedicure_makeup_store_screen = get_current_screen();

		?>
		<div class="notice-left-icon-box">
			<span class="dashicons dashicons-book notc-theme-icon"></span>
		</div>
		<div class="welcome-message">
			<div class="notc-contnt">
				<h4><?php esc_html_e('Thank you for installing Legacy Themes!', 'pedicure-makeup-store'); ?></h4>
				<h1><?php esc_html_e('Welcome to Pedicure Makeup Store WordPress Theme!', 'pedicure-makeup-store'); ?></h1>
				<p><?php esc_html_e( 'Our WordPress themes are modern, minimalist, fully responsive, SEO-friendly, and packed with features—perfect for designers, bloggers, and creative professionals across various fields.', 'pedicure-makeup-store' );?>
				</p>			
				<div class="action-buttons">
					<a href="<?php echo esc_url(admin_url($pedicure_makeup_store_redirect_url)); ?>" class="button notice-btn button-hero" data-action="<?php echo esc_attr($pedicure_makeup_store_action); ?>">
						<span class="notc-btn-txt"><?php echo esc_html__( 'Get Started with Pedicure Makeup Store', 'pedicure-makeup-store' ); ?></span>
					</a>
					<a href="<?php echo esc_url(admin_url($pedicure_makeup_store_demo_redirect_url)); ?>" class="demo-btn btn" >
						<span class="demo-btn-txt"><?php echo esc_html__( 'Demo Import', 'pedicure-makeup-store' ); ?></span>
					</a>
					<a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_BUNDLE_URL); ?>" target="_blank" class="bundle-btn btn" >
						<span class="demo-btn-txt"><?php echo esc_html__( 'Get All Themes', 'pedicure-makeup-store' ); ?></span>
					</a>
				</div>
			</div>			
		</div>
		<div class="notice-right-img-box">
			<img class="notc-right-img" src="<?php echo esc_url( get_template_directory_uri() . '/inc/activation-notice/img/notice-right.png' ); ?>" alt="<?php esc_attr_e( 'notice themes img', 'pedicure-makeup-store' ); ?>" />
		</div>

		<?php
	}

	/**
	** Reset Notice.
	*/
	public function pedicure_makeup_store_reset_notices() {
		delete_transient( sprintf( '%s_activation_notice', get_template() ) );
	}

	/**
	** Dismissed handler
	*/
	public function pedicure_makeup_store_dismissed_handler() {
		wp_verify_nonce( null );

		if ( isset( $_POST['notice'] ) ) {
			set_transient( sanitize_text_field( wp_unslash( $_POST['notice'] ) ), true, 0 );
		}
	}

	/**
	** Notice Enqunue Scripts
	*/
	public function pedicure_makeup_store_notice_enqueue_scripts( $page ) {
		
		wp_enqueue_script( 'jquery' );

		ob_start();
		?>
		<script>
			jQuery(function($) {
				$( document ).on( 'click', '.pedicure-makeup-store-notice .notice-dismiss', function () {
					jQuery.post( 'ajax_url', {
						action: 'pedicure_makeup_store_dismissed_handler',
						notice: $( this ).closest( '.pedicure-makeup-store-notice' ).data( 'notice' ),
					});
					$( '.pedicure-makeup-store-notice' ).hide();
				} );
			});
		</script>
		<?php
		$script = str_replace( 'ajax_url', admin_url( 'admin-ajax.php' ), ob_get_clean() );

		wp_add_inline_script( 'jquery', str_replace( ['<script>', '</script>'], '', $script ) );
	}

	/**
	** Register scripts and styles for welcome notice.
	*/
	public function pedicure_makeup_store_admin_enqueue_scripts( $page ) {
		// Enqueue Styles.
		wp_enqueue_style( 'pedicure-makeup-store-welcome-notic-css', get_template_directory_uri() . '/inc/activation-notice/css/notice-bar.css' );
	}

}

new Pedicure_Makeup_Store_Welcome_Notice();