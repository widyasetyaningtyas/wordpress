<?php
/**
 * Blossom Spa Dynamic Styles
 * 
 * @package Blossom_Spa
*/

function blossom_spa_dynamic_css(){
    
    $primary_font    = get_theme_mod( 'primary_font', 'Nunito Sans' );
    $primary_fonts   = blossom_spa_get_fonts( $primary_font, 'regular' );
    $secondary_font  = get_theme_mod( 'secondary_font', 'Marcellus' );
    $secondary_fonts = blossom_spa_get_fonts( $secondary_font, 'regular' );

    $site_title_font      = get_theme_mod( 'site_title_font', array( 'font-family'=>'Marcellus', 'variant'=>'regular' ) );
    $site_title_fonts     = blossom_spa_get_fonts( $site_title_font['font-family'], $site_title_font['variant'] );
    $site_title_font_size = get_theme_mod( 'site_title_font_size', 30 );
         
    $custom_css = '';
    $custom_css .= '

    /*Typography*/

    body{
        font-family : ' . esc_html( $primary_fonts['font'] ) . ';        
    }

    .site-branding .site-title{
        font-size   : ' . absint( $site_title_font_size ) . 'px;
        font-family : ' . esc_html( $site_title_fonts['font'] ) . ';
        font-weight : ' . esc_html( $site_title_fonts['weight'] ) . ';
        font-style  : ' . esc_html( $site_title_fonts['style'] ) . ';
    }

    /*Fonts*/
    button,
    input,
    select,
    optgroup,
    textarea, 
    .post-navigation a .meta-nav, section.faq-text-section .widget_text .widget-title, 
    .search .page-header .page-title {
    	font-family : ' . esc_html( $primary_fonts['font'] ) . ';
    }

    .section-title, section[class*="-section"] .widget_text .widget-title, 
    .page-header .page-title, .widget .widget-title, .comments-area .comments-title, 
    .comment-respond .comment-reply-title, .post-navigation .nav-previous a, .post-navigation .nav-next a, .site-banner .banner-caption .title, 
    .about-section .widget_blossomtheme_featured_page_widget .widget-title, .shop-popular .item h3, 
    .pricing-tbl-header .title, .recent-post-section .grid article .content-wrap .entry-title, 
    .gallery-img .text-holder .gal-title, .wc-product-section .wc-product-slider .item h3, 
    .contact-details-wrap .widget .widget-title, section.contact-section .contact-details-wrap .widget .widget-title, 
    .instagram-section .profile-link, .widget_recent_entries ul li, .widget_recent_entries ul li::before, 
    .widget_bttk_description_widget .name, .widget_bttk_icon_text_widget .widget-title, 
    .widget_blossomtheme_companion_cta_widget .blossomtheme-cta-container .widget-title, 
    .site-main article .content-wrap .entry-title, .search .site-content .search-form .search-field, 
    .additional-post .post-title, .additional-post article .entry-title, .author-section .author-content-wrap .author-name, 
    .widget_bttk_author_bio .title-holder, .widget_bttk_popular_post ul li .entry-header .entry-title, 
    .widget_bttk_pro_recent_post ul li .entry-header .entry-title, 
    .widget_bttk_posts_category_slider_widget .carousel-title .title, 
    .widget_blossomthemes_email_newsletter_widget .text-holder h3, 
    .portfolio-text-holder .portfolio-img-title, .portfolio-holder .entry-header .entry-title {
    	font-family : ' . esc_html( $secondary_fonts['font'] ) . ';
    }';
    
    if( blossom_spa_is_woocommerce_activated() ) {
        $custom_css .='
        .woocommerce div.product .product_title, 
     	.woocommerce div.product .woocommerce-tabs .panel h2 {
    	 	font-family : ' . esc_html( $primary_fonts['font'] ) . ';
    	}

    	.woocommerce.widget_shopping_cart ul li a, 
    	.woocommerce.widget .product_list_widget li .product-title, 
    	.woocommerce-order-details .woocommerce-order-details__title, 
    	.woocommerce-order-received .woocommerce-column__title, 
    	.woocommerce-customer-details .woocommerce-column__title {
    	 	font-family : ' . esc_html( $secondary_fonts['font'] ) . ';
    	}';
    }
           
    wp_add_inline_style( 'blossom-spa', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'blossom_spa_dynamic_css', 99 );

/**
 * Function for sanitizing Hex color 
 */
function blossom_spa_sanitize_hex_color( $color ){
	if ( '' === $color )
		return '';

    // 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
		return $color;
}

/**
 * convert hex to rgb
 * @link http://bavotasan.com/2011/convert-hex-color-to-rgb-using-php/
*/
function blossom_spa_hex2rgb($hex) {
    $hex = str_replace("#", "", $hex);

    if(strlen($hex) == 3) {
        $r = hexdec(substr($hex,0,1).substr($hex,0,1));
        $g = hexdec(substr($hex,1,1).substr($hex,1,1));
        $b = hexdec(substr($hex,2,1).substr($hex,2,1));
    } else {
        $r = hexdec(substr($hex,0,2));
        $g = hexdec(substr($hex,2,2));
        $b = hexdec(substr($hex,4,2));
    }
    $rgb = array($r, $g, $b);
    //return implode(",", $rgb); // returns the rgb values separated by commas
    return $rgb; // returns an array with the rgb values
}

/**
 * Convert '#' to '%23'
*/
function blossom_spa_hash_to_percent23( $color_code ){
    $color_code = str_replace( "#", "%23", $color_code );
    return $color_code;
}