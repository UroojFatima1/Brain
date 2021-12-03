<?php 


/**
 *  Defining Constants
 */

// Core Constants
define('COLON_PLUS_REQUIRED_PHP_VERSION', '5.6' );
define('COLON_PLUS_THEME_AUTH','https://www.spiraclethemes.com/');
define('COLON_PLUS_MINIFY', get_theme_mod('colon_enable_minify_styles_scripts',true));


/**
* Check for minimum PHP version requirement 
*
*/
function colon_plus_check_theme_setup( $oldtheme_name, $oldtheme ){
  	// Compare versions.
  	if ( version_compare(phpversion(), COLON_PLUS_REQUIRED_PHP_VERSION, '<') ) :
	  	// Theme not activated info message.
	  	add_action( 'admin_notices', 'colon_plus_php_admin_notice' );
	  	function colon_plus_php_admin_notice() {
	    	?>
	      		<div class="update-nag">
	          		<?php 
	          			esc_html_e( 'You need to update your PHP version to a minimum of 5.6 to run Colon Plus WordPress Theme.', 'colon-plus' ); 
	          		?> 
	          		<br />
	          		<?php esc_html_e( 'Actual version is:', 'colon-plus' ) ?> 
	          		<strong><?php echo phpversion(); ?></strong>, 
	          		<?php esc_html_e( 'required is', 'colon-plus' ) ?> 
	          		<strong><?php echo COLON_PLUS_REQUIRED_PHP_VERSION; ?></strong>
	      		</div>
	    	<?php
	  	}
		// Switch back to previous theme.
		switch_theme( $oldtheme->stylesheet );
		return false;
	endif;
}
add_action( 'after_switch_theme', 'colon_plus_check_theme_setup', 10, 2  );



/**
 * Colon Plus theme functions
 */	
function colon_plus_theme_setup(){

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	//remove theme support for new widgets block editor
	remove_theme_support( 'widgets-block-editor' );
    
    remove_action( 'admin_menu', 'colon_add_menu' );
    remove_action( 'enqueue_block_editor_assets', 'colon_block_editor_width_styles' );
	
	add_action('wp_enqueue_scripts', 'colon_plus_load_scripts');

	/**
	 * Colon plus custom posts thumbs size
	 */
	add_image_size( 'colon-plus-posts-thumb', 150, 100, true );

	/**
	* Adding translation file
	*/
	$path = get_stylesheet_directory().'/languages';
    load_child_theme_textdomain( 'colon-plus', $path );

    if ( is_customize_preview() ) :
    	require_once( get_stylesheet_directory(). '/inc/starter-content.php' );
		add_theme_support( 'starter-content', colon_plus_get_starter_content() );
	endif;
}
add_action( 'after_setup_theme', 'colon_plus_theme_setup', 99 );


/**
 * Load Scripts
 */
function colon_plus_load_scripts() {

	wp_register_style( 'colon-plus-style' , trailingslashit(get_stylesheet_directory_uri()).'style'. ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) .'.css', false, wp_get_theme()->get('Version'), 'all');
	wp_style_add_data( 'colon-plus-style', 'rtl', 'replace' );
	wp_style_add_data( 'colon-plus-style', 'suffix', '.min' );
	wp_enqueue_style( 'colon-plus-style' );
	if(!is_single() && !is_home()) :
		wp_register_style( 'colon-plus-blocks-frontend', trailingslashit(get_stylesheet_directory_uri()).'css/blocks-frontend'. ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) .'.css', false, wp_get_theme()->get('Version'), 'all');
		wp_style_add_data( 'colon-plus-blocks-frontend', 'rtl', 'replace' );
		wp_style_add_data( 'colon-plus-blocks-frontend', 'suffix', '.min' );
		wp_enqueue_style( 'colon-plus-blocks-frontend' );
	endif;
	// Main js
	wp_enqueue_script( 'colon-plus-script', trailingslashit(get_stylesheet_directory_uri()).'js/main' . ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) . '.js',array(), wp_get_theme()->get('Version'), true );
}

/**
 * Display dynamic CSS.
 */
function colon_plus_dynamic_css_wrap() {
    require_once( get_stylesheet_directory(). '/css/dynamic.css.php' );
    ?>
       	<style type="text/css" id="colon-plus-dynamic-style">
        	<?php echo colon_plus_dynamic_css_stylesheet(); ?>
       	</style>
    <?php 
}
add_action( 'wp_head', 'colon_plus_dynamic_css_wrap',20 );


/**
 * Admin scripts
 */
if ( ! function_exists( 'colon_plus_admin_scripts' ) ) :
function colon_plus_admin_scripts($hook) {
    if('appearance_page_colon-plus-theme-info' != $hook)
    	return;  
    wp_enqueue_style( 'colon-plus-info', trailingslashit(get_stylesheet_directory_uri()).'css/colon-plus-theme-info.css', false );
}
endif;
add_action( 'admin_enqueue_scripts', 'colon_plus_admin_scripts' );


