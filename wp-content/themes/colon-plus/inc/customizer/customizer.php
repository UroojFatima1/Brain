<?php
/**
 * Colon Plus Theme Customizer
 *
 * @package colon-plus
 */



if ( ! function_exists( 'colon_plus_customize_register' ) ) :
function colon_plus_customize_register( $wp_customize ) {

    // Add custom controls.
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/info/class-info-control.php' );
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/info/class-title-info-control.php' );
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/toggle-button/class-login-designer-toggle-control.php' );
    require_once( get_stylesheet_directory(). '/inc/customizer/custom-controls/slider/class-slider-control.php' );



    // Title label
    $wp_customize->add_setting( 
        'colon_plus_label_blog_excerpt_show', 
        array(
            'sanitize_callback' => 'colon_plus_sanitize_title',
        ) 
    );

    $wp_customize->add_control( 
        new Colon_Plus_Title_Info_Control( $wp_customize, 'colon_plus_label_blog_excerpt_show', 
        array(
            'label'       => esc_html__( 'Blog Excerpt', 'colon-plus' ),
            'section'     => 'colon_posts_settings',
            'type'        => 'colon-plus-title',
            'settings'    => 'colon_plus_label_blog_excerpt_show',
        ) 
    ));

    // Excerpt length
    $wp_customize->add_setting( 
        'colon_plus_blog_excerpt_length', 
        array(
            'default' => 70,
            'sanitize_callback' => 'absint',
        ) 
    );

    $wp_customize->add_control( 
        new Colon_Plus_Slider_Control( $wp_customize, 'colon_plus_blog_excerpt_length', 
        array(
            'label' => esc_html__( 'Excerpt Length','colon-plus' ),
            'description' => esc_html__( 'Default is 70','colon-plus' ),
            'section' => 'colon_posts_settings',
            'input_attrs' => array(
                'min' => 0, 
                'max' => 1000,
                'step' => 1,
            ),
        )
    ));



}
endif;
add_action( 'customize_register', 'colon_plus_customize_register' );



/**
 * Sanitize checkbox.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
if ( ! function_exists( 'colon_plus_sanitize_checkbox' ) ) :
function colon_plus_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
endif;


/**
 * URL sanitization.
 *
 * @see esc_url_raw() https://developer.wordpress.org/reference/functions/esc_url_raw/
 *
 * @param string $url URL to sanitize.
 * @return string Sanitized URL.
 */
if ( ! function_exists( 'colon_plus_sanitize_url' ) ) :
function colon_plus_sanitize_url( $url ) {
    return esc_url_raw( $url );
}
endif;


/**
 * String sanitization.
 *
 * @see sanitize_text_field() https://developer.wordpress.org/reference/functions/sanitize_text_field/
 *
 * @param string $str to sanitize.
 * @return string Sanitized string.
 */
if ( ! function_exists( 'colon_plus_sanitize_text_field' ) ) :
function colon_plus_sanitize_text_field( $str ) {
    return sanitize_text_field( $str );
}
endif;


/**
 * Multiline String sanitization.
 *
 * @see sanitize_textarea_field() https://developer.wordpress.org/reference/functions/sanitize_textarea_field/
 *
 * @param string $str to sanitize.
 * @return string Sanitized string.
 */
if ( ! function_exists( 'colon_plus_sanitize_textarea_field' ) ) :
function colon_plus_sanitize_textarea_field( $str ) {
    return sanitize_textarea_field( $str );
}
endif;


/**
 * Select sanitization.
 */
if ( ! function_exists( 'colon_plus_sanitize_select' ) ) :
function colon_plus_sanitize_select( $input, $setting ) {
    // Ensure input is a slug.
    $input = sanitize_key( $input );
    // Get list of choices from the control associated with the setting.
    $choices = $setting->manager->get_control( $setting->id )->choices;
    // If the input is a valid key, return it; otherwise, return the default.
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}
endif;

/**
 * Title sanitization.
 */
if ( ! function_exists( 'colon_plus_sanitize_title' ) ) :
function colon_plus_sanitize_title( $str ) {
    return sanitize_title( $str );  
}
endif;



/**
 * Enqueue the customizer stylesheet.
 */
if ( ! function_exists( 'colon_plus_enqueue_customizer_stylesheets' ) ) :
function colon_plus_enqueue_customizer_stylesheets() {
    wp_register_style( 'colon-plus-customizer', trailingslashit(get_stylesheet_directory_uri()) . 'inc/customizer/assets/css/customizer.css', NULL, NULL, 'all' );
    wp_enqueue_style( 'colon-plus-customizer' );
    wp_enqueue_script( 'colon-plus-customizer-js', trailingslashit(get_stylesheet_directory_uri()) . 'inc/customizer/assets/js/customizer.js', false, true);
}
endif;
add_action( 'customize_controls_print_styles', 'colon_plus_enqueue_customizer_stylesheets' );