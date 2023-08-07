<?php

add_action( 'admin_menu', 'shopping_solution_gettingstarted' );
function shopping_solution_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'shopping-solution'), esc_html__('About Theme', 'shopping-solution'), 'edit_theme_options', 'shopping-solution-guide-page', 'shopping_solution_guide');   
}

function shopping_solution_admin_theme_style() {
   wp_enqueue_style('shopping-solution-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/get_started_info.css');
}
add_action('admin_enqueue_scripts', 'shopping_solution_admin_theme_style');

function shopping_solution_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Shopping Solution, you rock!', 'shopping-solution' ) ?> </h2>
			<p><?php esc_html_e( 'Take benefit of a variety of features, functionalities, elements, and an exclusive set of customization options to build your own professional shopping solution website. Please Click on the link below to know the theme setup information.', 'shopping-solution' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=shopping-solution-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Getting Started', 'shopping-solution' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'shopping_solution_notice');

/**
 * Theme Info Page
 */
function shopping_solution_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'shopping-solution' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
			<div class="row">
				<div class="col-md-5 intro">
					<div class="pad-box">
						<h2><?php esc_html_e( 'Welcome to Shopping Solution', 'shopping-solution' ); ?></h2>
						<p>Version: <?php echo esc_html($theme['Version']);?></p>
						<span class="intro__version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and flexible WordPress theme.', 'shopping-solution' ); ?>	
						</span>
						<div class="powered-by">
							<p><strong><?php esc_html_e( 'Theme created by Buy WP Templates', 'shopping-solution' ); ?></strong></p>
							<p>
								<img class="logo" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/theme-logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-7">
					<div class="pro-links">
				    	<a href="<?php echo esc_url( SHOPPING_SOLUTION_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'shopping-solution'); ?></a>
						<a href="<?php echo esc_url( SHOPPING_SOLUTION_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'shopping-solution'); ?></a>
						<a href="<?php echo esc_url( SHOPPING_SOLUTION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'shopping-solution'); ?></a>
					</div>
					<div class="install-plugins">
						<img src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/responsive1.png'); ?>" alt="" />
					</div>
				</div>
			</div>
			<h2 class="tg-docs-section intruction-title" id="section-4"><?php esc_html_e( '1). Setup Shopping Solution Theme', 'shopping-solution' ); ?></h2>
			<div class="row">
				<div class="theme-instruction-block col-md-7">
					<div class="pad-box">
	                    <p><?php esc_html_e( 'Shopping Solution is a simple and multipurpose theme that can be used to build websites for e-commerce, beauty, fashion, smart home products, selfie drones, novelty shops, toy shops, gadgets stores, jewelery shops, easy digital download shopping cart, storefront, portfolio, boutique, fashion store, online food order platforms, and many more. This theme is responsive, elegant, and has many other features. Using this theme, you can develop a website easily and effectively with less time and it is finely designed to meet your needs. This theme is providing options like WooCommerce integration, adaptable, user-friendly, translation ready, Gutenberg ready, typography options, also smooth customization in every aspect of your website. With this theme, you also have features like SEO-friendly and mobile-friendly that can help to get more visitors and can be accessed easily from anywhere. In short, Shopping Solution will surely help you to grow and expand your business in all possible ways.', 'shopping-solution' ); ?><p><br>
						<ol>
							<li><?php esc_html_e( 'Start','shopping-solution'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','shopping-solution'); ?></a> <?php esc_html_e( 'your website.','shopping-solution'); ?> </li>
							<li><?php esc_html_e( 'Shopping Solution','shopping-solution'); ?> <a target="_blank" href="<?php echo esc_url( SHOPPING_SOLUTION_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','shopping-solution'); ?></a> </li>
						</ol>
                    </div>
              	</div>
				<div class="col-md-5">
					<div class="pad-box">
              			<img class="logo" src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
              		 </div> 
              	</div>
            </div>
			<div class="col-md-12 text-block">
					<h2 class="dashboard-install-title"><?php esc_html_e( '2.) Premium Theme Information.','shopping-solution'); ?></h2>
					<div class="row">
						<div class="col-md-7">
							<img src="<?php echo esc_url(get_theme_file_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
							<div class="pad-box">
								<h3><?php esc_html_e( 'Pro Theme Description','shopping-solution'); ?></h3>
	                    		<p class="pad-box-p"><?php esc_html_e( 'This Premium Shopping WordPress Theme comes with a large range of options and functions. Your website will appear gorgeous and amazing at the same time. This WP theme outperforms and functions better than its competitors. With this WordPress theme you get a responsive layout, which works best on all types of devices. With the subscription included with the theme, users get priority error solutions service whenever they are required. The WP theme is highly SEO optimized so that your website receives the most traffic possible. You can also add info to social media icons enabling you to present your Content material on numerous social media platforms. By using our premium theme, you will be able to enhance your site and enable your company or business to succeed.', 'shopping-solution' ); ?><p>
	                    	</div>
						</div>
						<div class="col-md-5 install-plugin-right">
							<div class="pad-box">								
								<h3><?php esc_html_e( 'Pro Theme Features','shopping-solution'); ?></h3>
								<div class="dashboard-install-benefit">
									<ul>
										<li><?php esc_html_e( 'Car listing Shortcode with category','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Car listing Shortcode','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Multiple image feature for each property with slider.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Brand Listing Section','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Car Brand(categories) Option','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Car Tags(categories) Option','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Testimonial listing.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Testimonial shortcode.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Social icons widget.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Latest post with the image widget.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Live customize editor for the About US section.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Font Awesome integrated.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Advanced Color options and color pallets.','shopping-solution'); ?></li>
										<li><?php esc_html_e( '100+ Font Family Options.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Enable-Disable options on All sections.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Well sanitized as per WordPress standards.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Allow to set site title, tagline, logo.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Sticky post & Comment threads.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Left and Right Sidebar.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Customizable Home Page.','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Footer Widgets & Editor style','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Gallery & Banner functionality','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Multiple inner page templates','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Full-width Template','shopping-solution'); ?></li>
										<li><?php esc_html_e( 'Custom Menu, Colors Editor','shopping-solution'); ?></li>
									</ul>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="dashboard__blocks">
			<div class="row">
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Get Support','shopping-solution'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( SHOPPING_SOLUTION_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','shopping-solution'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( SHOPPING_SOLUTION_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','shopping-solution'); ?></a></li>
					</ol>
				</div>

				<div class="col-md-3">
					<h3><?php esc_html_e( 'Getting Started','shopping-solution'); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Start','shopping-solution'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','shopping-solution'); ?></a> <?php esc_html_e( 'your website.','shopping-solution'); ?> </li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Help Docs','shopping-solution'); ?></h3>
					<ol>
						<li><a target="_blank" href="<?php echo esc_url( SHOPPING_SOLUTION_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','shopping-solution'); ?></a></li>
						<li><a target="_blank" href="<?php echo esc_url( SHOPPING_SOLUTION_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','shopping-solution'); ?></a></li>
					</ol>
				</div>
				<div class="col-md-3">
					<h3><?php esc_html_e( 'Buy Premium','shopping-solution'); ?></h3>
					<ol>
						<a href="<?php echo esc_url( SHOPPING_SOLUTION_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'shopping-solution'); ?></a>
					</ol>
				</div>
			</div>
		</div>
	</div>

<?php }?>