/**
 * Adding class to body
 */
if ( ! function_exists( 'colon_plus_add_classes_to_body' ) ) :
function colon_plus_add_classes_to_body($classes = '') {
    return array_merge( $classes, array( 'colon-plus' ) );
}
endif;
add_filter('body_class', 'colon_plus_add_classes_to_body');


/**
 * Function for Minimizing dynamic CSS
 */
function colon_plus_minimize_css($css){
    $css = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $css);
    $css = preg_replace('/\s{2,}/', ' ', $css);
    $css = preg_replace('/\s*([:;{}])\s*/', '$1', $css);
    $css = preg_replace('/;}/', '}', $css);
    return $css;
}


/**
 * Load our Block Editor styles to style the Editor like the front-end
 */
if ( ! function_exists( 'colon_plus_block_editor_width_styles' ) ) :
function colon_plus_block_editor_width_styles() {
	$colon_plus_layout_width = 1200;
	$styles = '';

	wp_register_style( 'colon-plus-blocks-style', trailingslashit(get_stylesheet_directory_uri()).'css/blocks-style'. ( ( COLON_PLUS_MINIFY ) ? '.min' : '' )  .'.css',  array(), '1.0.0', 'all');
	wp_style_add_data( 'colon-plus-blocks-style', 'rtl', 'replace' );
	wp_style_add_data( 'colon-plus-blocks-style', 'suffix', '.min' );
	wp_enqueue_style( 'colon-plus-blocks-style' );

	// Increase width of Title
	$styles .= 'body.gutenberg-editor-page .edit-post-visual-editor .editor-post-title .editor-post-title__block {max-width: ' . esc_attr( $colon_plus_layout_width - 10 ) . 'px;}';

	// Increase width of all Blocks & Block Appender
	$styles .= 'body.gutenberg-editor-page .edit-post-visual-editor .editor-block-list__block {max-width: ' . esc_attr( $colon_plus_layout_width - 10 ) . 'px;}';
	$styles .= 'body.gutenberg-editor-page .edit-post-visual-editor .editor-default-block-appender {max-width: ' . esc_attr( $colon_plus_layout_width - 10 ) . 'px;}';

	// Increase width of Wide blocks
	$styles .= 'body.gutenberg-editor-page .edit-post-visual-editor .editor-block-list__block[data-align="wide"] {max-width: ' . esc_attr( $colon_plus_layout_width - 10 + 400 ) . 'px;}';

	// Remove max-width on Full blocks
	$styles .= 'body.gutenberg-editor-page .edit-post-visual-editor .editor-block-list__block[data-align="full"] {max-width: none;}';

	// Adding dynamic color
	$styles .= '.wp-block-button__link, .wc-block-grid__product-onsale, .wp-block-search .wp-block-search__button {background-color: ' .sanitize_hex_color(get_theme_mod( 'colon_site_primary_color','#cc9866' )) .';}';

	// Output our styles into the <head> whenever our block styles are enqueued
	wp_add_inline_style( 'colon-plus-blocks-style', $styles );
}
endif;
add_action( 'enqueue_block_editor_assets', 'colon_plus_block_editor_width_styles' );


/**
 * Check WooCommerce is active
*/
if ( ! function_exists( 'colon_plus_is_woocommerce_activated' ) ) :
	function colon_plus_is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
endif;



/** 
*  Plugins Required
*/
function colon_plus_register_required_plugins() {
    $plugins = array(      
      	array(
          'name'               => 'Elementor Website Builder',
          'slug'               => 'elementor',
          'source'             => '',
          'required'           => false,          
          'force_activation'   => false,
      	),
    );

    $config = array(
            'id'           => 'colon-plus',
            'default_path' => '',
            'menu'         => 'tgmpa-install-plugins',
            'has_notices'  => true,
            'dismissable'  => true,
            'dismiss_msg'  => '',
            'is_automatic' => false,
            'message'      => '',
            'strings'      => array()
    );

    tgmpa( $plugins, $config );

}
add_action( 'tgmpa_register', 'colon_plus_register_required_plugins' );



/**
* Includes
*/

//include info
require_once( get_stylesheet_directory(). '/inc/theme-info.php' );


//include customizer
require_once( get_stylesheet_directory(). '/inc/customizer/customizer.php' );


//include template functions
require_once( get_stylesheet_directory(). '/inc/template-functions.php' );


//include widgetss
require_once( get_stylesheet_directory(). '/inc/widgets.php' );


/**
 * Upgrade to Pro
 */
require_once( get_stylesheet_directory(). '/colon-plus-pro/class-customize.php' );
