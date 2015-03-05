<?php

	// Register Bootstrap Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	// Get Shortcodes
	require_once('shortcodes.php');

	// Get rid of that stupid WooCommerce alert in the dashboard
	remove_action( 'admin_notices', 'woothemes_updater_notice' );

	// Get rid of that stupid Visual Composer alert in the dashboard
	setcookie('vchideactivationmsg', '1', strtotime('+3 years'), '/');

	// Declare WooCommerce Support
	add_theme_support( 'woocommerce' );

	// Fix Advanced Custom Fields and Visual Composer CSS conflict
	function afc_vc_fix() {
		echo '
		<style>
			.repeater .row:before,
			.repeater .row:after {
				display: auto;
				content: none;
			}
		</style>';
	}
	add_action('admin_head', 'afc_vc_fix');

	// Keep TinyMCE from making you mad
	function override_mce_options($initArray) {
		$opts = '*[*]';
		$initArray['valid_elements'] = $opts;
		$initArray['extended_valid_elements'] = $opts;
		return $initArray;
	}

	add_filter('tiny_mce_before_init', 'override_mce_options');

	remove_filter ('the_content',  'wpautop');
	remove_filter ('comment_text', 'wpautop');

	// Register Theme Features
	function custom_theme_features()  {

		// Add theme support for Semantic Markup
		$markup = array( 'search-form', 'comment-form', 'comment-list', );
		add_theme_support( 'html5', $markup );	
	}

	// Hook into the 'after_setup_theme' action
	add_action( 'after_setup_theme', 'custom_theme_features' );

	// Custom Menus
	function register_menus() {
			register_nav_menus(
				array(
				'primary' => __( 'Primary Menu' ),
				'primary2' => __( 'Primary Menu 2' ),
			)
		);
	}
	add_action( 'init', 'register_menus' );

	// Add classes to first and last menu items
	function add_first_and_last($output) {
		$output = preg_replace('/class="menu-item/', 'class="first menu-item', $output, 1);
		$output = substr_replace($output, 'class="last menu-item', strripos($output, 'class="menu-item'), strlen('class="menu-item'));
		return $output;
	}
	add_filter('wp_nav_menu', 'add_first_and_last');

	// Register Left Sidebar
	function left_sidebar() {

		$args = array(
			'id'            => 'left-sidebar',
			'name'          => 'Left Sidebar',
			'description'   => 'This is the left sidebar.',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'left_sidebar' );

	// Woocommerce Sidebar
	function shop_sidebar() {

		$args = array(
			'id'            => 'shop-sidebar',
			'name'          => 'Shop Sidebar',
			'description'   => 'This is the WooCommerce sidebar.',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'shop_sidebar' );

	// Register Right Sidebar
	function right_sidebar() {

		$args = array(
			'id'            => 'sb-right',
			'name'          => 'Right Sidebar',
			'description'   => 'This is the right sidebar.',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'right_sidebar' );

	// Register Home Page Right Sidebar
	function home_right_sidebar() {

		$args = array(
			'id'            => 'hp-sb-right',
			'name'          => 'Home Page Right Sidebar',
			'description'   => 'This is the right sidebar on the home page.',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'home_right_sidebar' );

	// Register Home Page Right Sidebar
	function home_left_sidebar() {

		$args = array(
			'id'            => 'hp-sb-left',
			'name'          => 'Home Page Left Sidebar',
			'description'   => 'This is the left sidebar on the home page.',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'home_left_sidebar' );

	// Enable shortcodes in widgets
	add_filter('widget_text', 'do_shortcode');

	// Enable PHP in widgets
	add_filter('widget_text','execute_php',100);
	function execute_php($html){
		if(strpos($html,"<"."?php")!==false){
			ob_start();
			eval("?".">".$html);
			$html=ob_get_contents();
			ob_end_clean();
		}
		return $html;
	}

	// RevLocal Options
	if( function_exists('acf_add_options_page') ) {
	
		$page = acf_add_options_page(array(
			'page_title' 	=> 'RevLocal',
			'menu_title' 	=> 'RevLocal',
			'icon_url'		=> get_template_directory_uri() . '/img/revlocal-logo.png',
			'menu_slug' 	=> 'revlocal-settings',
			'capability' 	=> 'edit_posts',
			'position'		=> '',
			'redirect' 		=> false
		));
	 
	}

	// Register & Enqueue Scripts & Styles
	function register_styles_n_scripts() {
	// Keep scrits and style from loading in admin dashboard
	if ( ! is_admin() ) {

			// Stylesheets

			wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', null, null, 'all' );
			wp_enqueue_style( 'fontawesome' );

			wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, null, 'all' );
			wp_enqueue_style( 'bootstrap' );

			wp_register_style('specialelitefont', '//fonts.googleapis.com/css?family=Special+Elite', null, null, 'all' );
			wp_enqueue_style( 'specialelitefont' );

			wp_enqueue_style( 'revlocal', get_stylesheet_uri() );

			// Scripts
			wp_register_script( 'modernizr', get_stylesheet_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', null, null, true );
			wp_enqueue_script( 'modernizr' );

			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/js/vendor/jquery-2.1.3.min.js', null, null, false );
			wp_enqueue_script( 'jquery' );

			wp_register_script( 'bootstrapjs', get_stylesheet_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ), null, false );
			wp_enqueue_script( 'bootstrapjs' );

			wp_register_script( 'plugins', get_stylesheet_directory_uri() . '/js/plugins.js', array( 'jquery' ), null, false );
			wp_enqueue_script( 'plugins' );

			wp_register_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array( 'bootstrapjs' ), null, false );
			wp_enqueue_script( 'script' );
		}
	}
	add_action( 'init', 'register_styles_n_scripts' );