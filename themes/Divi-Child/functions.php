<?php
	// Get the theme settings from admin/settings.php
	include('admin/settings.php');

	include('shortcodes.php');

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

	if ( ! function_exists( 'front_page_sidebar' ) ) {

	// Register Sidebar
	function front_page_sidebar() {

		$args = array(
			'id'            => 'front_page_sidebar',
			'name'          => 'Front Page Sidebar Over',
			'description'   => 'This sidebar only displays on the front page and above the subscribe widget.',
			'class'         => 'front_page_sidebar',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'front_page_sidebar' );

	}

	if ( ! function_exists( 'front_page_sidebar2' ) ) {

	// Register Sidebar
	function front_page_sidebar2() {

		$args = array(
			'id'            => 'front_page_sidebar2',
			'name'          => 'Front Page Sidebar Under',
			'description'   => 'This sidebar only displays on the front page and below the subscribe widget.',
			'class'         => 'front_page_sidebar2',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div><!-- .widget -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'front_page_sidebar2' );

	}

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

	// Add class to first and last menu items
	function add_markup_pages($output) {
		$output= preg_replace('/menu-item/', 'first-menu-item', $output, 1);
		$output=substr_replace($output, "last-menu-item", strripos($output, "menu-item"), strlen("menu-item"));
		return $output;
	}
	add_filter('wp_nav_menu', 'add_markup_pages');

	// Register Custom Sidebar
	if ( ! function_exists( 'revbar' ) ) {

	function revbar() {

		$args = array(
			'id'            => 'main_sidebar',
			'name'          => 'Main Sidebar',
			'description'   => 'This is the main sidebar',
			'class'         => 'sidebar_widget',
			'before_title'  => '<div class="dots"></div><!-- .dots --><h4 class="widgettitle">',
			'after_title'   => '</h4>',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div><div class="dots"></div><!-- .dots -->',
		);
		register_sidebar( $args );

	}

	// Hook into the 'widgets_init' action
	add_action( 'widgets_init', 'revbar' );

	}

	// Declare WooCommerce Support
	add_theme_support( 'woocommerce' );

	// Register & Enqueue Scripts & Styles
	function register_styles_n_scripts() {
	// Keep scrits and style from loading in admin dashboard
	if ( ! is_admin() ) {

			// Stylesheets

			wp_register_style('fontawesome', get_template_directory_uri() . '/../Divi-Child/css/font-awesome.min.css', null, null, 'all' );
			wp_enqueue_style( 'fontawesome' );

			wp_register_style('bootstrap', get_template_directory_uri() . '/../Divi-Child/css/bootstrap.min.css', null, null, 'all' );
			wp_enqueue_style( 'bootstrap' );

			wp_register_style('fonts', get_template_directory_uri() . '/../Divi-Child/css/fonts.css', null, null, 'all' );
			wp_enqueue_style( 'fonts' );

			wp_register_style('montserrat', '//fonts.googleapis.com/css?family=Montserrat', null, null, 'all' );
			wp_enqueue_style( 'montserrat' );

			wp_enqueue_style( 'revlocal-style', get_stylesheet_uri());

			// Scripts
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/../Divi-Child/js/jquery-2.1.1.min.js', null, null, false );
			wp_enqueue_script( 'jquery' );

			wp_register_script( 'bootstrapjs', get_stylesheet_directory_uri() . '/../Divi-Child/js/vendor/bootstrap.min.js', array( 'jquery' ), null, false );
			wp_enqueue_script( 'bootstrapjs' );

			wp_register_script( 'script', get_stylesheet_directory_uri() . '/../Divi-Child/js/script.js', array( 'jquery' ), null, false );
			wp_enqueue_script( 'script' );
		}
	}
	add_action( 'init', 'register_styles_n_scripts' );
