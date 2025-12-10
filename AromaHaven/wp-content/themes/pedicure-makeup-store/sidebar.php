<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Pedicure Makeup Store
 */


?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'primary-sidebar' ); ?>
</aside><!-- #secondary -->

<?php if ( ! is_active_sidebar( 'primary-sidebar' ) ) { ?>

	<aside id="secondary" class="widget-area" role="complementary">
		<!-- Search -->
		<aside id="search-3" class="widget widget_search">
			<h2 class="widget-title"><?php esc_html_e('Search Here', 'pedicure-makeup-store'); ?></h2>
			<?php get_search_form(); ?>
		</aside>
		<!-- Categories -->
		<aside id="categories" class="widget widget_categories" role="complementary" aria-label="<?php esc_attr_e( 'secondsidebar', 'pedicure-makeup-store' ); ?>">
		    <h2 class="widget-title"><?php esc_html_e('Categories', 'pedicure-makeup-store'); ?></h2>
		    <ul>
		        <?php
		        $args = array(
		            'title_li' => '',
		        );
		        wp_list_categories($args);
		        ?>
		    </ul>
		</aside>
		<!-- Archive -->
		<aside id="archive" class="widget widget_archive" role="complementary" aria-label="<?php esc_attr_e( 'secondsidebar', 'pedicure-makeup-store' ); ?>">
		    <h2 class="widget-title"><?php esc_html_e('Archive List', 'pedicure-makeup-store'); ?></h2>
		    <ul>
		        <?php wp_get_archives('type=monthly'); ?>
		    </ul>
		</aside>
		<!-- Tag Sidebar -->
		<aside id="tag-sidebar" class="widget widget_tag_cloud" role="complementary" aria-label="<?php esc_attr_e( 'thirdsidebar', 'pedicure-makeup-store' ); ?>">
		    <h2 class="widget-title"><?php esc_html_e('Popular Tags', 'pedicure-makeup-store'); ?></h2>
		    <div class="tagcloud">
		        <?php
		        $pedicure_makeup_store_tags = get_tags(array(
		            'orderby' => 'count',
		            'order'   => 'DESC',
		            'number'  => 20, // You can change the number of tags displayed
		        ));

		        if ($pedicure_makeup_store_tags) {
		            foreach ($pedicure_makeup_store_tags as $pedicure_makeup_store_tag) {
		                $pedicure_makeup_store_tag_link = get_tag_link($pedicure_makeup_store_tag->term_id);
		                $pedicure_makeup_store_tag_name = $pedicure_makeup_store_tag->name;
		                $pedicure_makeup_store_tag_count = $pedicure_makeup_store_tag->count;
		                echo '<a href="' . esc_url($pedicure_makeup_store_tag_link) . '" class="tag-link" title="' . esc_attr($pedicure_makeup_store_tag_name) . ' (' . $pedicure_makeup_store_tag_count . ' posts)">' . esc_html($pedicure_makeup_store_tag_name) . '</a> ';
		            }
		        } else {
		            echo '<p>' . esc_html__('No tags found.', 'pedicure-makeup-store') . '</p>';
		        }
		        ?>
		    </div>
		</aside>	
	</aside>

<?php } ?>
