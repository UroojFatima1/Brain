<?php
/**
 * @package colon-plus
 */


/**
* Custom excerpt length.
*/

function colon_plus_excerpt_length( $length ) {
    return absint(get_theme_mod('colon_plus_blog_excerpt_length'));
}
add_filter( 'excerpt_length', 'colon_plus_excerpt_length', 999 );


/**
 * Add Class to body
 */

function colon_plus_body_class_blocks( $classes ) {
    if ( is_singular() && has_blocks() ) {
        $classes[] = 'has-blocks';
    }
    return $classes;
}
add_filter( 'body_class', 'colon_plus_body_class_blocks' );


/**
 * Remove class from woo pages
 */

function colon_plus_remove_blocks_cart ($wp_classes) {
    if ( colon_plus_is_woocommerce_activated() ) :
        if ( is_page( 'cart' ) || is_cart() || is_page( 'checkout' ) || is_checkout() || is_page( 'my-account' ) || is_account_page() ) :
            unset( $wp_classes[ array_search( "has-blocks", $wp_classes ) ] );
        endif;
    endif;
    return $wp_classes;
}
add_filter( 'body_class', 'colon_plus_remove_blocks_cart' );


/**
 *  Set View Count
 */
if ( ! function_exists( 'colon_plus_get_views_count' ) ) :
function colon_plus_get_views_count($postID) {
    colon_plus_set_postviews($postID);
}
endif;
add_action( 'colon_single_post_after_content', 'colon_plus_get_views_count' );

/*
 * Set post views count using post meta
 */
function colon_plus_set_postviews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}