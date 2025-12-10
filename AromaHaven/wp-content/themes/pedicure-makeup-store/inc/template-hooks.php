<?php
/**
 * Custom template hooks for this theme.
 *
 * @package Pedicure Makeup Store
 */


/**
 * Before title meta hook
 */
if ( ! function_exists( 'pedicure_makeup_store_before_title' ) ) :
function pedicure_makeup_store_before_title() {
	do_action('pedicure_makeup_store_before_title');
}
endif;


/**
 * Before title content hook
 */
if ( ! function_exists( 'pedicure_makeup_store_before_title_content' ) ) :
	function pedicure_makeup_store_before_title_content() {
		do_action('pedicure_makeup_store_before_title_content');
	}
endif;


/**
 * After title content hook
 */
if ( ! function_exists( 'pedicure_makeup_store_after_title_content' ) ) :
	function pedicure_makeup_store_after_title_content() {
		do_action('pedicure_makeup_store_after_title_content');
	}
endif;


/**
 * After title meta hook
 */
if ( ! function_exists( 'pedicure_makeup_store_after_title' ) ) :
function pedicure_makeup_store_after_title() {
	do_action('pedicure_makeup_store_after_title');
}
endif;

/**
 * Single post content after meta hook
 */
if ( ! function_exists( 'pedicure_makeup_store_single_post_after_content' ) ) :
	function pedicure_makeup_store_single_post_after_content($postID) {
		do_action('pedicure_makeup_store_single_post_after_content',$postID);
	}
endif;