<?php
// child style enqueue
define('TH_BIG_SHOP_LAYOUT', get_theme_file_uri(). "/images/header-layout-4.png");
add_action('wp_enqueue_scripts', 'th_big_shop_styles',105);
function th_big_shop_styles(){
    $themeVersion = wp_get_theme()->get('Version');
    // Enqueue our style.css with our own version
    wp_enqueue_style('th-big-shop-styles', get_template_directory_uri() . '/style.css',array(), $themeVersion);
    wp_add_inline_style('th-big-shop-styles', th_big_shop_custom_styles());
}
function th_big_shop_customizer_script_registers(){
wp_enqueue_script( 'th_big_shop_custom_customizer_script', get_theme_file_uri() . '/customizer/js/customizer.js', array("jquery"), '', true  ); 
}
add_action('customize_controls_enqueue_scripts', 'th_big_shop_customizer_script_registers',100 );

/**********************/
//customize setting
/**********************/

function th_big_shop_setting( $wp_customize ){

// theme color    
//main header color
if(class_exists('Big_Store_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'big_store_main_header_layout', array(
                'default'           => 'mhdrtwo',
                'sanitize_callback' => 'big_store_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Big_Store_WP_Customize_Control_Radio_Image(
                $wp_customize, 'big_store_main_header_layout', array(
                    'label'    => esc_html__( 'Header Layout', 'th-big-shop' ),
                    'section'  => 'big-store-main-header',
                    'choices'  => array(
                        'mhdrthree' => array(
                            'url' => BIG_STORE_MAIN_HEADER_LAYOUT_ONE,
                        ),
                        'mhdrtwo' => array(
                            'url' => TH_BIG_SHOP_LAYOUT,
                        ),
                        'mhdrdefault'   => array(
                            'url' => BIG_STORE_MAIN_HEADER_LAYOUT_TWO,
                        ),
                        'mhdrone'   => array(
                            'url' => BIG_STORE_MAIN_HEADER_LAYOUT_THREE,
                        ),
                            
                                     
                    ),
                    'priority'   => 1,
                )
            )
        );
}

// BG color
 $wp_customize->add_setting('big_store_main_hd_bg_clr', array(
        'default'           => '#2600f6',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Big_Store_Customizer_Color_Control($wp_customize,'big_store_main_hd_bg_clr', array(
        'label'      => __('Background Color', 'th-big-shop' ),
        'section'    => 'big-store-main-header-clr',
        'settings'   => 'big_store_main_hd_bg_clr',
        'priority'   => 2,
    ) ) 
 );  

$wp_customize->add_setting('big_store_main_content_txt_clr', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'big_store_main_content_txt_clr', array(
        'label'      => __('Text Color', 'th-big-shop' ),
        'section'    => 'big-store-main-header-clr',
        'settings'   => 'big_store_main_content_txt_clr',
        'priority' => 4,
    ) ) 
 );

$wp_customize->add_setting('big_store_main_content_link_clr', array(
        'default'           => '#fff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'big_store_main_content_link_clr', array(
        'label'      => __('Link Color ', 'th-big-shop' ),
        'section'    => 'big-store-main-header-clr',
        'settings'   => 'big_store_main_content_link_clr',
        'priority'   => 12,
    ) ) 
 );

// BG color
 $wp_customize->add_setting('big_store_below_hd_bg_clr', array(
        'default'           => '#003430',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Big_Store_Customizer_Color_Control($wp_customize,'big_store_below_hd_bg_clr', array(
        'label'      => __('Background Color', 'th-big-shop' ),
        'section'    => 'big-store-below-header-clr',
        'settings'   => 'big_store_below_hd_bg_clr',
        'priority'   => 1,
    ) ) 
 ); 
// theme color
 $wp_customize->add_setting('big_store_theme_clr', array(
        'default'        => '#1ad788',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'big_store_theme_clr', array(
        'label'      => __('Theme Color', 'th-big-shop' ),
        'section'    => 'big-store-gloabal-color',
        'settings'   => 'big_store_theme_clr',
        'priority' => 1,
    ) ) 
 );  

//********************/
// icon color
//********************/
$wp_customize->add_setting('big_store_sq_icon_bg_clr', array(
        'default'           => '#3a16ff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Big_Store_Customizer_Color_Control($wp_customize,'big_store_sq_icon_bg_clr', array(
        'label'      => __('Background Color', 'th-big-shop' ),
        'section'    => 'big-store-icon-header-clr',
        'settings'   => 'big_store_sq_icon_bg_clr',
        'priority'   => 1,
    ) ) 
 ); 
// BG color
 $wp_customize->add_setting('big_store_above_hd_bg_clr', array(
        'default'           => '#003430',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'big_store_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new Big_Store_Customizer_Color_Control($wp_customize,'big_store_above_hd_bg_clr', array(
        'label'      => __('Background Color', 'th-big-shop' ),
        'section'    => 'big-store-abv-header-clr',
        'settings'   => 'big_store_above_hd_bg_clr',
        'priority'   => 2,
    ) ) 
 );  

}

