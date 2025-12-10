<div class="theme-offer">
<?php

    function pedicure_makeup_store_create_customizer_nav_menu() {
        // ------- Create Nav Menu --------
        $pedicure_makeup_store_menuname = 'Primary';
        $pedicure_makeup_store_menulocation = 'primary';
        $pedicure_makeup_store_menu_exists = wp_get_nav_menu_object($pedicure_makeup_store_menuname);

        if (!$pedicure_makeup_store_menu_exists) {
            $pedicure_makeup_store_menu_id = wp_create_nav_menu($pedicure_makeup_store_menuname);

            wp_update_nav_menu_item($pedicure_makeup_store_menu_id, 0, array(
                'menu-item-title' => __('Home', 'pedicure-makeup-store'),
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
            ));

            wp_update_nav_menu_item($pedicure_makeup_store_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'pedicure-makeup-store'),
                'menu-item-url' => home_url('/index.php/about-us/'),
                'menu-item-status' => 'publish',
            ));

            wp_update_nav_menu_item($pedicure_makeup_store_menu_id, 0, array(
                'menu-item-title' => __('Services', 'pedicure-makeup-store'),
                'menu-item-url' => home_url('/index.php/services/'),
                'menu-item-status' => 'publish',
            ));

            wp_update_nav_menu_item($pedicure_makeup_store_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'pedicure-makeup-store'),
                'menu-item-url' => home_url('/index.php/pages/'),
                'menu-item-status' => 'publish',
            ));

            wp_update_nav_menu_item($pedicure_makeup_store_menu_id, 0, array(
                'menu-item-title' => __('Blog', 'pedicure-makeup-store'),
                'menu-item-url' => home_url('/index.php/blog/'),
                'menu-item-status' => 'publish',
            ));

            // Set menu to location
            $pedicure_makeup_store_locations = get_theme_mod('nav_menu_locations');
            if (!is_array($pedicure_makeup_store_locations)) {
                $pedicure_makeup_store_locations = array();
            }
            $pedicure_makeup_store_locations[$pedicure_makeup_store_menulocation] = $pedicure_makeup_store_menu_id;
            set_theme_mod('nav_menu_locations', $pedicure_makeup_store_locations);
        }
    }

    // POST and update the customizer and other related data of Pedicure Makeup Store
    if (isset($_POST['submit'])) {

        // -------- Plugin Installation and Activation (WooCommerce & Classic Widgets) -------- //
        include_once(ABSPATH . 'wp-admin/includes/plugin.php');
        include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
        include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');
        include_once(ABSPATH . 'wp-admin/includes/file.php');
        include_once(ABSPATH . 'wp-admin/includes/misc.php');

        // Plugin list
        $pedicure_makeup_store_plugins = array(
            array(
                'slug' => 'woocommerce',
                'file' => 'woocommerce/woocommerce.php',
                'download_url' => 'https://downloads.wordpress.org/plugin/woocommerce.zip'
            ),
            array(
                'slug' => 'woocommerce-currency-switcher',
                'file' => 'woocommerce-currency-switcher/woocommerce-currency-switcher.php',
                'download_url' => 'https://downloads.wordpress.org/plugin/woocommerce-currency-switcher.zip'
            ),
            array(
                'slug' => 'gtranslate',
                'file' => 'gtranslate/gtranslate.php',
                'download_url' => 'https://downloads.wordpress.org/plugin/gtranslate.zip'
            ),
            array(
                'slug' => 'classic-widgets',
                'file' => 'classic-widgets/classic-widgets.php',
                'download_url' => 'https://downloads.wordpress.org/plugin/classic-widgets.zip'
            )
        );

        foreach ($pedicure_makeup_store_plugins as $plugin) {
            $installed_plugins = get_plugins();

            // Install the plugin if it's not installed
            if (!isset($installed_plugins[$plugin['file']])) {
                $upgrader = new Plugin_Upgrader();
                $upgrader->install($plugin['download_url']);
            }

            // Activate the plugin if it's not active
            if (file_exists(WP_PLUGIN_DIR . '/' . $plugin['file']) && !is_plugin_active($plugin['file'])) {
                activate_plugin($plugin['file']);
            }
        }

        // ------- Create Menu --------
        pedicure_makeup_store_create_customizer_nav_menu();

        // ------- Create Pages --------
        function create_demo_page($title, $content = '', $template = '') {
            $page_id = pedicure_makeup_store_get_page_id_by_title($title);
        
            if (!$page_id) {
                $page_data = array(
                    'post_type'    => 'page',
                    'post_title'   => $title,
                    'post_content' => $content,
                    'post_status'  => 'publish',
                    'post_author'  => 1,
                );
        
                $page_id = wp_insert_post($page_data);
        
                if ($template && !is_wp_error($page_id)) {
                    update_post_meta($page_id, '_wp_page_template', $template);
                }
            }
        
            return $page_id;
        }
        

        $pedicure_makeup_store_home_id = create_demo_page('Home', '', 'home/home.php');
        update_option('page_on_front', $pedicure_makeup_store_home_id);
        update_option('show_on_front', 'page');

        create_demo_page('Pages', '<p>Lorem Ipsum ...</p>');
        create_demo_page('About Us', '<p>Lorem Ipsum ...</p>');
        create_demo_page('Services', '<p>Service description...</p>');

        // Create blog page and assign it to display posts
        $blog_page_id = create_demo_page('Blog');
        update_option('page_for_posts', $blog_page_id);

        // Create the nav menu
        pedicure_makeup_store_create_customizer_nav_menu();

        // ------- Set Theme Mods --------

        set_theme_mod('pedicure_makeup_store_shipping_text', 'Enjoy Free Shipping For Orders Over $30!');
        set_theme_mod('pedicure_makeup_store_topbar_button_text', 'Shop Now');
        set_theme_mod('pedicure_makeup_store_tpobar_button_url', '#');

        set_theme_mod('pedicure_makeup_store_social_media1_heading', '#');
        set_theme_mod('pedicure_makeup_store_social_media2_heading', '#');
        set_theme_mod('pedicure_makeup_store_social_media3_heading', '#');
        set_theme_mod('pedicure_makeup_store_social_media4_heading', '#');
        set_theme_mod('pedicure_makeup_store_social_media5_heading', '#');
        set_theme_mod('pedicure_makeup_store_social_media6_heading', '#');

        set_theme_mod('pedicure_makeup_store_header_phone_head', 'Hotline 24/7');
        set_theme_mod('pedicure_makeup_store_header_phone_number', '1 917-991-9010');

        set_theme_mod('pedicure_makeup_store_topbar1_wishlist_url', '#');

        set_theme_mod('pedicure_makeup_store_header_sell_button', 'Sell on Swoo');
        set_theme_mod('pedicure_makeup_store_header_sell_button_url', '#');

        set_theme_mod('pedicure_makeup_store_header_tracking_button', 'Order Tracking');
        set_theme_mod('pedicure_makeup_store_header_tracking_button_url', '#');

        set_theme_mod('pedicure_makeup_store_header_recent_view_button', 'Recently Viewed');
        set_theme_mod('pedicure_makeup_store_header_recent_view_button_url', '#');

        // ------- Category Section --------

        set_theme_mod( 'pedicure_makeup_store_activities_section_setting',true);

        set_theme_mod( 'pedicure_makeup_store_popular_heading', 'Popular Categories');

        $title_theme =   array('Hair care','Skin care','Lip stick','Face Pack','Blushers','Natural','Body Care','Cheeks','Eyes','Nails');
        for ($i=1; $i <= 10; $i++) { 
            $terms_data = wp_insert_term(
                $title_theme[ $i - 1 ],
                'product_cat',
                array()
            );

            $pedicure_makeup_store_image_url = get_template_directory_uri().'/img/category'.$i.'.png';

            $pedicure_makeup_store_image_name= 'category'.$i.'.png';
            $pedicure_makeup_store_upload_dir       = wp_upload_dir(); 
            // Set upload folder
            $pedicure_makeup_store_image_data       = file_get_contents($pedicure_makeup_store_image_url); 
             
            // Get image data
            $pedicure_makeup_store_unique_file_name = wp_unique_filename( $pedicure_makeup_store_upload_dir['path'], $pedicure_makeup_store_image_name ); 
            // Generate unique name
            $filename= basename( $pedicure_makeup_store_unique_file_name ); 
            // Create image file name
            // Check folder permission and define file location
            if( wp_mkdir_p( $pedicure_makeup_store_upload_dir['path'] ) ) {
                $file = $pedicure_makeup_store_upload_dir['path'] . '/' . $filename;
            } else {
                $file = $pedicure_makeup_store_upload_dir['basedir'] . '/' . $filename;
            }
            if ( ! function_exists( 'WP_Filesystem' ) ) {
                    require_once( ABSPATH . 'wp-admin/includes/file.php' );
                }
                
                WP_Filesystem();
                global $wp_filesystem;
                
                if ( ! $wp_filesystem->put_contents( $file, $pedicure_makeup_store_image_data, FS_CHMOD_FILE ) ) {
                    wp_die( 'Error saving file!' );
                }
            $pedicure_makeup_store_wp_filetype = wp_check_filetype( $filename, null );
            $pedicure_makeup_store_attachment = array(
                'post_mime_type' => $pedicure_makeup_store_wp_filetype['type'],
                'post_title'     => sanitize_file_name( $filename ),
                'post_content'   => '',
                'post_type'     => 'post',
                'post_status'    => 'inherit'
            );
            $pedicure_makeup_store_attach_id = wp_insert_attachment( $pedicure_makeup_store_attachment, $file );

            if (!is_wp_error($terms_data) && isset($terms_data['term_id'])) {
                update_term_meta( $terms_data['term_id'], 'thumbnail_id', $pedicure_makeup_store_attach_id );
            }

        }

        // ------- Product Section --------

    set_theme_mod( 'pedicure_makeup_store_product_main_heading', 'Best Seller Of Cosmetics');

    set_theme_mod( 'pedicure_makeup_store_product_main_content', 'View All Product');
        
    set_theme_mod( 'pedicure_makeup_store_product_count', '4' );

    $pedicure_makeup_store_product_category = wp_create_category('cosmetic-product'); 
    set_theme_mod('pedicure_makeup_store_product_category', get_cat_name($pedicure_makeup_store_product_category));

    wp_insert_term(
      'cosmetic-product', // the term
      'product_cat', // the taxonomy
      array(
      'description'=> '',
      'slug' => 'cosmetic-product',
      'term_id'=>12,
      'term_taxonomy_id'=>34,
    ));

    if ( class_exists( 'WooCommerce' ) ) {
      for($i=1;$i<=4;$i++) {
        $title_theme_product =   array('Pantene Pro-V Shampoo','Vaseline Intensive Care','Dove Mens Dandruff Lotion','Lip & Cheek Tint In Prim');
        $content = 'Lorem ipsum dolor sit amet, tetur piscing elit. Suspendisse smod congue bibendum.';

        // Create post object
        $pedicure_makeup_store_post = array(
          'post_title'    => wp_strip_all_tags( $title_theme_product[ $i - 1 ] ),
          'post_content'  => $content,
          'post_status'   => 'publish',
          'post_type'     => 'product',
          'product_cat'   => array($pedicure_makeup_store_product_category)
        );

        // Insert the post into the database
        $pedicure_makeup_store_product_id = wp_insert_post( $pedicure_makeup_store_post );

        // Gets term object from Tree in the database.
        $term = get_term_by('name', 'cosmetic-product', 'product_cat');
        
        wp_set_object_terms($pedicure_makeup_store_product_id, $term->term_id, 'product_cat');

        update_post_meta( $pedicure_makeup_store_product_id, '_price', '$65' );
        update_post_meta( $pedicure_makeup_store_product_id, '_sale_price', "$65" );
        update_post_meta( $pedicure_makeup_store_product_id, '_regular_price', "$49" );

        $pedicure_makeup_store_product_image_url = get_template_directory_uri().'/img/prod'.$i.'.png';

      $pedicure_makeup_store_product_image_name = 'prod'.$i.'.png';
      $pedicure_makeup_store_product_upload_dir       = wp_upload_dir();

      // Set upload folder
      $pedicure_makeup_store_product_image_data       = file_get_contents($pedicure_makeup_store_product_image_url); 
       
      // Get image data
      $pedicure_makeup_store_product_unique_file_name = wp_unique_filename( $pedicure_makeup_store_product_upload_dir['path'], $pedicure_makeup_store_product_image_name ); 
      
      // Generate unique name
      $filename= basename( $pedicure_makeup_store_product_unique_file_name ); 
      
      // Create image file name
      // Check folder permission and define file location
      if( wp_mkdir_p( $pedicure_makeup_store_product_upload_dir['path'] ) ) {
          $file = $pedicure_makeup_store_product_upload_dir['path'] . '/' . $filename;
      } else {
          
          $file = $pedicure_makeup_store_product_upload_dir['basedir'] . '/' . $filename;
      }

      // Create the image  file on the server
      if ( ! function_exists( 'WP_Filesystem' ) ) {
            require_once( ABSPATH . 'wp-admin/includes/file.php' );
        }

        WP_Filesystem();
        global $wp_filesystem;

        if ( ! $wp_filesystem->put_contents( $file, $pedicure_makeup_store_product_image_data, FS_CHMOD_FILE ) ) {
            wp_die( 'Error saving file!' );
        }

      $wp_filetype = wp_check_filetype( $filename, null );
      $pedicure_makeup_store_product_attachment = array(
          'post_mime_type' => $wp_filetype['type'],
          'post_title'     => sanitize_file_name( $filename ),
          'post_content'   => '',
          'post_type'     => 'product',
          'post_status'    => 'inherit'
      );
     
      $attach_id = wp_insert_attachment( $pedicure_makeup_store_product_attachment, $file, $pedicure_makeup_store_product_id );
      require_once(ABSPATH . 'wp-admin/includes/image.php');
      $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
          wp_update_attachment_metadata( $attach_id, $attach_data );
          set_post_thumbnail( $pedicure_makeup_store_product_id, $attach_id );
        
      }
    }

    // ------- Category Section -------- //

    set_theme_mod( 'pedicure_makeup_store_services_on_off', 'off' );

    set_theme_mod('pedicure_makeup_store_card_number','3');

    $pedicure_makeup_store_card_main_heading=array('Skincare', 'Candice Green', 'Whats News');

    $pedicure_makeup_store_card_sub_heading=array('Organic Ingredients', 'Creative Digression, Makeup', 'Shop Our New Arrivals!');

    for ($i=1; $i <= 3; $i++) {
        set_theme_mod('pedicure_makeup_store_card_main_heading'.$i, $pedicure_makeup_store_card_main_heading[$i - 1]);
        set_theme_mod('pedicure_makeup_store_card_sub_heading'.$i, $pedicure_makeup_store_card_sub_heading[$i - 1]);
        set_theme_mod('pedicure_makeup_store_card_button_text'.$i, 'Shop Now');
        set_theme_mod('pedicure_makeup_store_card_button_url'.$i, '#');
        set_theme_mod( 'pedicure_makeup_store_card_products_image'.$i, get_template_directory_uri().'/img/collection'.$i.'.png' );
    }

        echo '<div class="success">Demo Import Successful</div>';
    }
?>

<ul>
    <li>
        <hr>
        <?php if (!isset($_POST['submit'])) : ?>
            <?php echo esc_html__('Click on the below button to get demo content installed.', 'pedicure-makeup-store'); ?>
            <br>
            <form id="demo-importer-form" action="" method="POST" onsubmit="return confirm('Do you really want to do this?');">
                <input class="run-btn" type="submit" name="submit" value="<?php echo esc_attr('Run Importer', 'pedicure-makeup-store'); ?>">
            </form>
        <?php else: ?>
            <div class="visit">
                <a href="<?php echo esc_url(home_url()); ?>" class="button button-primary button-large run-btn" style="margin-top: 10px;" target="_blank">View Site</a>
            </div>
        <?php endif; ?>
        <hr>
    </li>
</ul>
</div>