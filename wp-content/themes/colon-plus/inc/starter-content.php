<?php

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `colon_plus_starter_content` filter before returning.
 *
 *
 * @return array A filtered array of args for the starter_content.
 */
function colon_plus_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Home', 'Theme starter content', 'colon-plus' ),
				'post_content' => '

					<!-- wp:cover {"url":"' . esc_url( get_stylesheet_directory_uri() ) . '/img/home-featured.jpg","id":111,"dimRatio":0,"focalPoint":{"x":"0.43","y":"0.42"},"minHeight":700} -->
					<div class="wp-block-cover" style="min-height:700px"><img class="wp-block-cover__image-background wp-image-111" alt="'. esc_attr_x('home-featured','Theme starter content','colon-plus'). '" src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/home-featured.jpg" style="object-position:43% 42%" data-object-fit="cover" data-object-position="43% 42%"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
					<h2 class="has-text-align-center has-huge-font-size">' . esc_html_x( 'Create Your', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"textAlign":"center","fontSize":"huge"} -->
					<h2 class="has-text-align-center has-huge-font-size">' . esc_html_x( 'Website With Colon Plus', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
					<p class="has-text-align-center" style="font-size:14px">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html_x( 'ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":35} -->
					<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons {"contentJustification":"center"} -->
					<div class="wp-block-buttons is-content-justification-center"><!-- wp:button {"textColor":"white","width":25,"style":{"color":{"background":"#ed893b"},"border":{"radius":45}},"className":"is-style-fill"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-25 is-style-fill"><a class="wp-block-button__link has-white-color has-text-color has-background" style="border-radius:45px;background-color:#ed893b">' . esc_html_x( 'LEARN MORE', 'Theme starter content', 'colon-plus' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div></div>
					<!-- /wp:cover -->

					<!-- wp:cover {"customOverlayColor":"#f8f8f8"} -->
					<div class="wp-block-cover has-background-dim" style="background-color:#f8f8f8"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#243861"}}} -->
					<h2 class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'What We Do', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"backgroundColor":"white","className":"pad-25"} -->
					<div class="wp-block-column pad-25 has-white-background-color has-background"><!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:image {"align":"center","id":166,"width":110,"height":111,"sizeSlug":"full","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/icon-1.png" alt="'. esc_attr_x('icon 1','Theme starter content','colon-plus'). '" class="wp-image-166" width="110" height="111"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#243861"}},"fontSize":"medium"} -->
					<h3 class="has-text-align-center has-text-color has-medium-font-size" style="color:#243861">' . esc_html_x( 'App Development', 'Theme starter content', 'colon-plus' ) . '</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":15} -->
					<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column -->

					<!-- wp:column {"backgroundColor":"white","className":"pad-25"} -->
					<div class="wp-block-column pad-25 has-white-background-color has-background"><!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:image {"align":"center","id":165,"width":126,"height":118,"sizeSlug":"full","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/icon-2.png" alt="'. esc_attr_x('icon 2','Theme starter content','colon-plus'). '" class="wp-image-165" width="126" height="118"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#243861"}},"fontSize":"medium"} -->
					<h3 class="has-text-align-center has-text-color has-medium-font-size" style="color:#243861">' . esc_html_x( 'Website Design', 'Theme starter content', 'colon-plus' ) . '</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":15} -->
					<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column {"backgroundColor":"white","className":"pad-25"} -->
					<div class="wp-block-column pad-25 has-white-background-color has-background"><!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:image {"align":"center","id":164,"width":131,"height":113,"sizeSlug":"full","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/icon-3.png" alt="'. esc_attr_x('icon 3','Theme starter content','colon-plus'). '" class="wp-image-164" width="131" height="113"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:heading {"textAlign":"center","level":3,"style":{"color":{"text":"#243861"}},"fontSize":"medium"} -->
					<h3 class="has-text-align-center has-text-color has-medium-font-size" style="color:#243861">' . esc_html_x( 'WordPress Deveopment', 'Theme starter content', 'colon-plus' ) . '</h3>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":15} -->
					<div style="height:15px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div></div>
					<!-- /wp:cover -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#243861"}}} -->
					<h2 class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Portfolio', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861"><meta charset="utf-8">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:gallery {"ids":[192,193,194,195,196,197],"columns":3,"linkTo":"none"} -->
					<figure class="wp-block-gallery columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-6.jpg" alt="'. esc_attr_x('Portfolio 6','Theme starter content','colon-plus'). '" data-id="192" data-full-url="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-6.jpg" data-link="" class="wp-image-192"/></figure></li><li class="blocks-gallery-item"><figure><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-5.jpg" alt="'. esc_attr_x('Portfolio 5','Theme starter content','colon-plus'). '" data-id="193" data-full-url="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-5.jpg" data-link="" class="wp-image-193"/></figure></li><li class="blocks-gallery-item"><figure><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-4.jpg" alt="'. esc_attr_x('Portfolio 4','Theme starter content','colon-plus'). '" data-id="194" data-full-url="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-4.jpg" data-link="" class="wp-image-194"/></figure></li><li class="blocks-gallery-item"><figure><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-3.jpg" alt="'. esc_attr_x('Portfolio 3','Theme starter content','colon-plus'). '" data-id="195" data-full-url="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-3.jpg" data-link="" class="wp-image-195"/></figure></li><li class="blocks-gallery-item"><figure><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-2.jpg" alt="'. esc_attr_x('Portfolio 2','Theme starter content','colon-plus'). '" data-id="196" data-full-url="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-2.jpg" data-link="" class="wp-image-196"/></figure></li><li class="blocks-gallery-item"><figure><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-1.jpg" alt="'. esc_attr_x('Portfolio 1','Theme starter content','colon-plus'). '" data-id="197" data-full-url="'. esc_url( get_stylesheet_directory_uri() ) . '/img/portfolio-1.jpg" data-link="" class="wp-image-197"/></figure></li></ul></figure>
					<!-- /wp:gallery -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:cover {"customOverlayColor":"#f8f8f8"} -->
					<div class="wp-block-cover has-background-dim" style="background-color:#f8f8f8"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#243861"}}} -->
					<h2 class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Our Customers', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 1','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 2','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 3','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 4','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 5','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 6','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div></div>
					<!-- /wp:cover -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
					<h2 class="has-text-align-center has-large-font-size">' . esc_html_x( '" Amazing Service &amp; Quality Work ! "', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac malesuada sapien.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html_x( ' Etiam non finibus quam. Nullam eu ante vel urna scelerisque suscipit.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:image {"align":"center","id":220,"width":113,"height":104,"sizeSlug":"full","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/icon-3.png" alt="'. esc_attr_x('user-image','Theme starter content','colon-plus'). '" class="wp-image-220" width="113" height="104"/><figcaption>' . esc_html_x( 'JOHN DOE', 'Theme starter content', 'colon-plus' ) . '</figcaption></figure></div>
					<!-- /wp:image -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->

					<!-- wp:cover {"customOverlayColor":"#f8f8f8"} -->
					<div class="wp-block-cover has-background-dim" style="background-color:#f8f8f8"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"style":{"color":{"text":"#243861"}},"fontSize":"large"} -->
					<h2 class="has-text-color has-large-font-size" style="color:#243861">' . esc_html_x( 'Who We Are', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt justo eget ipsum sollicitudin, et malesuada tellus ornare. Curabitur vestibulum tortor id commodo lobortis. Aenean efficitur est magna, et commodo sapien sodales eget. Aliquam hendrerit, mauris eu posuere cursus, velit nulla malesuada turpis, quis pharetra urna lorem eu quam. Curabitur malesuada massa ac metus venenatis suscipit. Praesent sit amet felis nec felis malesuada condimentum vitae ac urna.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":50},"color":{"background":"#ed893b"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background" style="border-radius:50px;background-color:#ed893b">' . esc_html_x( 'Learn More', 'Theme starter content', 'colon-plus' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":111,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/home-featured.jpg" alt="'. esc_attr_x('Who we are','Theme starter content','colon-plus'). '" class="wp-image-111"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div></div>
					<!-- /wp:cover -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:cover {"customOverlayColor":"#ed893b","minHeight":200,"align":"wide"} -->
					<div class="wp-block-cover alignwide has-background-dim" style="background-color:#ed893b;min-height:200px"><div class="wp-block-cover__inner-container"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"fontSize":"30px"}}} -->
					<h2 style="font-size:30px">' . esc_html_x( 'Want to Learn More', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","width":50,"style":{"border":{"radius":50}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" style="border-radius:50px">' . esc_html_x( 'Learn More', 'Theme starter content', 'colon-plus' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div></div>
					<!-- /wp:cover -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				',
			),
			'about' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'About', 'Theme starter content', 'colon-plus' ),
				'thumbnail' => '{{featured-about}}',
				'post_content' => '
					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt justo eget ipsum sollicitudin, et malesuada tellus ornare. Curabitur vestibulum tortor id commodo lobortis. Aenean efficitur est magna, et commodo sapien sodales eget. Aliquam hendrerit, mauris eu posuere cursus, velit nulla malesuada turpis, vitae ac urna.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:cover {"customOverlayColor":"#f8f8f8"} -->
					<div class="wp-block-cover has-background-dim" style="background-color:#f8f8f8"><div class="wp-block-cover__inner-container"><!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":271,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/about-journey.jpg" alt="'. esc_attr_x('About us journey','Theme starter content','colon-plus'). '" class="wp-image-271"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"style":{"color":{"text":"#243861"}},"fontSize":"large"} -->
					<h2 class="has-text-color has-large-font-size" style="color:#243861">' . esc_html_x( 'About Our Journey', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt justo eget ipsum sollicitudin, et malesuada tellus ornare. Curabitur vestibulum tortor id commodo lobortis. Aenean efficitur est magna, et commodo sapien sodales eget. Aliquam hendrerit, mauris eu posuere cursus, velit nulla malesuada turpis, quis pharetra urna lorem eu quam. Curabitur malesuada massa ac metus venenatis suscipit. Praesent sit amet felis nec felis malesuada condimentum vitae ac urna.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","style":{"border":{"radius":50},"color":{"background":"#ed893b"}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-text-color has-background" style="border-radius:50px;background-color:#ed893b">' . esc_html_x( 'Learn More', 'Theme starter content', 'colon-plus' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div></div>
					<!-- /wp:cover -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:cover {"overlayColor":"white"} -->
					<div class="wp-block-cover has-white-background-color has-background-dim"><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#243861"}}} -->
					<h2 class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Our Customers', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#243861"}}} -->
					<p class="has-text-align-center has-text-color" style="color:#243861">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 1','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 2','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 3','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 4','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 5','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":216,"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="'. esc_url( get_stylesheet_directory_uri() ) . '/img/clients.jpg" alt="'. esc_attr_x('Client 6','Theme starter content','colon-plus'). '" class="wp-image-216"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:cover -->

					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:cover {"customOverlayColor":"#ed893b","minHeight":200,"align":"wide"} -->
					<div class="wp-block-cover alignwide has-background-dim" style="background-color:#ed893b;min-height:200px"><div class="wp-block-cover__inner-container"><!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
					<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"fontSize":"30px"}}} -->
					<h2 style="font-size:30px">' . esc_html_x( 'Want to Learn More', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"black","width":50,"style":{"border":{"radius":50}}} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background" style="border-radius:50px">' . esc_html_x( 'Learn More', 'Theme starter content', 'colon-plus' ) . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div></div>
					<!-- /wp:cover -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
				',
			),
			'blog',
			'contact' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Contact','Theme starter content', 'colon-plus' ),
				'thumbnail' => '{{featured-contact}}',
				'post_content' => '
					<!-- wp:spacer {"height":70} -->
					<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column {"width":"60%"} -->
					<div class="wp-block-column" style="flex-basis:60%"><!-- wp:heading {"style":{"color":{"text":"#243861"}}} -->
					<h2 class="has-text-color" style="color:#243861">' . esc_html_x( 'Contact Us', 'Theme starter content', 'colon-plus' ) . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:shortcode -->
					' . esc_html_x( '[Paste your Contact Form 7 Shortcode here]', 'Theme starter content', 'colon-plus' ) . '
					<!-- /wp:shortcode --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"30px"},"color":{"text":"#243861"}}} -->
					<h3 class="has-text-color" style="color:#243861;font-size:30px">' . esc_html_x( 'Contact Info', 'Theme starter content', 'colon-plus' ) . '</h3>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {"level":4,"fontSize":"normal"} -->
					<h4 class="has-normal-font-size">' . esc_html_x( 'Email', 'Theme starter content', 'colon-plus' ) . '</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'hello@company.com', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {"level":4,"fontSize":"normal"} -->
					<h4 class="has-normal-font-size">' . esc_html_x( 'Phone', 'Theme starter content', 'colon-plus' ) . '</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>' . esc_html_x( '+123-456-7890', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:spacer {"height":30} -->
					<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:heading {"level":4,"fontSize":"normal"} -->
					<h4 class="has-normal-font-size">' . esc_html_x( 'Address', 'Theme starter content', 'colon-plus' ) . '</h4>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph -->
					<p>' . esc_html_x( '123 Lorem ipsum, abc Street CA, USA', 'Theme starter content', 'colon-plus' ) . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->
					
					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:paragraph -->
					<p></p>
					<!-- /wp:paragraph -->
				',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
			'blogdescription' => esc_html_x( 'Just another WordPress theme', 'Theme starter content', 'colon-plus' ),
			'blogname' => esc_html_x( 'Colon Plus', 'Theme starter content', 'colon-plus' ),
		),
		'theme_mods'  => array(
			'colon_site_primary_color'  => '#8224e3',
			'colon_site_secondary_color'  => '#5d1db7',
			'colon_page_title_bg_color' => '#8224e3',
			'colon_enable_header_transparent' => true,
			'colon_enable_page_title_overlay' => true,
			'colon_page_title_img_overlay_color' => '#111111',
			'colon_page_title_spacing_top' => 180,
			'colon_page_title_spacing_bottom' => 120,
			'colon_enable_single_page_title_section' => true,
			'colon_enable_header_menu_last_button' => true,
			'colon_choose_style_menu_last_button' => 'round',
			'colon_footer_bg_color' => '#0a0a0a',
			'colon_footer_content_color' => '#fff',
			'colon_footer_links_color' => '#d5d5d5'
		),

		'widgets' => array(
			'footer-1' => array(
				'text_info' => array(
			       	'text',
			        array(
			        	'text'  => '<img src="' . esc_url( get_stylesheet_directory_uri() ) . '/img/logo.png" alt="' . esc_attr_x( "footer logo", "Theme starter content", "colon-plus" ) . '" width="150px"><br/><br/>
									Email: hello@company.com<br/>
									Phone: +123-456-7890',
			        )
			    ),
			),
			'footer-2' => array(
				'text_ql' => array(
			       	'text',
			        array(
			        	'title'  => esc_html__( 'Quick Links', 'colon-plus' ),
			        	'text'  => '<ul>
										<li><a href="#">' . esc_html_x( 'About Us','Theme starter content', 'colon-plus' ) . '</a></li>
										<li><a href="#">' . esc_html_x( 'Why Colon Plus','Theme starter content', 'colon-plus' ) . '</a></li>
										<li><a href="#">' . esc_html_x( 'Customer Reviews','Theme starter content', 'colon-plus' ) . '</a></li>
										<li><a href="#">' . esc_html_x( 'Support','Theme starter content', 'colon-plus' ) . '</a></li>
										<li><a href="#">' . esc_html_x( 'Privacy Policy','Theme starter content', 'colon-plus' ) . '</a></li>
										<li><a href="#">' . esc_html_x( 'Terms & Conditions','Theme starter content', 'colon-plus' ) . '</a></li>
									</ul>',
			        )
			    ),
			),
			'footer-3' => array(
				'archives'
			),
			'footer-4' => array(
				'calendar'
			),
			
			
		),
		
		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html_x( 'Primary', 'Theme starter content', 'colon-plus' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'colon_plus_starter_content', $starter_content );
}
