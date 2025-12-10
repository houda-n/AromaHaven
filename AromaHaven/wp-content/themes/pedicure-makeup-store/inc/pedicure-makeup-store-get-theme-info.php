<?php
/**
 * Theme information pedicure makeup store
 *
 * @package pedicure makeup store
 */

 define('PEDICURE_MAKEUP_STORE_DEMO_URL','https://legacytheme.net/trial/pedicure-makeup-store/');
 define('PEDICURE_MAKEUP_STORE_THEME_PRO_URL','https://www.legacytheme.net/products/makeup-wordpress-theme/');
 define('PEDICURE_MAKEUP_STORE_THEME_DOC_URL','https://www.legacytheme.net/tutorial/pedicure-makeup-store-lite/');
 define('PEDICURE_MAKEUP_STORE_THEME_SUPPORT_URL','https://wordpress.org/support/theme/pedicure-makeup-store/');
 define('PEDICURE_MAKEUP_STORE_THEME_RATINGS_URL','https://wordpress.org/support/theme/pedicure-makeup-store/reviews/');
 define('PEDICURE_MAKEUP_STORE_THEME_UPGRADE_URL','https://www.legacytheme.net/products/makeup-wordpress-theme/');
 define('PEDICURE_MAKEUP_STORE_THEME_BUNDLE_URL','https://www.legacytheme.net/products/wordpress-theme-bundle/');   

if ( ! class_exists( 'Pedicure_Makeup_Store_About_Page' ) ) {
	/**
	 * Singleton class used for generating the about page of the theme.
	 */
	class Pedicure_Makeup_Store_About_Page {
		/**
		 * Define the version of the class.
		 *
		 * @var string $version The Pedicure_Makeup_Store_About_Page class version.
		 */
		private $version = '1.0.0';
		/**
		 * Used for loading the texts and setup the actions inside the page.
		 *
		 * @var array $config The configuration array for the theme used.
		 */
		private $config;
		/**
		 * Get the theme name using wp_get_theme.
		 *
		 * @var string $theme_name The theme name.
		 */
		private $theme_name;
		/**
		 * Get the theme slug ( theme folder name ).
		 *
		 * @var string $theme_slug The theme slug.
		 */
		private $theme_slug;
		/**
		 * The current theme object.
		 *
		 * @var WP_Theme $theme The current theme.
		 */
		private $theme;
		/**
		 * Holds the theme version.
		 *
		 * @var string $theme_version The theme version.
		 */
		private $theme_version;		
		/**
		 * Define the html notification content displayed upon activation.
		 *
		 * @var string $notification The html notification content.
		 */
		private $notification;
		/**
		 * The single instance of Pedicure_Makeup_Store_About_Page
		 *
		 * @var Pedicure_Makeup_Store_About_Page $instance The Pedicure_Makeup_Store_About_Page instance.
		 */
		private static $instance;
		/**
		 * The Main Pedicure_Makeup_Store_About_Page instance.
		 *
		 * We make sure that only one instance of Pedicure_Makeup_Store_About_Page exists in the memory at one time.
		 *
		 * @param array $config The configuration array.
		 */
		public static function pedicure_makeup_store_init( $config ) {
			if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Pedicure_Makeup_Store_About_Page ) ) {
				self::$instance = new Pedicure_Makeup_Store_About_Page;				
				self::$instance->config = $config;
				self::$instance->pedicure_makeup_store_setup_config();	
			}
		}

		/**
		 * Setup the class props based on the config array.
		 */
		public function pedicure_makeup_store_setup_config() {
			$theme = wp_get_theme();
			if ( is_child_theme() ) {
				$this->theme_name = $theme->parent()->get( 'Name' );
				$this->theme      = $theme->parent();
			} else {
				$this->theme_name = $theme->get( 'Name' );
				$this->theme      = $theme->parent();
			}
			$this->theme_version = $theme->get( 'Version' );
			$this->theme_slug    = $theme->get_template();			
				
		}	
	}
}


/**
 *  Adding a About page 
 */