add_action( 'customize_register', 'th_big_shop_setting', 100 );

/***************************/
//custom style
/***************************/
function th_big_shop_custom_styles(){
$big_store_style=""; 
/*********************/
// Global Color Option
/*********************/ 
  $big_store_theme_clr = esc_html(get_theme_mod('big_store_theme_clr','#1ad788'));
  $big_store_style.="a:hover, .big-store-menu li a:hover, .big-store-menu .current-menu-item a,.top-header .top-header-bar .big-store-menu li a:hover, .top-header .top-header-bar  .big-store-menu .current-menu-item a,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,article.thunk-post-article .thunk-readmore.button,.thunk-wishlist a:hover, .thunk-compare a:hover,.woocommerce .thunk-product-hover a.th-button,.woocommerce ul.cart_list li .woocommerce-Price-amount, .woocommerce ul.product_list_widget li .woocommerce-Price-amount,.big-store-load-more button,.page-contact .leadform-show-form label,.thunk-contact-col .fa,.summary .yith-wcwl-wishlistaddedbrowse a, .summary .yith-wcwl-wishlistexistsbrowse a,.thunk-title .title:before,.thunk-hglt-icon,.woocommerce .thunk-product-content .star-rating,.thunk-product-cat-list.slider a:hover, .thunk-product-cat-list li a:hover,.site-title span a:hover,.cart-icon a span:hover,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover, .thunk-product-tab-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover,.thunk-woo-product-list .woocommerce-loop-product__title a:hover,.mobile-nav-tab-category ul[data-menu-style='accordion'] li a:hover, .big-store-menu > li > a:hover, .top-header-bar .big-store-menu > li > a:hover, .bottom-header-bar .big-store-menu > li > a:hover, .big-store-menu li ul.sub-menu li a:hover,.header-support-content i,.slider-cat-title a:before,[type='submit'],.header-support-content a:hover,.mhdrthree .site-title span a:hover,.mobile-nav-bar .big-store-menu > li > a:hover,.woocommerce .widget_rating_filter ul li .star-rating,.woocommerce .star-rating::before,.woocommerce .widget_rating_filter ul li a,.search-close-btn,.woocommerce .thunk-single-product-summary-wrap .woocommerce-product-rating .star-rating,.woocommerce #alm-quick-view-modal .woocommerce-product-rating .star-rating,.summary .woosw-added:before,.thunk-product .woosw-btn.woosw-added, .woocommerce .entry-summary a.th-product-compare-btn.btn_type, .woocommerce .entry-summary a.th-product-compare-btn.btn_type:before{color:{$big_store_theme_clr};}  .woocommerce a.remove:hover,.thunk-vertical-cat-tab .thunk-heading-wrap:before,.slide-layout-1 .slider-content-caption a.slide-btn{background:{$big_store_theme_clr}!important;} .widget_big_store_tabbed_product_widget .thunk-woo-product-list:hover .thunk-product{border-color:{$big_store_theme_clr};}";

  $big_store_style.=".single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.cat-list a:after,.tagcloud a:hover, .thunk-tags-wrapper a:hover,.ribbon-btn,.btn-main-header,.page-contact .leadform-show-form input[type='submit'],.woocommerce .widget_price_filter .big-store-widget-content .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .big-store-widget-content .ui-slider .ui-slider-handle,.entry-content form.post-password-form input[type='submit'],#bigstore-mobile-bar a,#bigstore-mobile-bar,.post-slide-widget .owl-carousel .owl-nav button:hover,.woocommerce div.product form.cart .button,#search-button,#search-button:hover, .woocommerce ul.products li.product .button:hover,.slider-content-caption a.slide-btn,.page-template-frontpage .owl-carousel button.owl-dot, .woocommerce #alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a,.button.return.wc-backward,.button.return.wc-backward:hover,.woocommerce .thunk-product-hover a.th-button:hover,
.woocommerce .thunk-product-hover .thunk-wishlist a.add_to_wishlist:hover,
.thunk-wishlist .yith-wcwl-wishlistaddedbrowse:hover,
.thunk-wishlist .yith-wcwl-wishlistexistsbrowse:hover,
.thunk-quickview a:hover, .thunk-compare .compare-button a.compare.button:hover,
.thunk-woo-product-list .thunk-quickview a:hover,.woocommerce .thunk-product-hover a.th-button:hover,#alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a.flex-active,.menu-close-btn:hover:before, .menu-close-btn:hover:after,.cart-close-btn:hover:after,.cart-close-btn:hover:before,.cart-contents .count-item,[type='submit']:hover,.comment-list .reply a,.nav-links .page-numbers.current, .nav-links .page-numbers:hover,.woocommerce .thunk-product-image-tab-section .thunk-product-hover a.th-button:hover,.woocommerce .thunk-product-slide-section .thunk-product-hover a.th-button:hover,.woocommerce .thunk-compare .compare-button a.compare.button:hover,.thunk-product .woosw-btn:hover,.thunk-product .wooscp-btn:hover,.woosw-copy-btn input{background:{$big_store_theme_clr}}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .big-store-slide-post .owl-nav button.owl-prev:hover, .big-store-slide-post .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button:hover,.big-store-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.thunk-heading-wrap:before,.woocommerce ul.products li.product .thunk-product-hover a.th-button:hover{background-color:{$big_store_theme_clr};} 
  .thunk-product-hover .th-button.th-button, .woocommerce ul.products .thunk-product-hover .th-button, .woocommerce .thunk-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .big-store-slide-post .owl-nav button.owl-prev:hover, .big-store-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button,.woocommerce .thunk-product-hover a.th-button,.big-store-load-more button,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.page-contact .leadform-show-form input[type='submit'],.woocommerce .thunk-product-hover a.product_type_simple,.post-slide-widget .owl-carousel .owl-nav button:hover{border-color:{$big_store_theme_clr}} .loader {
    border-right: 4px solid {$big_store_theme_clr};
    border-bottom: 4px solid {$big_store_theme_clr};
    border-left: 4px solid {$big_store_theme_clr};}
    .woocommerce .thunk-product-image-cat-slide .thunk-woo-product-list:hover .thunk-product,.woocommerce .thunk-product-image-cat-slide .thunk-woo-product-list:hover .thunk-product,[type='submit']{border-color:{$big_store_theme_clr}} .big-store-off-canvas-sidebar-wrapper .menu-close-btn:hover,.main-header .cart-close-btn:hover{color:{$big_store_theme_clr};}";
	/**************************/
  //Main Header Color Option
  /**************************/
   $big_store_main_hd_bg_clr = esc_html(get_theme_mod('big_store_main_hd_bg_clr','#2600f6'));
   $big_store_main_content_txt_clr = esc_html(get_theme_mod('big_store_main_content_txt_clr','#fff'));
   $big_store_main_content_link_clr = esc_html(get_theme_mod('big_store_main_content_link_clr','#fff'));
   $big_store_style.=".main-header:before,.sticky-header:before, .search-wrapper:before{background:{$big_store_main_hd_bg_clr}}
    .site-description,main-header-col1,.header-support-content,.mhdrthree .site-description p{color:{$big_store_main_content_txt_clr}} .mhdrthree .site-title span a,.header-support-content a, .thunk-icon .count-item,.main-header a,.thunk-icon .cart-icon a.cart-contents,.sticky-header .site-title a {color:{$big_store_main_content_link_clr}}";

      /**************************/
  //Below Header Color Option
  /**************************/
   $big_store_below_hd_bg_clr = esc_html(get_theme_mod('big_store_below_hd_bg_clr','#003430'));
   $big_store_category_text_clr = esc_html(get_theme_mod('big_store_category_text_clr',''));
   $big_store_category_icon_clr = esc_html(get_theme_mod('big_store_category_icon_clr',''));
   $big_store_style.=".below-header:before{background:{$big_store_below_hd_bg_clr}}
      .menu-category-list .toggle-title,.toggle-icon{color:{$big_store_category_text_clr}}
      .below-header .cat-icon span{background:{$big_store_category_icon_clr}}
   ";

$big_store_sq_icon_bg_clr = esc_html(get_theme_mod('big_store_sq_icon_bg_clr','#3a16ff'));
$big_store_sq_icon_clr = esc_html(get_theme_mod('big_store_sq_icon_clr','#fff'));

$big_store_style.=".header-icon a ,.header-support-icon a.whishlist, .thunk-icon .cart-icon a.cart-contents i,.cat-icon,.sticky-header .header-icon a , .sticky-header .thunk-icon .cart-icon a.cart-contents,.responsive-main-header .header-support-icon a,.responsive-main-header .thunk-icon .cart-icon a.cart-contents,.responsive-main-header .menu-toggle .menu-btn,.sticky-header-bar .menu-toggle .menu-btn,.header-icon a.account,.header-icon a.prd-search .header-support-icon a.compare i,.thunk-icon .taiowc-icon, .thunk-icon .taiowc-cart-item,.header-icon a.prd-search-icon > .thaps-search-box > .th-icon{background:{$big_store_sq_icon_bg_clr};} ";

$big_store_style.=".header-icon a.prd-search-icon > .thaps-search-box > .th-icon{color:{$big_store_sq_icon_clr};} ";

$big_store_above_hd_bg_clr = esc_html(get_theme_mod('big_store_above_hd_bg_clr','#003430'));
$big_store_style.=".top-header:before{background:{$big_store_above_hd_bg_clr};}";
    return $big_store_style;
}

add_action('admin_head', 'th_big_shop_admin_custom_styles');

function th_big_shop_admin_custom_styles() {
  echo '<style>
    .tablinks.get-child,
    .child-theme-notice a.child-button{
        display: none!important;
    }
  </style>';
}