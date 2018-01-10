<?php
/**
 * Ammann Apollo functions and definitions
 *
 * @package DTN
 */

@ini_set( 'upload_max_size' , '25M' );
@ini_set( 'post_max_size', '25M');
@ini_set( 'max_execution_time', '300' );



if ( ! function_exists( 'yam_setup' ) ) :

function yam_setup() {

	

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );	
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'yam' ),
	) );

	if( function_exists('acf_add_options_page') ) {
			acf_add_options_page();
			acf_add_options_sub_page('General');
			acf_add_options_sub_page('Header');
			acf_add_options_sub_page('Footer');
		}

}
endif;
add_action( 'after_setup_theme', 'yam_setup' );


function yam_scripts() {
	wp_enqueue_style( 'yam-styles', get_stylesheet_directory_uri().'/dist/css/main.css' );

	wp_enqueue_style( 'yam-animate', get_stylesheet_directory_uri().'/dist/css/animate.css' );
	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('vimeo-js', 'https://player.vimeo.com/api/player.js', true);

	//wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', true);

	wp_enqueue_script('yam-theme-js', get_stylesheet_directory_uri() . '/dist/js/app.min.js', array('jquery'), true);

}
add_action( 'wp_enqueue_scripts', 'yam_scripts' );


require get_template_directory() . '/inc/yam-cpts/yam-cpts.php';
require get_template_directory() . '/inc/yam-custom-functions.php';


function rewrites_init() {

	add_rewrite_rule('industries/(.*)/(.*)/([^/]*)$', 'index.php?post_type=product&name=$matches[3]', 'top');
	
	//flush_rewrite_rules();
}
add_action('init', 'rewrites_init');


function product_cpt_generating_rule($wp_rewrite) {
    
      
                
        $rules['/industries/weather/aviation/aviationsentry-helicopter'] = 'index.php?post_type=product&slug=aviationsentry-helicopter';
                        
    
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
//add_filter('generate_rewrite_rules', 'resources_cpt_generating_rule');

/*add_action('init', function() {
  
     // load the file if exists
     $load = locate_template('single-product.php', true);
     if ($load) {
        exit(); // just exit if template was found and loaded
     }
  
});*/