add_action('admin_menu', 'pedicure_makeup_store_add_menu');
function pedicure_makeup_store_add_menu() {
     add_theme_page(esc_html__('Legacy-themes','pedicure-makeup-store'), esc_html__('Get Theme Info','pedicure-makeup-store'),'manage_options', esc_html__('pedicure-makeup-store-theme-info','pedicure-makeup-store'), esc_html__('pedicure_makeup_store_theme_info','pedicure-makeup-store'));
}

/**
 *  Callback
 */
function pedicure_makeup_store_theme_info() {
	$theme = wp_get_theme();
	$pedicure_makeup_store_demo_redirect_url_getstart = 'themes.php?page=pedicure-makeup-store-demo';
?>
	<div class="theme-info-get">
		<div class="container">
			<div class="top-section">
				<div class="title">
					<h1 class="info-theme-name"><?php esc_html_e( 'Pedicure Makeup Store WordPress Theme', 'pedicure-makeup-store' ); ?> <span><?php echo $theme->get( 'Version' ); ?></span> </h1>
					<p><?php echo $theme->get( 'Description' ); ?></p>
				</div>
			</div>
			<div class="buttons-box">
				<div class="info-btns-link">
					<div class="sidebar">
						<div class="section-box">
							<div class="icon">
								<span class="dashicons dashicons-format-aside"></span>
							</div>
							<div class="heading">
								<h3><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_DOC_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW DOCUMENTATION', 'pedicure-makeup-store' ); ?></a></h3>
							</div>						
						</div>

						<div class="section-box">
							<div class="icon">
								<span class="dashicons dashicons-visibility"></span>
							</div>
							<div class="heading">
								<h3><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_DEMO_URL); ?>" target="_blank"><?php esc_html_e( 'VIEW DEMOS', 'pedicure-makeup-store' ); ?></a></h3>
							</div>	
						</div>	

						<div class="section-box">
							<div class="icon">
								<span class="dashicons dashicons-admin-generic"></span>
							</div>
							<div class="heading">
								<h3><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_UPGRADE_URL); ?>" target="_blank"><?php esc_html_e( 'UPGRADE TO PRO', 'pedicure-makeup-store' ); ?></a></h3>
							</div>						
						</div>

						<div class="section-box">
							<div class="icon">
								<span class="dashicons dashicons-star-filled"></span>
							</div>
							<div class="heading">
								<h3><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_RATINGS_URL); ?>" target="_blank"><?php esc_html_e( 'RATE OUR THEME', 'pedicure-makeup-store' ); ?></a></h3>
							</div>						
						</div>						

						<div class="section-box">
							<div class="icon">
								<span class="dashicons dashicons-sos"></span>
							</div>
							<div class="heading">
								<h3><a href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_SUPPORT_URL); ?>" target="_blank"><?php esc_html_e( 'ASK FOR SUPPORT', 'pedicure-makeup-store' ); ?></a></h3>
							</div>						
						</div>							
					</div>
				</div>
			</div>		
			<div class="middle-section">
				<div class="screnshot-wrapper">
					<div class="scrnsht-box">
						<img class="scrnshot-img" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
					</div>
				</div>

				<div class="custmzr-settng sidebar-right">
					<div class="quick-links">
						<h2 class="info-qick-hd"><?php esc_html_e( 'Quick Customizer Settings', 'pedicure-makeup-store' ); ?> </h2>
						<div class="cst-btn">			
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-welcome-view-site"></span>
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[control]=custom_logo')) ?>" target="_blank"> <?php esc_html_e( 'Upload Logo', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-menu-alt2"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[panel]=nav_menus')) ?>" target="_blank"> <?php esc_html_e( 'Menu Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-admin-tools"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[section]=pedicure_makeup_store_home_header_settings')) ?>" target="_blank"> <?php esc_html_e( 'Header Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-format-image"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[section]=pedicure_makeup_store_home_banner_settings')) ?>" target="_blank"> <?php esc_html_e( 'Banner Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-image-filter"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[section]=pedicure_makeup_store_home_services_settings')) ?>" target="_blank"> <?php esc_html_e( 'Services Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-media-default"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[control]=pedicure_makeup_store_enable_page_title')) ?>" target="_blank"> <?php esc_html_e( 'Page Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-edit-large"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[panel]=pedicure_makeup_store_blog_settings_panel')) ?>" target="_blank"> <?php esc_html_e( 'Blog Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
							<div class="custm-box">
								<div class="customizer-title">
									<h3>
										<span class="dashicons dashicons-columns"></span> 
										<a href="<?php echo esc_url(admin_url( 'customize.php?autofocus[section]=pedicure_makeup_store_footer_settings')) ?>" target="_blank"> <?php esc_html_e( 'Footer Settings', 'pedicure-makeup-store' ); ?> </a>
									</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tick-box">
				<div class="comp-box">
					<h2 class="table-heading"><?php esc_html_e( 'What makes our PRO Version the better option?', 'pedicure-makeup-store' ); ?></h2>
					<div class="comp-table">
						<table>
							<thead> 
								<tr> 
								 	<th class="thead-column1"><strong><h4><?php esc_html_e( 'Feature', 'pedicure-makeup-store' ); ?></h4></strong></th>
									<th class="thead-column2"><strong><h4><?php esc_html_e( 'Pedicure Makeup Store Free', 'pedicure-makeup-store' ); ?></h4></strong></th>
									<th class="thead-column3"><strong><h4><?php esc_html_e( 'Pedicure Makeup Store Pro', 'pedicure-makeup-store' ); ?></h4></strong></th>
								</tr> 
							</thead>
							<tbody>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Customizer Theme Options', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Footer Widget', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Inner Pages Settings', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Blog Sidebar', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Responsive Design (Mobile, Tablets)', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Sidebar Options (Full, Left and Right)', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( '1 Click Demo Import', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Preloader', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-yes"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Contact Form', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Advance Typography', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'WooCommerce Settings', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Extra Customizer Settings', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Sticky Header', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'More Color Options', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Related Posts Section', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Footer Columns Settings', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr>
								<tr> 
				 					<td class="tbody-column1"><?php esc_html_e( 'Priority Support', 'pedicure-makeup-store' ); ?></td>
				 					<td class="tbody-column2"><span class="dashicons dashicons-no-alt"></span></td>
				 					<td class="tbody-column3"><span class="dashicons dashicons-yes"></span></td>
								</tr> 
								<tr class="last-row"> 
						 					<td class="tbody-column1"></td>
						 					<td class="tbody-column2"></td>
						 					<td class="tbody-column3"><a class="button button-primary button-large" href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_PRO_URL); ?>" target="_blank"><?php esc_html_e( 'Upgrade to PRO', 'pedicure-makeup-store' ); ?></a></td>
										</tr> 
			   				</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="bundle-detail">
			<div class="second-side">
				<div class="bundle-wrapper">
					<h3 class="info-theme-name"><?php esc_html_e( 'Bundle up and save! Unlock all our stunning themes in one exclusive pack.', 'pedicure-makeup-store' ); ?> </h3>
					<div class="scrnsht-box bundlee">
                   			<img class="scrnshot-img" src="<?php echo esc_url( get_template_directory_uri() . '/img/bundle.png' ); ?>" alt="<?php esc_attr_e('bundle-img', 'pedicure-makeup-store'); ?>">
					</div>
					<div class="info-pro-btn">
						<a class="button button-primary button-large bundle-btn" href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_BUNDLE_URL); ?>" target="_blank"><?php esc_html_e( 'GET ALL THEMES – $59', 'pedicure-makeup-store' ); ?></a>
					</div>
					<div class="info-pro-btn">
						<a href="<?php echo esc_url(admin_url($pedicure_makeup_store_demo_redirect_url_getstart)); ?>" class="button button-primary button-large demo-btn btn" >
							<span class="demo-btn-txt"><?php echo esc_html__( 'DEMO CONTENT IMPORTER', 'pedicure-makeup-store' ); ?></span>
						</a>
					</div>
					<div class="info-pro-btn">
						<a class="button button-primary button-large" href="<?php echo esc_url(PEDICURE_MAKEUP_STORE_THEME_PRO_URL); ?>" target="_blank"><?php esc_html_e( 'UPGRADE TO PRO', 'pedicure-makeup-store' ); ?></a>
					</div>
				</div>
			</div>
		</div>	
	</div>
<?php
}