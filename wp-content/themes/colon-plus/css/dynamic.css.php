<?php
/**
 * Colon Plus: Dynamic CSS stylesheet
 * 
 */


function colon_plus_dynamic_css_stylesheet() {
    
    $primary_color= sanitize_hex_color(get_theme_mod( 'colon_site_primary_color','#8224e3' ));
    $secondary_color= sanitize_hex_color(get_theme_mod( 'colon_site_secondary_color','#5d1db7' ));
    $layout_content_width= absint(get_theme_mod( 'colon_layout_content_width_settings','1170' ));

    $css = '

        .wp-block-cover.alignwide,
        .wp-block-columns.alignwide,
        .wc-block-grid__products,
        .wp-block-cover-image .wp-block-cover__inner-container, 
        .wp-block-cover .wp-block-cover__inner-container {
             padding: 0 15px;
        }

        h1, h2, h3, h4, h5, h6,
        .single h1.entry-title a {
            color: #000;
        }

        .top-menu .navigation >li.current-menu-item  a {
            color: '.$primary_color.';
        }

        header button[type="submit"] {
            font-size: 0 !important;
        }

        footer#footer, footer#footer .footer-widgets-wrapper {
            clear: both;
        }

        aside article footer {
            margin-top: 0 !important;
            padding-top: 0 !important;
            padding: 10px 0;
        }

        .wc-block-grid__product-onsale,
        .wp-block-search .wp-block-search__button {
            background: '.$primary_color.' !important;
            color: #fff !important; 
            border: none;
        }

        .wp-block-search .wp-block-search__label {
            display: none;
        }

        .widget_block .wp-block-group h2 {
            font-weight: 400;
        }

        .hd-bar-close {
            display: none;
        }

        
        @media (max-width: 767px) {
            .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
            .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
            .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
            .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4), 
            .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
            .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
            .has-blocks p:not(blockquote p):not(.container p):not(.site-title p):not(.site-description p):not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart):not(.widget_shopping_cart_content p),
            .has-blocks blockquote,
            .has-blocks .wp-block-columns,
            .has-blocks table,
            .has-blocks dl,
            .has-blocks ul:not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart),
            .has-blocks ol,
            .has-blocks address,
            .has-blocks pre,
            .has-blocks .wp-block-cover.alignwide,
            .has-blocks .wp-block-columns.alignwide,
            .has-blocks .wc-block-grid__products,
            .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
            .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                padding-left: 15px;
                padding-right: 15px;
            }

            .has-blocks figure.alignleft > p {
                padding-left: 15px;
                padding-right: 15px;
            }
        }

        @media (min-width: 768px) {
            .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
            .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
            .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
            .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4), 
            .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
            .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
            .has-blocks p:not(blockquote p):not(.container p):not(.site-title p):not(.site-description p):not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart):not(.widget_shopping_cart_content p),
            .has-blocks blockquote,
            .has-blocks .wp-block-columns,
            .has-blocks table,
            .has-blocks dl,
            .has-blocks ul:not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart),
            .has-blocks ol,
            .has-blocks address,
            .has-blocks pre,
            .has-blocks .wp-block-cover.alignwide,
            .has-blocks .wp-block-columns.alignwide,
            .has-blocks .wc-block-grid__products,
            .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
            .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                max-width: 750px;
                margin: 0 auto;
            }

            .has-blocks figure.alignleft > p {
                width: 750px;
            }
        }

        @media (min-width: 992px) {
            .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
            .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
            .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
            .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4), 
            .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
            .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
            .has-blocks p:not(blockquote p):not(.container p):not(.site-title p):not(.site-description p):not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart):not(.widget_shopping_cart_content p),
            .has-blocks blockquote,
            .has-blocks .wp-block-columns,
            .has-blocks table,
            .has-blocks dl,
            .has-blocks ul:not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart),
            .has-blocks ol,
            .has-blocks address,
            .has-blocks pre,
            .has-blocks .wp-block-cover.alignwide,
            .has-blocks .wp-block-columns.alignwide,
            .has-blocks .wc-block-grid__products,
            .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
            .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                max-width: 970px;
                margin: 0 auto;
            }

            .has-blocks figure.alignleft > p {
                width: 970px;
            }
        }

        @media (min-width: 1200px) {
            .has-blocks h1:not(h1.site-title):not(.blog h1):not(.single h1):not(.archive h1):not(.wp-block-cover__inner-container h1), 
            .has-blocks h2:not(.blog h2):not(.single h2):not(.archive h2):not(.wp-block-cover__inner-container h2), 
            .has-blocks h3:not(.blog h3):not(.single h3):not(.archive h3):not(.wp-block-cover__inner-container h3), 
            .has-blocks h4:not(.blog h4):not(.single h4):not(.archive h4):not(footer h4):not(.wp-block-cover__inner-container h4),
            .has-blocks h5:not(.blog h5):not(.single h5):not(.archive h5):not(.wp-block-cover__inner-container h5), 
            .has-blocks h6:not(.blog h6):not(.single h6):not(.archive h6):not(.wp-block-cover__inner-container h6),
            .has-blocks p:not(blockquote p):not(.container p):not(.site-title p):not(.site-description p):not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart):not(.widget_shopping_cart_content p),
            .has-blocks blockquote,
            .has-blocks .wp-block-columns,
            .has-blocks table,
            .has-blocks dl,
            .has-blocks ul:not(ul.header-search):not(ul.md-cart-menu):not(ul.menu-header-cart),
            .has-blocks ol,
            .has-blocks address,
            .has-blocks pre,
            .has-blocks .wp-block-cover.alignwide,
            .has-blocks .wp-block-columns.alignwide,
            .has-blocks .wc-block-grid__products,
            .has-blocks .wp-block-cover-image .wp-block-cover__inner-container, 
            .has-blocks .wp-block-cover .wp-block-cover__inner-container {
                max-width: '.$layout_content_width.'px;
                margin: 0 auto;
            }

            .has-blocks figure.alignleft > p {
                width: '.$layout_content_width.'px;
            }
        }
       

	';

	
	return apply_filters( 'colon_plus_dynamic_css_stylesheet', colon_plus_minimize_css($css));
}