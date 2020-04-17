<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

/* Custom Post Type */
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

/* Custom Post Type Start */
function create_posttype() {
register_post_type( 'about_page',
// CPT Options
array(
  'labels' => array(
   'name' => __( 'About Page' ),
   'singular_name' => __( 'About Page' )
  ),
  'public' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'about'),
 )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
/* Custom Post Type End */
