<?php 
	


	add_action('after_setup_theme', function(){
		register_nav_menus([
			'header-menu' => 'Главное меню',
			'footer-menu-1' => 'Меню в футере 1',
			'footer-menu-2' => 'Меню в футере 2',
			'footer-menu-3' => 'Меню в футере 3',
		]);
	});

	// change id from header menu item
	add_filter('nav_menu_item_id', 'filter_menu_item_css_id', 10 , 4);
	function filter_menu_item_css_id($menu_id, $item, $args, $depth){
		return '';
	}
	// change class from header menu item
	add_filter('nav_menu_css_class', 'filter_nav_menu_css_classes',10,4);
	function filter_nav_menu_css_classes($classes, $item, $args, $depth){
		if($args->theme_location === 'header-menu'){
			$classes = ['header__item'];
			return $classes;
		}
		else if($args->theme_location === 'footer-menu-1' || $args->theme_location === 'footer-menu-2' || $args->theme_location === 'footer-menu-3'){
			$classes = ['footer__item'];
			return $classes;
		}
		
	}
	add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes',10,4);
	function filter_nav_menu_link_attributes($atts, $item, $args, $depth){
		if($args->theme_location === 'header-menu'){
			$atts['class'] = 'b-line';
			return $atts;
		}
		else if($args->theme_location === 'footer-menu-1' || $args->theme_location === 'footer-menu-2' || $args->theme_location === 'footer-menu-3'){
			$atts['class'] = 'b-line';
			return $atts;
		}
	}
	add_filter('nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class',10 ,3);
	function filter_nav_menu_submenu_css_class($classes,$args,$depth){
		if($args->theme_location === 'header-menu'){
			$classes = ['header__menu--dropdown'];
			return $classes;
		}	
	}




	add_filter( 'excerpt_more', 'new_excerpt_more' );
	function new_excerpt_more( $more ){
		global $post;
		return ' <button>Читать дальше</button>';
	}



	add_theme_support( 'woocommerce' );


	add_filter('show_admin_bar', '__return_false');

	define('STERH_THEME_ROOT', get_template_directory_uri());
	define('STERH_CSS_DIR', STERH_THEME_ROOT . '/css');
	define('STERH_JS_DIR', STERH_THEME_ROOT . '/js');
	define('STERH_IMG_DIR', STERH_THEME_ROOT . '/images');




	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 'style-theme', STERH_CSS_DIR . '/style.min.css' );

	});	

	add_action( 'wp_footer', function() {
		
		wp_enqueue_script( 'script-theme', STERH_JS_DIR . '/lib.min.js');
	});
	
	

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'custom_woocommerce_template_loop_product_title', 10 );

function custom_woocommerce_template_loop_product_title() {
echo '<h3 class="myclass">' . get_the_title() . '</h3>';
}




