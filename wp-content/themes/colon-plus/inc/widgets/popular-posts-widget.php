<?php

/**
 *  Popular Posts widget.
 */


if( ! class_exists('Colon_Plus_Popular_Posts_Widget')) :

class Colon_Plus_Popular_Posts_Widget extends WP_Widget {

	var $defaults;
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'colon_plus_popular_posts_widget', // Base ID
			esc_html__( 'Colon: Popular Posts Widget', 'colon-plus' ), // Name
			array( 'description' => esc_html__( 'Adds popular posts in Colon WordPress theme. ', 'colon-plus'), ) // Args
		);		     
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		extract( wp_parse_args( $instance, $this->defaults ) );
		$heading    = ! empty( $instance['heading'] ) ? esc_html($instance['heading']) : '';
		$no_of_posts = ( ! empty( $instance['no_of_posts'] ) ) ? absint( $instance['no_of_posts'] ) : 3;
		

		?>
			<div id="popular-posts-widget" class="widget widget-popular-posts">
		       	<h3 class="widget-title"><?php echo $heading; ?></h3>
		        <div class="latest-posts-lists-wrapper">
		            <div class="latest-posts-content">
		                <?php
		                    query_posts('meta_key=post_views_count&posts_per_page='. $no_of_posts .'&orderby=meta_value_num&order=DESC');
		                    if (have_posts()) : while (have_posts()) : the_post();
		                    ?>
		                        <div id="post-<?php the_ID(); ?>" class="popular-posts latest-category-post">
		                            <div class="popular-posts-content latest-category-post-content">
		                                <div class="section-popular-posts-area-box section-latest-posts-area-box">
		                                    <div class="col-first">
		                                        <div class="popular-post-image latest-post-image">
		                                            <?php
		                                                if(has_post_thumbnail()) {
		                                                    the_post_thumbnail('colon-plus-posts-thumb');
		                                                }
		                                                else{
		                                                    $post_img_url = get_stylesheet_directory_uri().'/img/no-image.jpg';
		                                                    ?><img src="<?php echo $post_img_url; ?>" alt="<?php esc_attr_e('post-image','colon-plus'); ?>" /><?php
		                                                }
		                                            ?>
		                                        </div>
		                                    </div>
		                                    <div class="col-second">
		                                        <div class="popular-posts-area-content latest-posts-area-content">
		                                            <div class="content-wrapper">
		                                                <div class="content-post">
		                                                    <div class="title">
		                                                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
		                                                    </div>
		                                                    <div class="meta-post">
		                                                        <span class="by"><?php esc_html_e('By: ','colon-plus') ?></span><span class="author"><a class="author-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author() ?></a></span><span class="separator"> | </span>
		                                                        <span class="date"><?php the_time(get_option('date_format')) ?></span>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                    <?php endwhile; endif;
		                    wp_reset_postdata();
		                ?>
		            </div>
		        </div>
		    </div>
		<?php
    }
	
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$heading    = ! empty( $instance['heading'] ) ? esc_html($instance['heading']) : '';
	    $no_of_posts = ( ! empty( $instance['no_of_posts'] ) ) ? absint( $instance['no_of_posts'] ) : 3;
		
	    ?>   
	    	<p>
	            <label for="<?php echo esc_attr($this->get_field_id('heading')); ?>"><?php esc_html_e('Title:','colon-plus'); ?></label>
	            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('heading')); ?>" name="<?php echo esc_attr($this->get_field_name('heading')); ?>" type="text" value="<?php echo esc_attr($heading); ?>" />
	        </p>  	  	    	
		    <p>
				<label for="<?php echo esc_attr($this->get_field_id( 'no_of_posts' )); ?>"><?php esc_html_e( 'Number of posts:', 'colon-plus' ); ?></label> 
				<input class="widefat" id="<?php echo esc_attr($this->get_field_id('no_of_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('no_of_posts')); ?>" type="text" value="<?php echo absint( $no_of_posts ); ?>">
			</p>
			
		
    	<?php
         
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;	
		$instance['no_of_posts'] = absint( $new_instance['no_of_posts'] );
		$instance[ 'heading' ] = sanitize_text_field($new_instance[ 'heading' ]);
    	return $instance;
	}

}
endif;

if( ! function_exists('colon_register_popular_posts_widget')) :
// register widget
function colon_register_popular_posts_widget() {
    register_widget( 'Colon_Plus_Popular_Posts_Widget' );
}
endif;

add_action( 'widgets_init', 'colon_register_popular_posts_widget' );
