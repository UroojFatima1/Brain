<?php

/**
 * Page Title Settings
 */
if (!function_exists('colon_show_page_title')):
    function colon_show_page_title( $blogtitle=false,$archivetitle=false,$searchtitle=false,$pagenotfoundtitle=false ) {
        if(!is_front_page()) :
            if ( is_page() && has_post_thumbnail()) :
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                ?>
                    <div class="page-title has-bg-image" style="background:url('<?php echo esc_url($featured_img_url) ?>') no-repeat scroll center center / cover;">
                        <div class="content-section img-overlay">
                        
                <?php
            else:
                ?>
                    <div class="page-title">
                        <div class="content-section">
                <?php
            endif;
            colon_before_title_content(); 
            ?>
                <div class="container">
                    <?php
                        if( $blogtitle ) :
                            ?><h1 class="main-title"><?php single_post_title(); ?></h1><?php
                        endif;
                        if( $archivetitle ):
                            ?><h1 class="main-title"><?php the_archive_title(); ?></h1><?php
                        endif;
                        if( $searchtitle ) :
                            ?><h1 class="main-title"><?php esc_html_e('Search Results','colon') ?></h1><?php
                        endif;
                        if( $pagenotfoundtitle ) :
                            ?><h1 class="main-title"><?php esc_html_e('Page Not Found','colon') ?></h1><?php
                        endif;
                        if( $blogtitle==false && $archivetitle==false && $searchtitle==false && $pagenotfoundtitle==false ):
                            ?><h1 class="main-title"><?php the_title(); ?></h1><?php
                        endif;
                    ?>
                    <div class="breadcrumb-wrapper">
                        <?php 
                            if(get_theme_mod( 'colon_enable_page_breadcrumbs',true)) :
                                do_action('colon_breadcrumbs_hook');
                            endif;
                        ?>
                    </div>
                </div>
                <?php colon_after_title_content(); ?>
                </div>
                </div>
            <?php    
        endif;
    }
endif;
add_action('colon_get_page_title', 'colon_show_page_title');