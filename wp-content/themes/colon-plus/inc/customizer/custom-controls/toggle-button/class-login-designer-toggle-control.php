<?php
/**
 * Toggle Customizer Control
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) :
	exit;
endif;

// Exit if Colon_Plus_Toggle_Control exists and WP_Customize_Control does not exsist.
if ( class_exists('Colon_Plus_Toggle_Control') && ! class_exists( 'WP_Customize_Control' ) ) :
	return null;
endif;

/**
 * This class is for the toggle control in the Customizer.
 *
 * @access public
 */
class Colon_Plus_Toggle_Control extends WP_Customize_Control {

	/**
	 * The type of customize control.
	 *
	 * @access public
	 * @var    string
	 */
	public $type = 'colon-plus-toggle';

	/**
	 * Enqueue scripts and styles.
	 *
	 * @access public
	 * @return void
	 */
	public function enqueue() {
		wp_enqueue_style( 'colon-plus-toggle-control-styles', trailingslashit(get_stylesheet_directory_uri()). 'inc/customizer/custom-controls/toggle-button/toggle' . ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) . '.css', false, '1.0.0', 'all' );
		wp_enqueue_script( 'colon-plus-toggle-control-scripts', trailingslashit(get_stylesheet_directory_uri()). 'inc/customizer/custom-controls/toggle-button/toggle' . ( ( COLON_PLUS_MINIFY ) ? '.min' : '' ) . '.js', array( 'jquery' ), '1.0.0', true );
	}

	/**
	 * Add custom parameters to pass to the JS via JSON.
	 *
	 * @access public
	 * @return void
	 */
	public function to_json() {
		parent::to_json();

		// The setting value.
		$this->json['label']        = esc_html($this->label);
		$this->json['id']           = esc_html($this->id);
		$this->json['value']        = absint($this->value());
		$this->json['link']         = esc_url($this->get_link());
		$this->json['defaultValue'] = esc_html($this->setting->default);
	}

	/**
	 * Don't render the content via PHP.  This control is handled with a JS template.
	 *
	 * @access public
	 * @return void
	 */
	public function render_content() {}

	/**
	 * An Underscore (JS) template for this control's content.
	 *
	 * Class variables for this control class are available in the `data` JS object;
	 * export custom variables by overriding {@see WP_Customize_Control::to_json()}.
	 *
	 * @see    WP_Customize_Control::print_template()
	 *
	 * @access protected
	 * @return void
	 */
	protected function content_template() {
		?>
		<label class="toggle">
			<div class="toggle--wrapper">

				<# if ( data.label ) { #>
					<span class="customize-control-title">{{ data.label }}</span>
				<# } #>

				<input id="toggle-{{ data.id }}" type="checkbox" class="toggle--input" value="{{ data.value }}" {{{ data.link }}} <# if ( data.value ) { #> checked="checked" <# } #> />
				<label for="toggle-{{ data.id }}" class="toggle--label"></label>
			</div>

			<# if ( data.description ) { #>
				<span class="description customize-control-description">{{ data.description }}</span>
			<# } #>
		</label>
		<?php
	}
}
