<?php

	$ecommerce_solution_first_color = get_theme_mod('ecommerce_solution_first_color');

	$shopping_solution_custom_css ='';
	
	/*------------ Global First Color -----------*/
	$shopping_solution_custom_css .='input[type="submit"], .topbar p, .menu-header, span.cart-value, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, #slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .blog-section h2:after, #comments input[type="submit"].submit, #comments a.comment-reply-link:hover, #comments a.comment-reply-link, #sidebar h3:after, #sidebar input[type="submit"]:hover, #sidebar .tagcloud a:hover, .footer-wp .tagcloud a:hover, .widget_calendar tbody a, .page-content .read-moresec a.button, .copyright-wrapper, .footer-wp h3:after, .footer-wp input[type="submit"], .pagination a:hover, .pagination .current, .more-btn a:hover, #scrollbutton i, .footer-wp input[type="submit"], .footer-wp button, #sidebar button, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .topbar a.call1, .topbar span, .woocommerce nav.woocommerce-pagination ul li a, .tags a:hover, .nav-next a:hover, .nav-previous a:hover, .topbar, .border-cat button.product-btn, #header .fixed-header, .page-content .read-moresec a.button, input[type="submit"], .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span, .login-box:hover i, .metabox i:before, #sidebar ul li:before, .bradcrumbs a, .bradcrumbs span, #sidebar input[type="submit"]{';
		$shopping_solution_custom_css .='background-color: '.esc_attr($ecommerce_solution_first_color).';';
	$shopping_solution_custom_css .='}';

	$shopping_solution_custom_css .='.login-box a i:hover{';
		$shopping_solution_custom_css .='background-color: '.esc_attr($ecommerce_solution_first_color).'!important;';
	$shopping_solution_custom_css .='}';

	$shopping_solution_custom_css .='td.product-name a:hover, a.shipping-calculator-button:hover, .postbtn a:hover, .blog-section h2 a:hover, .metabox a:hover, nav.navigation.post-navigation a:hover, #sidebar ul li a:hover, .footer-wp h3, .footer-wp li a:hover, #sidebar .textwidget p a:hover, .nav-previous a:hover ,.nav-next a:hover, .footer-wp .textwidget p a, .footer-wp a.rsswidget, #blog_sec a:hover i, #sidebar .wp-block-latest-comments li a:hover, .postbtn:hover i, p.logged-in-as a:hover, span.cart_no i, .entry-date:hover a, .entry-date:hover i, .entry-author:hover a, .entry-author:hover i, td.product-name a, .social-links a:hover, .primary-navigation a:hover, .login-box a:hover, span.cart_no a:hover,.login-box:hover a, #sidebar ul li a:hover, .category a:hover, tr.woocommerce-cart-form__cart-item.cart_item td.product-name a, #sidebar h3.widget-title a.rsswidget{';
		$shopping_solution_custom_css .='color: '.esc_attr($ecommerce_solution_first_color).';';
	$shopping_solution_custom_css .='}';

	$shopping_solution_custom_css .='.entry-date:hover a, .entry-date:hover i, .entry-author:hover a, .entry-author:hover i{';
		$shopping_solution_custom_css .='color: '.esc_attr($ecommerce_solution_first_color).'!important;';
	$shopping_solution_custom_css .='}';

	$shopping_solution_custom_css .='#blog_sec .sticky, .page-content .read-moresec a.button, #slider .carousel-content, #scrollbutton i, .page-content .read-moresec a.button{';
			$shopping_solution_custom_css .='border-color: '.esc_attr($ecommerce_solution_first_color).';';
	$shopping_solution_custom_css .='}';

	$shopping_solution_custom_css .='.copyright-wrapper{';
			$shopping_solution_custom_css .='border-top-color: '.esc_attr($ecommerce_solution_first_color).';';
	$shopping_solution_custom_css .='}';

	// slider overlay
	$ecommerce_solution_slider_overlay_color = get_theme_mod('ecommerce_solution_slider_overlay_color', true);
	if($ecommerce_solution_enable_slider_overlay != false){
		$shopping_solution_custom_css .='#slider{';
			$shopping_solution_custom_css .='border-radius:30px;';
		$shopping_solution_custom_css .='}';
	}

	/*------------ Slider Opacity -------------------*/
	$shopping_solution_theme_lay = get_theme_mod( 'ecommerce_solution_slider_opacity','0.7');
	if($shopping_solution_theme_lay == '0'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.1'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.1';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.2'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.2';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.3'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.3';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.4'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.4';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.5'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.5';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.6'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.6';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.7'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.7';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.8'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.8';
	$shopping_solution_custom_css .='}';
	}else if($shopping_solution_theme_lay == '0.9'){
	$shopping_solution_custom_css .='#slider img{';
		$shopping_solution_custom_css .='opacity:0.9';
	$shopping_solution_custom_css .='}';
	}

	//Back to Top bg color
	$ecommerce_solution_scroll_icon_background = get_theme_mod('ecommerce_solution_scroll_icon_background');
	$shopping_solution_custom_css .='#scrollbutton i{';
		$shopping_solution_custom_css .='background-color: '.esc_attr($ecommerce_solution_scroll_icon_background).';';
		$shopping_solution_custom_css .='border-color: '.esc_attr($ecommerce_solution_scroll_icon_background).';';
	$shopping_solution_custom_css .='}';

	//Copyright background css
	$ecommerce_solution_copyright_text_background = get_theme_mod('ecommerce_solution_copyright_text_background');
	$shopping_solution_custom_css .='.copyright-wrapper{';
		$shopping_solution_custom_css .='background-color: '.esc_attr($ecommerce_solution_copyright_text_background).';';
	$shopping_solution_custom_css .='}';

	// topbar padding
	$shopping_solution_top_bottom_topbar_padding = get_theme_mod('shopping_solution_top_bottom_topbar_padding', '');
	$shopping_solution_custom_css .='.topbar{';
		$shopping_solution_custom_css .='padding-top: '.esc_attr($shopping_solution_top_bottom_topbar_padding).'px !important; padding-bottom: '.esc_attr($shopping_solution_top_bottom_topbar_padding).'px !important;';
	$shopping_solution_custom_css .='}';

	// social icons settings
	$shopping_solution_social_icon_size = get_theme_mod('shopping_solution_social_icon_size');
	$shopping_solution_custom_css .='#header .social-links i{';
		$shopping_solution_custom_css .='font-size: '.esc_attr($shopping_solution_social_icon_size).'px;';
	$shopping_solution_custom_css .='}';