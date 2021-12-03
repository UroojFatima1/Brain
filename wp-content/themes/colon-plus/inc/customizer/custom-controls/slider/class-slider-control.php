<?php
/**
 * Slider Customizer Control
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

// Exit if Colon_Plus_Slider_Control exists and WP_Customize_Control does not exsist.
if ( class_exists('Colon_Plus_Slider_Control') && ! class_exists( 'WP_Customize_Control' ) ) :
	return null;
endif;

/**
 * This class is for the slider control in the Customizer.
 *
 * @access public
 */
class Colon_Plus_Slider_Control extends WP_Customize_Control {
	
	/**
	 * Declare the control type.
	 *
	 * @access public
	 * @var string
	 */
	public $type = 'colon-plus-slider';
	
	/**
	 * Enqueue scripts and styles.
	 *
	 * @access public
	 * @return void
	 */
	public function enqueue() {
        wp_enqueue_script( 'colon-plus-slider-control-scripts', trailingslashit(get_stylesheet_directory_uri()) . 'inc/customizer/custom-controls/slider/slider' . ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) . '.js', array( 'jquery' ), '1.0.0', true );
        wp_enqueue_style( 'colon-plus-slider-control-css', trailingslashit(get_stylesheet_directory_uri()) . 'inc/customizer/custom-controls/slider/slider' . ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) . '.js', array(), '1.0', 'all' );
	}
	
	/**
	 * Render the control to be displayed in the Customizer.
	 */
	public function render_content() {
		?>
			<div class="slider-custom-control">
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<input type="number" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $this->value() ); ?>" class="customize-control-slider-value" <?php $this->link(); ?> />
				<div class="slider" slider-min-value="<?php echo esc_attr( $this->input_attrs['min'] ); ?>" slider-max-value="<?php echo esc_attr( $this->input_attrs['max'] ); ?>" slider-step-value="<?php echo esc_attr( $this->input_attrs['step'] ); ?>"></div><span class="slider-reset dashicons dashicons-image-rotate" slider-reset-value="<?php echo esc_attr( $this->value() ); ?>"></span>
			</div>
		<?php
	}
}
	
