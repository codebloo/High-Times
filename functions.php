<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Global Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
	  'mobile-menu' => __( 'Mobile Menu' ),
	  'account-menu' => __( 'Account Menu' ),
		'home-menu' => __( 'Home Menu' )  
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support('post-thumbnails');
add_image_size( 'slides', 940, 480, true ); // 940 pixels wide by 480 pixels tall, hard crop mode
add_image_size( 'team', 600, 600, true ); // 940 pixels wide by 480 pixels tall, hard crop mode
add_post_type_support( 'page', 'excerpt' );


/*-----------------------------------------------------------------------------------*/
/* Equeue JS
/*-----------------------------------------------------------------------------------*/

function js_scripts_load_cdn()
{
	wp_register_script( 'modernizer', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ) );
	wp_register_script( 'pace', get_template_directory_uri() . '/js/pace.min.js', array( 'jquery' ) );
	wp_register_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ) );
	wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
	wp_register_script( 'plugin', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ) );
	

	// For either a plugin or a theme, you can then enqueue the script:owl.carousel.js
	
	wp_enqueue_script( 'pace' );
	wp_enqueue_script( 'owl' );
	wp_enqueue_script( 'modernizer' );
	
}
add_action( 'wp_enqueue_scripts', 'js_scripts_load_cdn' );

/*-----------------------------------------------------------------------------------*/
/* Equeue CCS
/*-----------------------------------------------------------------------------------*/

function css_styles()
{

	// Register the style like this for a theme:
	wp_register_style( 'base', get_template_directory_uri() . '/css/base.css', array(), '', 'all' );
	wp_register_style( 'vendor', get_template_directory_uri() . '/css/vendor.css', array(), '', 'all' );
	wp_register_style( 'owl', get_template_directory_uri() . '/css/owl.css', array(), '', 'all' );
	wp_register_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '', 'all' );
	wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '', 'all' );
	

	// For either a plugin or a theme, you can then enqueue the style:

	wp_enqueue_style( 'base' );
	wp_enqueue_style( 'vendor' );
	wp_enqueue_style( 'owl' );
	wp_enqueue_style( 'owl-theme' );
	wp_enqueue_style( 'main' );

}
add_action( 'wp_enqueue_scripts', 'css_styles' );

/*-----------------------------------------------------------------------------------*/
/* Press
/*-----------------------------------------------------------------------------------*/

add_action( 'init', 'register_cpt_press' );

function register_cpt_press() {

    $labels = array( 
        'name' => _x( 'Press', 'press' ),
        'singular_name' => _x( 'Press', 'press' ),
        'add_new' => _x( 'Add New', 'press' ),
        'add_new_item' => _x( 'Add New Press', 'press' ),
        'edit_item' => _x( 'Edit Press', 'press' ),
        'new_item' => _x( 'New Press', 'press' ),
        'view_item' => _x( 'View Press', 'press' ),
        'search_items' => _x( 'Search Press', 'press' ),
        'not_found' => _x( 'No press found', 'press' ),
        'not_found_in_trash' => _x( 'No press found in Trash', 'press' ),
        'parent_item_colon' => _x( 'Parent Press:', 'press' ),
        'menu_name' => _x( 'Press', 'press' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'revisions', 'thumbnail', 'editor' ),
        'taxonomies' => array( 'skill-type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
		  'menu_icon' => 'dashicons-art',
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'press', $args );
}

/*-----------------------------------------------------------------------------------*/
/* Sidebars
/*-----------------------------------------------------------------------------------*/

if ( function_exists('register_sidebar') ) {


			register_sidebar(array('name'=>'Default',
					'id'=>'Default',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h4>',
					'after_title' => '</h4>',
				));
				
			register_sidebar(array('name'=>'Footer',
					'id'=>'Footer',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2>',
					'after_title' => '</h2>',
				));	

		
			register_sidebar(array('name'=>'Contact',
					'id'=>'Contact',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h4>',
					'after_title' => '</h4>',
				));	
				
	

}

/*-----------------------------------------------------------------------------------*/
/* Options
/*-----------------------------------------------------------------------------------*/


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
			'page_title' 	=>  'High Times Settings',
			'menu_title'	=>  'High Times Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}


?>
